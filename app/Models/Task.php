<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('user_tasks', 'user_sender_id', 'task_id', 'user_receiver_id');
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
