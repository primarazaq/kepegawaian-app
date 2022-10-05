<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        return view('page.admin.employees', [

            'users' => User::where('level', 'employee')->orwhere('level', 'pic')->get()
            // $task = Task::with('users')->get();
            // return view('page.admin.dashboard', ['taskList' => $task]);
            // dd($task);
            //utk berdasarkan yg login
            // 'tasks' => Task::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'nip' => 'required|unique:users|digits_between:0,9',
            'name' => 'required|regex:[a-zA-Z]',
            'level' => 'required',
            'tgl_lhr' => 'required',
            'password' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['password'] = Hash::make($validatedData['password']);
        // $validatedData['created_at'] = User::save(['timestamps' => FALSE]);
        User::create($validatedData);

        return redirect('/admin/home/employees')->with('success','Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
