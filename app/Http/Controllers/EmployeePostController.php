<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;
use App\Models\UserTask;
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

            'users' => User::where('level', 'employee')->orwhere('level', 'pic')->withTrashed()->get()
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
       //
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
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'tgl_lhr' => 'required',
            'nip' => 'required|unique:users|regex:/^[a-zA-Z0-9 ]+$/|max:15',
            'password' => 'required|max:50',
            'level' => 'required'
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
        // if (Hash::check('plain-text', $id['password'])){

        //     $id['password'] = Hash::make('plain-text');
        // }
        return view('admin.employees',[
            'id' => $id,
            'user' => User::all()
            // 'password' => $id['password']
        ]);

        
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
        if ($request->restore) {
            User::onlyTrashed()->where('id', $request->restore)->restore();
        }else {
            $rules = [
                'name' => 'required|regex:/^[\pL\s\-]+$/u|max:100',
                'tgl_lhr' => 'required',
                'level' => 'required'
            ];
    
            
    
            // $validatedData = $request->validate([
            //     'name' => 'required|regex:/^[\pL\s\-]+$/u',
            //     'tgl_lhr' => 'required',
            //     'level' => 'required'
            // ]);
    
            $user = User::find($id);
    
            if($request->nip != $user->nip){
                $rules['nip'] = 'required|unique:users|regex:/^[a-zA-Z0-9 ]+$/|max:15' ;
            }
            // if($request->nip != $id){
            //     $rules['nip'] = 'required|unique:users|digits_between:0,9' ;
            // }
    
            $validatedData = $request->validate($rules);
    
            // $validatedData['id'] = auth()->user()->id;
            // $validatedData['created_at'] = User::save(['timestamps' => FALSE]);
            User::where('id', $user->id)
                ->update($validatedData);
        }

        return redirect('/admin/home/employees')->with('success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        // dd($user->level);
        switch ($user->level) {
            case 'pic':
                $pic = UserTask::where('user_sender_id' , $id)->get();
                if (count($pic) > 0) {
                    return redirect('/admin/home/employees')->with('failed','Pegawai tidak dapat dinonaktifkan! Hapus tugas yang terkait dengan pegawai terlebih dahulu!');
                } else {
                    User::destroy($id);
                    return redirect('/admin/home/employees')->with('destroy','Pegawai berhasil dinonaktifkan!');
                }
            break;
            case 'employee':
                $emp = UserTask::where('user_receiver_id' , $id)->get();
                if (count($emp) > 0) {
                    return redirect('/admin/home/employees')->with('failed','Pegawai tidak dapat dinonaktifkan! Selesaikan tugas yang terkait dengan pegawai terlebih dahulu!');
                } else {
                    User::destroy($id);
                    return redirect('/admin/home/employees')->with('destroy','Pegawai berhasil dinonaktifkan!');
                }
            break;
            
        }
        
        // dd($id);
        
    }
}
