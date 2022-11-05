<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;
use App\Models\UserTask;
use App\Models\Reply;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Encryption\DecryptException;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MyTaskEmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = DB::table('users as a')
                    ->select('b.t_due_date', 'a.id as receiver_id', 'a.name as receiver_name', 'b.id as t_id', 'b.t_title', 'b.t_file', 'b.t_body', 'b.t_status', 'b.t_priority', 'aa.id as sender_id', 'aa.name as sender_name')
                    ->where('b.t_status', 'in progress')->orWhere('b.t_status', 'created')->where('c.user_receiver_id',auth()->user()->id)
                    ->join('user_tasks as c', 'c.user_receiver_id', '=', 'a.id')
                    ->join('tasks as b', 'b.id', '=', 'c.task_id')
                    ->join('users as aa', 'aa.id', '=', 'c.user_sender_id')
                    ->orderBy('b.id' , 'asc')
                    ->get();
        
                    $deadline = DB::table('tasks')->select('id','t_due_date')->orderBy('t_due_date', 'asc')->get(); 
                    
                    //fungsi untuk membatasi deadline. Jika sudah melebihi due_date, maka status otomatis menjadi uncompleted
                    if ($deadline->has('id')){
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
                                    ->update(['t_status' => 'uncompleted']);
                            }
                        }
                }
        return view('page.employee.mytask', [
            'taskList' => $task
        ]);
        // return view('page.employee.mytask');
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

        return redirect('/employee/home/mytask/'. $id->task_id)->with('success','Respon mu berhasil disimpan!');

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
        // dd($task);
        return view('page.employee.ProgMyTask', [
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
        //
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
        $task = Task::where('id', $id)->first();
        if ($request->response_body) {
            $rules =[
                'response_file' => 'mimes:jpeg,jpg,png,docx,doc,pptx,ppt,xlsx,xls,pdf,zip,rar|file|max:10240',
                'response_body' => 'required'
            ];
    
            $validatedData = $request->validate($rules);
    
            if($request->file('response_file')){
                if($request->old_file){
                    Storage::delete($request->old_file);
                }
                $validatedData['response_file'] = $request->file('response_file')->getClientOriginalName();
                $request->file('response_file')->storeAs('task-file', $validatedData['response_file']);
            }
            
            Reply::where('id', $id)
                ->update($validatedData);

            return redirect('/employee/home/mytask/'. $request->task_id)->with('success','Response berhasil diubah!');
            
        } else {
            Task::where('id', $id)
                ->update(['t_status' => 'completed']);
                return redirect('/employee/home/taskcompleted/'. $task->id)->with('success','Status task berhasil diubah!');
        }
        
        

        // dd($validatedData);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reply = Reply::where('id',$id)->first();
        if ($reply->response_file){
            Storage::delete('task-file/'.$reply->response_file);
        }
        Reply::destroy($id);

        return redirect('/employee/home/mytask/'. $reply->task_id)->with('destroy','Response berhasil dihapus!');
    }
}
