<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index (){
        return view('user.login');
    }

    public function postlogin (Request $request){
        // dd($request->all());
        if (Auth::attempt($request->only('nip','password','level'))){
           if (auth()->user()->level=="admin"){
            return redirect('admin/home/dashboard');
           } else if (auth()->user()->level=="pic"){
            return redirect('pic/home/dashboard');
           } else if (auth()->user()->level=="employee"){
            return redirect('employee/home/dashboard');
           }
        }
        return redirect('login');
    }

    public function logout (Request $request){
        Auth::logout();
        return redirect('/');
    }

}
