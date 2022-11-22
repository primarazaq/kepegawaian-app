<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Task extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = ['id'];

    public function delete(): void
    {
        $this->deleted_at = now();
        $this->deleted_by = Auth::user()->id;
        $this->save();
    }


    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('user_tasks', 'user_sender_id', 'task_id', 'user_receiver_id');
    }

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}
