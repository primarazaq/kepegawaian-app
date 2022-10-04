<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        return view('page.employee.dashboard');
    }

    public function dashboard(){
        return view('page.employee.dashboard');
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
