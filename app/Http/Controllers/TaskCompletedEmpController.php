<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;
use App\Models\UserTask;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TaskCompletedEmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = DB::table('users as a')
                    ->select('b.t_due_date', 'a.id as receiver_id', 'b.id as t_id', 'b.t_title', 'b.t_file', 'b.t_body', 'b.t_status', 'b.t_priority', 'aa.id as sender_id', 'aa.name as sender_name', 'b.updated_at', DB::raw('group_concat(a.name) as name'))
                    ->where('c.user_receiver_id',auth()->user()->id)->where('b.t_status', 'completed')->orWhere('b.t_status', 'overdue')
                    ->join('user_tasks as c', 'c.user_receiver_id', '=', 'a.id')
                    ->join('tasks as b', 'b.id', '=', 'c.task_id')
                    ->join('users as aa', 'aa.id', '=', 'c.user_sender_id')
                    ->groupBy('c.task_id')
                    ->orderBy('b.id' , 'asc')
                    ->get();
        
        return view('page.employee.taskcompleted', [
            'taskList' => $task
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
        return view('page.employee.detailTaskComp', [
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
        Task::where('id', $id)
                ->update(['t_status' => 'in progress']);
                
                $task = Task::where('id', $id)->first();

                // dd($validatedData);
                return redirect('/employee/home/mytask/'. $task->id)->with('success','Status task berhasil diubah!');
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
