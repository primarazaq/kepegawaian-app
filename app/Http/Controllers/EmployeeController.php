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
        $deadline = DB::table('tasks')->select('id','t_due_date')->orderByDesc('t_due_date')->get();
        // $case1 = Carbon::parse($deadline[0]->t_due_date)->diffForHumans();
        $due_date = collect([$deadline[0],$deadline[1],$deadline[2]]);

        $taskCompleted = Task::where('t_status', 'completed')->get();
        $taskInProgress = Task::where('t_status', 'in progress')->get();
        $taskUncompleted = Task::where('t_status', 'uncompleted')->get();
        // $deadline = Task::
        // dd($due_date);
        
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
        return view('page.employee.profile');
    }
}
