<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\User;
use App\Models\UserTask;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Collection;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MyTaskEmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = DB::table('users as a')
                    ->select('b.t_due_date', 'a.id as receiver_id', 'a.name as receiver_name', 'b.id as t_id', 'b.t_title', 'b.t_file', 'b.t_body', 'b.t_status', 'b.t_priority', 'aa.id as sender_id', 'aa.name as sender_name')
                    ->where('c.user_receiver_id',auth()->user()->id)->where('b.t_status', 'in progress')
                    ->join('user_tasks as c', 'c.user_receiver_id', '=', 'a.id')
                    ->join('tasks as b', 'b.id', '=', 'c.task_id')
                    ->join('users as aa', 'aa.id', '=', 'c.user_sender_id')
                    ->orderBy('b.id' , 'asc')
                    ->get();
        
                    $deadline = DB::table('tasks')->select('id','t_due_date')->orderBy('t_due_date', 'asc')->get(); 
                    
                    //fungsi untuk membatasi deadline. Jika sudah melebihi due_date, maka status otomatis menjadi uncompleted
                    if ($deadline->has('id')){
                        foreach ($deadline as $item) {

                            $seconds = strtotime($item->t_due_date) - time();

                            $days = floor($seconds / 86400);
                            $seconds %= 86400;

                            $hours = floor($seconds / 3600);
                            $seconds %= 3600;

                            $minutes = floor($seconds / 60);
                            $seconds %= 60;

                            $task_id = $item->id;

                            // dd($days);
                            if ($days <= 0 || $hours < 0 || $minutes < 0) {
                                Task::where('id', $task_id)
                                    ->update(['t_status' => 'uncompleted']);
                            }
                        }
                }
        return view('page.employee.mytask', [
            'taskList' => $task
        ]);
        // return view('page.employee.mytask');
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
        //
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
    public function update(Request $request, $task_id)
    {
        $rules =[
            'response_file' => 'mimes:jpeg,jpg,png,docx,doc,pptx,ppt,xlsx,xls,pdf,zip,rar|file|max:10240',
            'response_body' => 'required',
            'submit' => 'required'
        ];

        $validatedData = $request->validate($rules);

        
        if($request->file('response_file')){
            if($request->old_file){
                Storage::delete($request->old_file);
            }
            $validatedData['response_file'] = $request->file('response_file')->store('task-file');
        }
        
        $task = DB::table('user_tasks')->select('submit')->where('task_id', $task_id)->get();
        // dd($task);
        if (count($task)>1) {
            UserTask::where('task_id',$task_id)
                    ->where('user_sender_id',$request['user_sender_id'])
                    ->where('user_receiver_id',auth()->user()->id)
                    ->update($validatedData);

                    $receiver_id = auth()->user()->id;
                    $task2 = DB::table('user_tasks')->select('submit')->where('task_id', $task_id)->get();
                    $checkData = new Collection();

                    foreach ($task2 as $items) {
                        foreach ($items as $item) {
                            $checkData->push($item);
                        }
                    }
                    // dd($checkData);
                        if (count($checkData) == 2 ) {
                            if ($checkData[0] == 1 && $checkData[1] == 1) {
                                Task::where('id', $task_id)
                                    ->update(['t_status' => 'completed']);
                                    UserTask::where('task_id', $task_id)->where('user_receiver_id',$receiver_id)->update(['submit' => true]);
                            }
                        } elseif (count($checkData) == 3) {
                            if ($checkData[0] == 1 && $checkData[1] == 1 && $checkData[2] == 1) {
                                Task::where('id', $task_id)
                                    ->update(['t_status' => 'completed']);
                                    UserTask::where('task_id', $task_id)->where('user_receiver_id',$receiver_id)->update(['submit' => true]);
                            }
                        } elseif (count($checkData) == 4) {
                            if ($checkData[0] == 1 && $checkData[1] == 1 && $checkData[2] == 1 && $checkData[3] == 1) {
                                Task::where('id', $task_id)
                                    ->update(['t_status' => 'completed']);
                                    UserTask::where('task_id', $task_id)->where('user_receiver_id',$receiver_id)->update(['submit' => true]);
                            }
                        } 
        } else {

            UserTask::where('task_id',$task_id)
                    ->where('user_sender_id',$request['user_sender_id'])
                    ->where('user_receiver_id',auth()->user()->id)
                    ->update($validatedData);
                    
            Task::where('id', $task_id)
                ->update(['t_status' => 'completed']);
        }


        

        // dd($validatedData);
        return redirect('/employee/home/mytask')->with('success','Task Berhasil dikirimkan!');


        
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
