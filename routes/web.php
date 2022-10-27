<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PICController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeePostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyTaskEmpController;
use App\Http\Controllers\TaskCompletedEmpController;
use App\Http\Controllers\TaskPostController;
use App\Http\Controllers\PICPostController;
use App\Http\Controllers\PICDashboardController;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

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

    Route::post('/postlogin', 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');
    Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

    Route::get('storage/{$data->t_file}', function ($filename){
        $path = storage_path('public/' . $filename);

        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    });

    Route::middleware('auth', 'verified')->group(function() {

        Route::middleware('checklevel:admin')->prefix('admin')->group(function() {
            Route::get('/home', [AdminController::class, 'index']);
            Route::get('/home/profile', [AdminController::class, 'profile']);

            //Resource
            Route::resource('/home/dashboard', TaskPostController::class);
            Route::resource('/home/employees', EmployeePostController::class);
        });

        Route::middleware('checklevel:pic')->prefix('pic')->group(function() {
            Route::get('/home', [PICController::class, 'index']);
            Route::get('/home/profile', [PICController::class, 'profile']);

            //Resource
            Route::resource('/home/dashboard', PICDashboardController::class);
            Route::resource('/home/task', PICPostController::class);
        });
        
        Route::middleware('checklevel:employee')->prefix('employee')->group(function() {
            Route::get('/home', [EmployeeController::class, 'index']);
            Route::get('/home/dashboard', [EmployeeController::class, 'dashboard']);
            
            Route::get('/home/profile', [EmployeeController::class, 'profile']);

            //Resource
            Route::resource('/home/mytask', MyTaskEmpController::class);
            Route::resource('/home/taskcompleted', TaskCompletedEmpController::class);
        });
    });

    Route::get('/dev', [HomeController::class, 'index']);