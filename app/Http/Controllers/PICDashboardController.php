<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;
use App\Models\UserTask;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
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
                    ->select('b.t_due_date','a.nip', 'b.t_title','b.created_at','b.t_body', 'aa.name as pembuat_task', 'b.t_status','b.t_priority', 'b.t_file','c.task_id',DB::raw('group_concat(a.nip) as multinip'), DB::raw('group_concat(a.name) as name'))
                    ->where('c.user_sender_id',auth()->user()->id)
                    ->join('user_tasks as c', 'c.user_receiver_id', '=', 'a.id')
                    ->join('tasks as b', 'b.id', '=', 'c.task_id')
                    ->join('users as aa', 'aa.id', '=', 'c.user_sender_id')
                    ->groupBy('c.task_id')
                    ->orderBy('b.id' , 'asc')
                    ->get();

                    $deadline = DB::table('tasks')->select('id','t_due_date')->orderBy('t_due_date', 'asc')->get(); 
                    
                    //fungsi untuk membatasi deadline. Jika sudah melebihi due_date, maka status otomatis menjadi uncompleted

                    foreach ($deadline as $item) {
                        $now = Carbon::now();
                        $nowDay = $now->day;
                        $nowHour = $now->hour;
                        $nowMnt = $now->minute;

                        $endDay = Carbon::parse($item->t_due_date)->diffInDays();
                        $endHour = Carbon::parse($item->t_due_date)->diffInHours();
                        $endMnt = Carbon::parse($item->t_due_date)->diffInMinutes();

                        $selisihDay = $endDay - $nowDay;
                        $selisihHour = $endHour - $nowHour;
                        $selisihMnt = $endMnt - $nowMnt;
                        $task_id = $item->id;

                        if ($selisihDay < 0 || $selisihHour < 0 || $selisihMnt < 0) {
                            Task::where('id', $task_id)
                                ->update(['t_status' => 'uncompleted']);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $employee = User::where('level', 'employee')->get();
        return view('page.pic.edit',[
            'pegawai' => $employee,
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
                Storage::delete($request->old_file);
            }
            $validatedData['t_file'] = $request->file('t_file')->store('task-file');
        }
        Task::where('id',$id)
            ->update($validatedData); //update ke table tasks

            $data = $request->validate([
                'user_receiver_id' => 'required'
            ]);

            $data['user_sender_id'] = auth()->user()->id;
            $data['task_id'] = $id;

            $taskID = DB::table('user_tasks')->select('id', 'task_id')->where('task_id',$id)->get();
            // dd($taskID);

            
            //jika data yg penerima hanya 1, maka
            if ($data['user_receiver_id']== 1 ){
                //hitung dulu tasknya, jika memang task_id cuma 1 maka
                if (count($taskID) == 1) {
                    $DataUserTask = [
                        'user_sender_id' => $data['user_sender_id'],
                        'task_id' => $data['task_id'],
                        'user_receiver_id' => $data['user_receiver_id']
                    ];
                    UserTask::where('task_id',$id)
                            ->update($DataUserTask);
                }else{ //jika ternyata task_id ini punya beberapa row, maka
                    //masukin dulu data pertama ke row yg sudah ada
                    $penerimaTask = $data['user_receiver_id'];
                    array_pop(array_reverse($penerimaTask));
                    $final = array_values($penerimaTask);
                    // dd($penerimaTask);
                    // $DataUserTask = [
                    //     'user_sender_id' => $data['user_sender_id'],
                    //     'task_id' => $data['task_id'],
                    //     'user_receiver_id' => $penerimaTask[0]
                    // ];
                    // UserTask::where('task_id',$id)->where('id',)
                    //         ->update($DataUserTask);
                    // unset($penerimaTask[0]); //hapus data pertama dari array
                    // $lastdata = array_values($penerimaTask);
                    // //utk data array yg lainnya, maka lakukan tiap datanya..
                    // foreach ($taskID as $key) {
                    //     $ini = DB::table('user_tasks')
                    //             ->select('id')->whereNot('id',$key['id'])->get();  
                        
                    // }
                    
                }
                
                
            }else{
                $penerimaTask = $data['user_receiver_id'];
                $DataUserTask = [
                    'user_sender_id' => $data['user_sender_id'],
                    'task_id' => $data['task_id'],
                    'user_receiver_id' => $penerimaTask[0]
                ];
                UserTask::where('task_id',$id)
                        ->update($DataUserTask);
                        
                unset($penerimaTask[0]);
                $final = array_values($penerimaTask);
                foreach ($final as $item){
                    $lastData = [
                                'user_sender_id' => $data['user_sender_id'],
                                'task_id' => $data['task_id'],
                                'user_receiver_id' => $item
                            ];
        
                            UserTask::create($lastData);
                }
            }
        return redirect('/pic/home/dashboard')->with('success','Data berhasil diubah!');
    
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $task = Task::find($id);
        // if ($task->t_file) {
        //     Storage::delete($task->t_file);
        // }
            // dd($id);
        Task::destroy($id);
        // UserTask::where('task_id',$id)->delete();
        return redirect('/pic/home/dashboard')->with('destroy', 'Task berhasil dihapus!');
    }
}
