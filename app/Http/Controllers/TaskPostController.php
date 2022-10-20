<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TaskPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = DB::table('users as a')
                    ->select('b.t_due_date','a.nip', 'b.t_title','b.created_at','b.updated_at','b.t_body', 'aa.name as pembuat_task', 'b.t_status', 'b.t_file','c.task_id',DB::raw('group_concat(a.nip) as multinip'), DB::raw('group_concat(a.name) as name'), DB::raw('group_concat(c.response_file) as response_file'), DB::raw('group_concat(c.response_body) as response_body'))
                    ->join('user_tasks as c', 'c.user_receiver_id', '=', 'a.id')
                    ->join('tasks as b', 'b.id', '=', 'c.task_id')
                    ->join('users as aa', 'aa.id', '=', 'c.user_sender_id')
                    ->groupBy('c.task_id')
                    ->orderBy('b.id' , 'asc')
                    ->get();

                    $deadline = DB::table('tasks')->select('id','t_due_date')->orderBy('t_due_date', 'asc')->get(); 
                    
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
                                ->update(['t_status' => 'uncompleted']);
                        }
                    }

        $users = User::where('level', 'employee')->orwhere('level', 'pic')->get();
        $taskCompleted = Task::where('t_status', 'completed')->get();
        $taskInProgress = Task::where('t_status', 'in progress')->get();
        $taskUncompleted = Task::where('t_status', 'uncompleted')->get();

        return view('page.admin.dashboard', [
            'taskList' => $task, 
            // 'assigned' => $assigned,
            'userList' => $users,
            'taskCompleted' => $taskCompleted,
            'taskInProgress' => $taskInProgress,
            'taskUncompleted' => $taskUncompleted
        ]);

        // return view('page.admin.dashboard', [
            
            // $task = Task::with('users')->get();
            // return view('page.admin.dashboard', ['taskList' => $task]);
            // dd($task);
            //utk berdasarkan yg login
            // 'tasks' => Task::where('user_id', auth()->user()->id)->get()
        // ]);
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
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
