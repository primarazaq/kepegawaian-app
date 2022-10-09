<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;
use App\Models\UserTask;
use Illuminate\Http\Request;

class PICPostController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.pic.task');
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
        $DataTask = $request->validate([
            't_title' => 'required',
            't_body' => 'required',
            't_status' => 'required',
            't_priority' => 'required',
            't_due_date' => 'required'
            
        ]);
        
        $createdTask = Task::create($DataTask);

        $data = $request->validate([
            'user_receiver_id' => 'required'
        ]);
        $data['user_sender_id'] = auth()->user()->id;
        $data['task_id'] = $createdTask['id'];

        if ($data['user_receiver_id']== 1 ){
            $DataUserTask = [
                'user_sender_id' => $data['user_sender_id'],
                'task_id' => $data['task_id'],
                'user_receiver_id' => $data['user_receiver_id']
            ];
           
            UserTask::create($DataUserTask);
            return redirect('/pic/home/task')->with('success','Data berhasil dibuat!');
        }else{
            $penerimaTask = $data['user_receiver_id'];
            foreach ($penerimaTask as $list){
                $DataUserTask = [
                    'user_sender_id' => $data['user_sender_id'],
                    'task_id' => $data['task_id'],
                    'user_receiver_id' => $list
                ];
                UserTask::create($DataUserTask);
            }
            
            return redirect('/pic/home/task')->with('success','Data berhasil dibuat!');

        }

        

        
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
