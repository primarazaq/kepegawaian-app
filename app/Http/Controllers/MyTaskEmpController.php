<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;
use App\Models\UserTask;
use Illuminate\Support\Facades\DB;
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
        // $task = Task::with('users')->get();
        // dd($task);
        // $task = DB::table('users as a')
        //             ->select('b.t_due_date','a.nip', 'a.name', 'b.t_title','b.created_at', 'aa.name as pembuat_task', 'b.t_status', 'b.t_file')
        //             ->join('user_tasks as c', 'c.user_receiver_id', '=', 'a.id')
        //             ->join('tasks as b', 'b.id', '=', 'c.task_id')
        //             ->join('users as aa', 'aa.id', '=', 'c.user_sender_id')
        //             ->orderBy('b.id' , 'asc')
        //             ->get();
        $task = DB::table('users as a')
                    ->select('b.t_due_date', 'a.id as receiver_id', 'a.name as receiver_name', 'b.id as t_id', 'b.t_title', 'b.t_file', 'b.t_body', 'b.t_status', 'b.t_priority', 'aa.id as sender_id', 'aa.name as sender_name')
                    ->where('c.user_receiver_id',auth()->user()->id)->where('b.t_status', 'in progress')
                    ->join('user_tasks as c', 'c.user_receiver_id', '=', 'a.id')
                    ->join('tasks as b', 'b.id', '=', 'c.task_id')
                    ->join('users as aa', 'aa.id', '=', 'c.user_sender_id')
                    ->orderBy('b.id' , 'asc')
                    ->get();
        // $task['t_due_date']->diffForHumans('null, true, true, 2');


        $users = User::where('level', 'employee')->orwhere('level', 'pic')->get();
        $taskCompleted = Task::where('t_status', 'completed')->get();
        $taskInProgress = Task::where('t_status', 'in progress')->get();
        $taskUncompleted = Task::where('t_status', 'uncompleted')->get();
        
        return view('page.employee.mytask', [
            'taskList' => $task, 
            'userList' => $users,
            'taskCompleted' => $taskCompleted,
            'taskInProgress' => $taskInProgress,
            'taskUncompleted' => $taskUncompleted
            // 'substract' => $substract
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $task_id)
    {
        // $data = $request->validate([
        //     'response_file' => 'mimes:jpeg,jpg,png,docx,doc,pptx,ppt,xlsx,xls,pdf,zip,rar|file|max:10240',
        //     'response_body' => 'required'
        // ]);

        $rules =[
            'response_file' => 'mimes:jpeg,jpg,png,docx,doc,pptx,ppt,xlsx,xls,pdf,zip,rar|file|max:10240',
            'response_body' => 'required'
        ];

        $validatedData = $request->validate($rules);

        $validatedData['response_file'] = $request->file('response_file')->store('task-file');

        // dd($validatedData);
        $sender_id = $request['user_sender_id'];
        $receiver_id = auth()->user()->id;
        // $task = UserTask::where('task_id',$task_id)->get();
        UserTask::where('task_id',$task_id)
                ->where('user_sender_id',$sender_id)
                ->where('user_receiver_id',$receiver_id)
                ->update($validatedData);
                // ->update([
                //     'response_file' => $request['response_file'],
                //     'response_body' => $request['response_body']
                // ]);
        // dd($task);
        return redirect('/employee/home/mytask')->with('success','Task Berhasil dikirimkan!');


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
