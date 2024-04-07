<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function addTask (Request $request) {
        $taskData = $request->all();
        $task = new Task();
        $task->name = $taskData['name']; 
        $task->description = $taskData['description'];
        $task->save();
    }
}
