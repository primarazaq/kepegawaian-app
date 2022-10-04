<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PICController extends Controller
{
    public function index(){
        return view('page.pic.dashboard');
    }

    public function dashboard(){
        return view('page.pic.dashboard');
    }

    public function task(){
        return view('page.pic.task');
    }

    public function profile(){
        return view('page.pic.profile');
    }
}
