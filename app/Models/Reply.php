<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'user_receiver_id',
        'response_file',
        'response_body',
    ];

    public function tasks()
    {
        return $this->belongsTo(Task::class);
    }
}
