<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View; /** Let's Import View Facade **/
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use App\Models\Task;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /** First we have to check if the table exist in our database, the reason is that if we try to run migration and the table doesn't Message doesn't exist, it will through an error because the provider will render before the migration **/

            if(Schema::hasTable('tasks') && Schema::hasTable('user_tasks'))
            {
                $notif = DB::table('tasks as b')
                ->select('b.id','b.t_due_date', 'b.t_title','c.user_receiver_id')
                ->where('b.t_status', 'in progress')->orWhere('b.t_status', 'created')
                ->join('user_tasks as c', 'c.task_id', '=', 'b.id')
                ->orderBy('b.id' , 'asc')
                ->get();
                
                $notifPIC = DB::table('tasks as b')
                ->select('b.id',DB::raw('group_concat(a.name) as name'),'b.t_due_date', 'b.t_title','c.user_receiver_id','c.user_sender_id','b.updated_at')
                ->where('b.t_status', 'completed')->orWhere('b.t_status', 'overdue')
                ->join('user_tasks as c', 'c.task_id', '=', 'b.id')
                ->join('users as a', 'c.user_receiver_id', '=', 'a.id')
                ->groupBy('c.task_id')
                ->orderBy('b.t_due_date' , 'desc')
                ->get();

                $deadline = DB::table('tasks')->select('id','t_due_date','t_status')->orderBy('t_due_date', 'asc')->get(); 
                    
                //fungsi untuk membatasi deadline. Jika sudah melebihi due_date, maka status otomatis menjadi uncompleted

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
                            ->update(['t_status' => 'overdue']);
                    } elseif ($item->t_status !== 'completed') {
                        $reply = Task::find($item->id)->replies;
                        if (count($reply) == 1) {
                            Task::where('id', $item->id)
                                ->update(['t_status' => 'in progress']);
                        } elseif (count($reply) == 0 ) {
                            Task::where('id', $item->id)
                                ->update(['t_status' => 'created']);
                        }
                    }

                }
                
                // dd($notifPIC);
            /** message = Message::get(['title','id']); // get specific column instead of all record on the table  **/
            View::share(['notif' => $notif, 'notifPIC' => $notifPIC]);
            }

    }
}
