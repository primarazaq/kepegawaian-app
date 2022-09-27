<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User;

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

        // Task::create([
        //     't_title' => 'membuat dokumen',
        //     't_body' => 'tolong ikhsan buat dokumen penyalaan listrik',
        //     't_status' => 'uncompleted',
        //     't_priority' => 'high',
        //     't_assigne' => '10119101',
        //     't_created_by' => '10119124',
        //     't_due_date' => '2022-10-01',
        //     'user_id' => '1'
        // ]);

        // Task::create([
        //     't_title' => 'membuat dokumen2',
        //     't_body' => 'tolong test buat dokumen penyalaan listrik',
        //     't_status' => 'uncompleted',
        //     't_priority' => 'high',
        //     't_assigne' => '10119124',
        //     't_created_by' => '10119101',
        //     't_due_date' => '2022-10-01',
        //     'user_id' => '3'
        // ]);
    }
}
