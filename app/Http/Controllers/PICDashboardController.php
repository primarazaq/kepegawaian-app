<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;
use App\Models\Reply;
use App\Models\UserTask;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PICDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $task = DB::table('users as a')
                    ->select('b.t_due_date','a.nip', 'b.t_title','b.created_at','b.updated_at','b.t_body', 'aa.name as pembuat_task', 'b.t_status','b.t_priority', 'b.t_file','c.task_id',DB::raw('group_concat(a.nip) as multinip'), DB::raw('group_concat(a.name) as name'))
                    ->where('c.user_sender_id',auth()->user()->id)
                    ->join('user_tasks as c', 'c.user_receiver_id', '=', 'a.id')
                    ->join('tasks as b', 'b.id', '=', 'c.task_id')
                    ->join('users as aa', 'aa.id', '=', 'c.user_sender_id')
                    ->groupBy('c.task_id')
                    ->orderBy('b.id' , 'asc')
                    ->get();

                    $deadline = DB::table('tasks')->select('id','t_due_date')->orderBy('t_due_date', 'asc')->get(); 
                    
                    foreach ($task as $item) {
                        $reply = Task::find($item->task_id)->replies;
                        if (count($reply) == 1) {
                            Task::where('id', $item->task_id)
                                ->update(['t_status' => 'in progress']);
                        } elseif (count($reply) == 0) {
                            Task::where('id', $item->task_id)
                                ->update(['t_status' => 'created']);
                        }
                    }

                    //fungsi untuk membatasi deadline. Jika sudah melebihi due_date, maka status otomatis menjadi uncompleted

                    foreach ($deadline as $item) {

                        $seconds = strtotime($item->t_due_date) - time();

                        $days = floor($seconds / 86400);
                        $seconds %= 86400;

                        $hours = floor($seconds / 3600);
                        $seconds %= 3600;

                        $minutes = floor($seconds / 60);
                        $seconds %= 60;

                        $task_id = $item->id;

                        // dd($days);
                        if ($days <= 0 || $hours < 0 || $minutes < 0) {
                            Task::where('id', $task_id)
                                ->update(['t_status' => 'overdue']);
                        }
                    }
       
        $users = User::where('level', 'employee')->orwhere('level', 'pic')->get();
        $taskCompleted = Task::where('t_status', 'completed')->get();
        $taskInProgress = Task::where('t_status', 'in progress')->get();
        $taskUncompleted = Task::where('t_status', 'uncompleted')->get();
        $employee = User::where('level', 'employee')->get();

        return view('page.pic.dashboard', [
            'taskList' => $task, 
            // 'assigned' => $assigned,
            'userList' => $users,
            'taskCompleted' => $taskCompleted,
            'taskInProgress' => $taskInProgress,
            'taskUncompleted' => $taskUncompleted,
            'pegawai' => $employee

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reply = $request->validate([
            // 'user_receiver_id' => 'required',
            'task_id' => 'required',
            'response_body' => 'required'
        ]);
        if($request->file('response_file')){
            $reply['response_file'] = $request->file('response_file')->getClientOriginalName();
            $request->file('response_file')->storeAs('task-file', $reply['response_file']);
        }
        $reply['user_receiver_id'] = auth()->user()->id;

        $id = Reply::create($reply);

        return redirect('/pic/home/dashboard/'. $id->task_id)->with('success','Respon mu berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = DB::table('users as a')
                    ->select('b.t_due_date', 'b.t_title','b.created_at','b.updated_at','b.t_body', 'aa.name as pembuat_task', 'b.t_status','b.t_priority', 'b.t_file','c.task_id',DB::raw('group_concat(a.nip) as multinip'), DB::raw('group_concat(a.name) as name'))
                    ->where('c.task_id',$id)
                    ->join('user_tasks as c', 'c.user_receiver_id', '=', 'a.id')
                    ->join('tasks as b', 'b.id', '=', 'c.task_id')
                    ->join('users as aa', 'aa.id', '=', 'c.user_sender_id')
                    ->groupBy('c.task_id')
                    ->orderBy('b.id' , 'asc')
                    ->first();
        $reply = Task::find($id)->replies;
        $users = User::all();

        if (count($reply) == 1) {
            Task::where('id', $id)
                ->update(['t_status' => 'in progress']);
        } elseif (count($reply) == 0) {
            Task::where('id', $id)
                ->update(['t_status' => 'created']);
        }

        // dd($task);
        return view('page.pic.detailTaskPIC', [
            'task' => $task,
            'user' => $users,
            'reply' => $reply
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = DB::table('users as a')
                    ->select('b.t_due_date','a.nip', 'a.name', 'b.t_title','b.created_at','b.t_body', 'aa.name as pembuat_task', 'b.t_status','b.t_priority', 'b.t_file','c.task_id',DB::raw('group_concat(a.id) as multiID'))
                    ->where('c.task_id', $id)
                    ->join('user_tasks as c', 'c.user_receiver_id', '=', 'a.id')
                    ->join('tasks as b', 'b.id', '=', 'c.task_id')
                    ->join('users as aa', 'aa.id', '=', 'c.user_sender_id')
                    ->groupBy('c.task_id')
                    ->orderBy('b.id' , 'asc')->first();
        $employee = DB::table('users')->select('id', 'name')->where('level', 'employee')->get();
        $employeeNotIN = DB::table('users')->select('id', 'name')->where('level', 'employee')->whereNotIn('id', DB::table('user_tasks')->select('user_receiver_id')->where('task_id', $id))->get();
        // dd($employeeNotIN);
        return view('page.pic.edit',[
            'pegawai' => $employee,
            'pegawaiNotIN' => $employeeNotIN,
            'id' => $id,
            'data' => $task
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        if ($request->response_body) {
            $rules =[
                'response_file' => 'mimes:jpeg,jpg,png,docx,doc,pptx,ppt,xlsx,xls,pdf,zip,rar|file|max:10240',
                'response_body' => 'required'
            ];
    
            $validatedData = $request->validate($rules);
    
            if($request->file('response_file')){
                if($request->old_file){
                    Storage::delete('task-file/'.$request->old_file);
                }
                $validatedData['response_file'] = $request->file('response_file')->getClientOriginalName();
                $request->file('response_file')->storeAs('task-file', $validatedData['response_file']);
            }
            
            Reply::where('id', $id)
                ->update($validatedData);

            return redirect('/pic/home/dashboard/'. $request->task_id)->with('success','Response berhasil diubah!');
            
        } else {
                    $rules = [
                        't_title' => 'required',
                        't_file' => 'mimes:jpeg,jpg,png,docx,doc,pptx,ppt,xlsx,xls,pdf,zip,rar|file|max:10240',
                        't_body' => 'required',
                        't_status' => 'required',
                        't_priority' => 'required',
                        't_due_date' => 'required'
                    ];
            
                    $validatedData = $request->validate($rules);
            
                    //jika ada file upload yg baru, maka hapus yg lama simpan ygg baru
                    if($request->file('t_file')){
                        if($request->old_file){
                            Storage::delete('task-file/'.$request->old_file);
                        }
                        $validatedData['t_file'] = $request->file('t_file')->getClientOriginalName();
                        $request->file('t_file')->storeAs('task-file', $validatedData['t_file']);
                    }
                    Task::where('id',$id)
                        ->update($validatedData); //update file ke table tasks
            
                        $data = $request->validate([
                            'user_receiver_id' => 'required'
                        ]);
            
                        $data['user_sender_id'] = auth()->user()->id;
                        $data['task_id'] = $id;
                        
                        $taskID = DB::table('user_tasks')->select('id', 'task_id')->where('task_id',$id)->get();
                        if (count($data['user_receiver_id']) >= 2) {
                            $penerimaTask = $data['user_receiver_id'];
                            $task_id = $data['task_id'];
                            UserTask::where('task_id', $task_id)->delete();
                                foreach ($penerimaTask as $item) {
                                    $DataUserTask = [
                                        'user_sender_id' => $data['user_sender_id'],
                                        'task_id' => $data['task_id'],
                                        'user_receiver_id' => $item
                                    ];
                                    UserTask::create($DataUserTask);
                                } 
                        }
            
                        
                        //jika data yg penerima hanya 1, maka
                        if (count($data['user_receiver_id']) == 1 ){
                            //hitung dulu tasknya, jika memang task_id cuma 1 maka
                            // ini kasus dari banyak assigne mau jadi 1 assigne aja
                            $penerimaTask = implode(" ",$data['user_receiver_id']);
                                if (count($taskID) == 1) {
                                    $DataUserTask = [
                                        'user_sender_id' => $data['user_sender_id'],
                                        'task_id' => $data['task_id'],
                                        'user_receiver_id' => $penerimaTask
                                    ];
                                    UserTask::where('task_id',$id)
                                            ->update($DataUserTask);
                                }else{ //jika ternyata task_id ini punya beberapa row, maka
                
                                    if (count($data['user_receiver_id']) >= 2) {
                                            $penerimaTask = $data['user_receiver_id'];
                                            $task_id = $data['task_id'];
                                                foreach ($penerimaTask as $item) {
                                                    UserTask::where('user_receiver_id', $item)->where('task_id',$task_id)->delete();
                                                }
                                                foreach ($penerimaTask as $item) {
                                                    $DataUserTask = [
                                                        'user_sender_id' => $data['user_sender_id'],
                                                        'task_id' => $data['task_id'],
                                                        'user_receiver_id' => $item
                                                    ];
                                                    UserTask::create($DataUserTask);
                                                } 
                                    } else {
                                                //masukin dulu data pertama ke row yg sudah ada
                                            $x = DB::table('user_tasks')->select('id')->where('task_id',$id)->first();
                                            $penerimaTask = implode(" ",$data['user_receiver_id']);
                                            $first = $taskID->whereIn('id', $x);
                                            
                                            foreach ($first as $item) {
                                                
                                                UserTask::where('id', $item->id)->update(['user_receiver_id' => $penerimaTask]);
                                            }
                        
                                            
                                            //hapus row lainnya
                                            $final = $taskID->whereNotIn('id',$x);
                                            // dd($final);
                                            foreach ($final as $item) {
                                                // dd($item);
                                                UserTask::where('id', $item->id)->delete();
                                            }
                                    }
                                    
                                    
                                }
                            
                            
                        }else{
                            $penerimaTask = $data['user_receiver_id'];
                            $task_id = $data['task_id'];
                                foreach ($penerimaTask as $item) {
                                    UserTask::where('user_receiver_id', $item)->where('task_id',$task_id)->delete();
                                }
                                foreach ($penerimaTask as $item) {
                                    $DataUserTask = [
                                        'user_sender_id' => $data['user_sender_id'],
                                        'task_id' => $data['task_id'],
                                        'user_receiver_id' => $item
                                    ];
                                    UserTask::create($DataUserTask);
                                } 

                            }
                            $task = Task::where('id', $id)->first();
                            
                            return redirect('/pic/home/dashboard/'.$task->id)->with('success','Data berhasil diubah!');
        }

        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reply = Reply::where('task_id', $id)->get();
        // dd($usertask->id);
        foreach ($reply as $item) {
            if ($item->response_file){
                Storage::delete('task-file/'.$item->response_file);
            }
        }

        $task = Task::find($id);
        // dd($task->t_file);
        if ($task->t_file) {
            Storage::delete('task-file/'.$task->t_file);
        }
        

            // dd($id);
        Reply::where('task_id', $id)->delete($id);
        Task::destroy($id);
        // UserTask::where('task_id',$id)->delete();
        return redirect('/pic/home/dashboard')->with('destroy', 'Task berhasil dihapus!');
    }
}
