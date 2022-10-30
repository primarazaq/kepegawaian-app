<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        // $task = DB::table('users as a')
        //             ->select('b.t_due_date', 'b.t_title','b.created_at','b.updated_at','b.t_body', 'aa.name as pembuat_task', 'b.t_status','b.t_priority', 'b.t_file','c.task_id',DB::raw('group_concat(a.nip) as multinip'), DB::raw('group_concat(a.name) as name'))
        //             ->where('c.user_sender_id',auth()->user()->id)
        //             ->join('user_tasks as c', 'c.user_receiver_id', '=', 'a.id')
        //             ->join('tasks as b', 'b.id', '=', 'c.task_id')
        //             ->join('users as aa', 'aa.id', '=', 'c.user_sender_id')
        //             ->groupBy('c.task_id')
        //             ->orderBy('b.id' , 'asc')
        //             ->get();

        $reply = Task::find(1)->replies;
        dd($reply);
                    return view('page.employee.ProgMyTask', [
                        // 'data' => $task,
                        'reply' => $reply
                    ]);
    }

    
}


