<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('page.admin.dashboard');
    }

    public function dashboard(){
        return view('page.admin.dashboard');
    }

    public function employees(){
        return view('page.admin.employees');
    }

    public function task(){
        return view('page.admin.task');
    }

    public function profile(){
        $user = User::find(auth()->user()->id);
        return view('page.admin.profile', ['user' => $user]);
    }
}
