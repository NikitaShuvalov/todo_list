<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index()
    {
        $user_id = Auth::user();

        $tasks = Task::find($user_id);

        return view("tasks.tasks", compact("tasks"));
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view("tasks.edit_task", compact("task"));
    }
}
