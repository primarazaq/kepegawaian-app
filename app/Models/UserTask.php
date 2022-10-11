<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
    protected $table = 'user_tasks';

    protected $fillable = [
        'user_sender_id',
        'task_id',
        'user_receiver_id',
    ];
    use HasFactory;

    // public function task()
    // {
    //     return $this->belongsTo(Task::class);
    // }
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
