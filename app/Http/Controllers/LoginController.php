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
