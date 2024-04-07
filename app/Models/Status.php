<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;


class Status extends Model
{
    use HasFactory;

    protected $guarded = false;

    protected $table = 'statuses';

    public function task () {
        return $this->belongsTo(Task::class, 'task_id', 'id');
    }
}
