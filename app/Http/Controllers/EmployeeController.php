<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('page.employee.dashboard');
    }

    public function dashboard(){
        // $totalTask = Task::all()->select('t_due_date')->latest();
        $deadline = DB::table('tasks as b')->select('b.id','b.t_due_date')->where('c.user_receiver_id' , auth()->user()->id)->where('b.t_status', 'in progress')->join('user_tasks as c', 'b.id', '=', 'c.task_id')->groupBy('c.task_id')->orderBy('b.t_due_date', 'asc')->get();
        // $case1 = Carbon::parse($deadline[0]->t_due_date)->diffForHumans();
        // dd($deadline);
        if ($deadline->has(2)) {
            $due_date = collect([$deadline[0],$deadline[1],$deadline[2]]);
        } elseif ($deadline->has(1)) {
            $due_date = collect([$deadline[0],$deadline[1]]);
        }
         elseif ($deadline->has(0)) {
            $due_date = collect([$deadline[0]]);
        }
         else {
            $due_date = collect();
        }

        // $taskCompleted = Task::where('t_status', 'completed')->get();
        $taskCompleted = DB::table('tasks as b')->select('b.id','b.t_status')->where('c.user_receiver_id' , auth()->user()->id)->where('t_status', 'completed')->join('user_tasks as c', 'b.id', '=', 'c.task_id')->groupBy('c.task_id')->get();
        // $taskInProgress = Task::where('t_status', 'in progress')->get();
        $taskInProgress = DB::table('tasks as b')->select('b.id','b.t_status')->where('c.user_receiver_id' , auth()->user()->id)->where('t_status', 'in progress')->join('user_tasks as c', 'b.id', '=', 'c.task_id')->groupBy('c.task_id')->get();
        // $taskUncompleted = Task::where('t_status', 'uncompleted')->get();
        $taskUncompleted = DB::table('tasks as b')->select('b.id','b.t_status')->where('c.user_receiver_id' , auth()->user()->id)->where('t_status', 'overdue')->join('user_tasks as c', 'b.id', '=', 'c.task_id')->groupBy('c.task_id')->get();

        
        // $deadline = Task::
        // dd($due_date);
        // return view('components.navbar',['notif' => $notif]);
        
        return view('page.employee.dashboard',[
            'deadline' => $deadline,
            'due_date' => $due_date,
            'taskCompleted' => $taskCompleted,
            'taskInProgress' => $taskInProgress,
            'taskUncompleted' => $taskUncompleted
        ]);
    }

    public function mytask(){
        return view('page.employee.mytask');
    }

    public function taskcompleted(){
        return view('page.employee.taskcompleted');
    }

    public function profile(){
        $user = User::find(auth()->user()->id);
        return view('page.employee.profile', ['employee' => $user]);
    }
}
