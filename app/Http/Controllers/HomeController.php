<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index (){
    //     $var_nama = "Primarazaq NPH";
    //     return view('home', compact('var_nama'));
    // }

    public function index(){
        return view('home');
    }

    public function dashboard(){
        return view('page.dashboard');
    }
    public function task(){
        return view('page.task');
    }
    public function mytask(){
        return view('page.mytask');
    }
    public function profile(){
        return view('page.profile');
    }
}


