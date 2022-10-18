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
                    ->select('b.t_due_date', 'a.id as receiver_id', 'a.name as receiver_name', 'b.id as t_id', 'b.t_title', 'b.t_file', 'b.t_body', 'b.t_status', 'b.t_priority', 'aa.id as sender_id', 'aa.name as sender_name', 'c.updated_at','c.response_file','c.response_body')
                    ->where('c.user_receiver_id',auth()->user()->id)->where('b.t_status', 'completed')->orWhere('b.t_status', 'uncompleted')
                    ->join('user_tasks as c', 'c.user_receiver_id', '=', 'a.id')
                    ->join('tasks as b', 'b.id', '=', 'c.task_id')
                    ->join('users as aa', 'aa.id', '=', 'c.user_sender_id')
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
