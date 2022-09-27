<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('home');
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
        return view('page.admin.profile');
    }
}
