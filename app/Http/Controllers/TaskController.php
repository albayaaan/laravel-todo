<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('task.index', ['tasks' => $tasks]);
    }

    public function changeStatus(Task $task)
    {
        $task->status = !$task->status;
        $task->save();
        return redirect()->back();
    }
}
