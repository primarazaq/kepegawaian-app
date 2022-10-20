<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;
use App\Models\UserTask;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index (){
        return view('user.login');
    }

    public function postlogin (Request $request){
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


        if (Auth::attempt($request->only('nip','password','level'))){

            switch(auth()->user()->level){
                case('admin'):
                    return redirect('admin/home/dashboard');
                break;
                case('pic'):
                    return redirect('pic/home/dashboard');
                break;
                case('employee'):
                    return redirect('employee/home/dashboard');
                break;
            }
        }
        return redirect('login')->with('failed','Login gagal! periksa kembali nip dan password anda!');
    }

    public function logout (Request $request){
        Auth::logout();
        return redirect('/');
    }

}
