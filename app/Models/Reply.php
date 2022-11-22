<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Reply extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'task_id',
        'user_receiver_id',
        'response_file',
        'response_body',
    ];

    public function delete(): void
    {
        $this->deleted_at = now();
        $this->deleted_by = Auth::user()->id;
        $this->save();
    }


    public function tasks()
    {
        return $this->belongsTo(Task::class);
    }
}
