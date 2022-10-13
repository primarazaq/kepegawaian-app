<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User;
use App\Models\UserTask;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'nip' => '10119124',
            'name' => 'Primarazaq NPH',
            'level' => 'admin',
            'tgl_lhr' => '2001-09-13',
            'password' => bcrypt('password')
        ]);

        User::create([
            'nip' => '10119097',
            'name' => 'Ikhsan Nurul Rizki',
            'level' => 'pic',
            'tgl_lhr' => '2001-04-29',
            'password' => bcrypt('password')
        ]);

        User::create([
            'nip' => '10119112',
            'name' => 'Hilman Ahmad Fathoni',
            'level' => 'employee',
            'tgl_lhr' => '2000-01-13',
            'password' => bcrypt('password')
        ]);

        User::create([
            'nip' => '10119113',
            'name' => 'Dedeng Rahmat',
            'level' => 'employee',
            'tgl_lhr' => '1996-01-13',
            'password' => bcrypt('password')
        ]);

        Task::create([
            't_title' => 'membuat dokumen',
            't_body' => 'tolong ikhsan buat dokumen penyalaan listrik',
            't_status' => 'in progress',
            't_priority' => 'high',
            't_due_date' => '2022-10-14',
        ]);

        Task::create([
            't_title' => 'membuat dokumen2',
            't_body' => 'tolong test buat dokumen penyalaan listrik',
            't_status' => 'in progress',
            't_priority' => 'medium',
            't_due_date' => '2022-12-21',
        ]);

        Task::create([
            't_title' => 'membuat dokumen3',
            't_body' => 'tolong hilman buat dokumen A',
            't_status' => 'in progress',
            't_priority' => 'high',
            't_due_date' => '2022-12-22',
        ]);

        Task::create([
            't_title' => 'membuat dokumen4',
            't_body' => 'tolong buatin C',
            't_status' => 'completed',
            't_priority' => 'medium',
            't_due_date' => '2022-12-23',
        ]);

        Task::create([
            't_title' => 'membuat dokumen5',
            't_body' => 'tolong buatin D',
            't_status' => 'in progress',
            't_priority' => 'high',
            't_due_date' => '2022-12-24',
        ]);

        Task::create([
            't_title' => 'membuat dokumen6',
            't_body' => 'tolong buatin E',
            't_status' => 'completed',
            't_priority' => 'medium',
            't_due_date' => '2022-12-25',
        ]);

        Task::create([
            't_title' => 'membuat dokumen7',
            't_body' => 'tolong buatin F',
            't_status' => 'in progress',
            't_priority' => 'high',
            't_due_date' => '2022-12-26',
        ]);

        Task::create([
            't_title' => 'membuat dokumen8',
            't_body' => 'tolong buatin G',
            't_status' => 'in progress',
            't_priority' => 'medium',
            't_due_date' => '2022-12-27',
        ]);

        Task::create([
            't_title' => 'membuat dokumen9',
            't_body' => 'tolong buatin H',
            't_status' => 'in progress',
            't_priority' => 'high',
            't_due_date' => '2022-12-28',
        ]);

        Task::create([
            't_title' => 'membuat dokumen10',
            't_body' => 'tolong buatin I',
            't_status' => 'in progress',
            't_priority' => 'medium',
            't_due_date' => '2022-12-29',
        ]);

        UserTask::create([
            'user_sender_id' => '2',
            'task_id' => '1',
            'user_receiver_id' => '3',
        ]);

        UserTask::create([
            'user_sender_id' => '2',
            'task_id' => '2',
            'user_receiver_id' => '3',
        ]);

        UserTask::create([
            'user_sender_id' => '2',
            'task_id' => '2',
            'user_receiver_id' => '4',
        ]);

        UserTask::create([
            'user_sender_id' => '2',
            'task_id' => '3',
            'user_receiver_id' => '4',
        ]);
        UserTask::create([
            'user_sender_id' => '2',
            'task_id' => '4',
            'user_receiver_id' => '3',
        ]);
        UserTask::create([
            'user_sender_id' => '2',
            'task_id' => '5',
            'user_receiver_id' => '4',
        ]);
        UserTask::create([
            'user_sender_id' => '2',
            'task_id' => '6',
            'user_receiver_id' => '3',
        ]);
        UserTask::create([
            'user_sender_id' => '2',
            'task_id' => '7',
            'user_receiver_id' => '4',
        ]);
        UserTask::create([
            'user_sender_id' => '2',
            'task_id' => '8',
            'user_receiver_id' => '3',
        ]);
        UserTask::create([
            'user_sender_id' => '2',
            'task_id' => '9',
            'user_receiver_id' => '4',
        ]);
        UserTask::create([
            'user_sender_id' => '2',
            'task_id' => '10',
            'user_receiver_id' => '3',
        ]);
    }
}
