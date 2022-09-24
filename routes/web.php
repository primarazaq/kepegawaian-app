<?php

use App\Http\Controllers\HomeController;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    Route::get('/', function () {
        return view('user.login');
    })->middleware(['auth', 'verified']);

    Route::get('/login', function () {
        return view('user.login');
    })->name('login');

    Route::get('/home', function () {
            return view('home');
        })->middleware(['auth', 'verified']);

    Route::get('/home/dashboard', function(){
            return view('/page/dashboard');
        })->name('dashboard')->middleware(['auth', 'verified']);

    Route::get('/home/task', function(){
        return view('/page/task');
    })->name('task')->middleware(['auth', 'verified']);

    Route::get('/home/employees', function(){
        return view('/page/employees');
    })->name('employees')->middleware(['auth', 'verified']);

    Route::get('/home/profile', function(){
        return view('/page/profile');
    })->name('profile')->middleware(['auth', 'verified']);

    Route::post('/postlogin', 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');
    Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');
    
    // Route::get('/home', [HomeController::class, 'index'])->middleware(['auth', 'verified']);

    // Route::group(['middleware' => ['auth', 'verified']], function(){
    //     Route::get('/home', [HomeController::class, 'index']);
    //     // Route::get('/home/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // });