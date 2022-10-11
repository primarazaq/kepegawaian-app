<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
                    ->select('b.t_due_date','a.nip', 'a.name', 'b.t_title','b.created_at', 'aa.name as pembuat_task', 'b.t_status', 'b.t_file')
                    ->join('user_tasks as c', 'c.user_receiver_id', '=', 'a.id')
                    ->join('tasks as b', 'b.id', '=', 'c.task_id')
                    ->join('users as aa', 'aa.id', '=', 'c.user_sender_id')
                    ->orderBy('b.id' , 'asc')
                    ->get();
       
        $users = User::where('level', 'employee')->orwhere('level', 'pic')->get();
        $taskCompleted = Task::where('t_status', 'completed')->get();
        $taskInProgress = Task::where('t_status', 'in progress')->get();
        $taskUncompleted = Task::where('t_status', 'uncompleted')->get();

        return view('page.pic.dashboard', [
            'taskList' => $task, 
            'userList' => $users,
            'taskCompleted' => $taskCompleted,
            'taskInProgress' => $taskInProgress,
            'taskUncompleted' => $taskUncompleted
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
        //
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
