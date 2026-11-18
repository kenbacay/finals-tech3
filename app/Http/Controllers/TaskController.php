<?php

namespace App\Http\Controllers;

use App\Models\Task;

class TaskController extends Controller
{
    public function welcome()
    {
        $todayTasks = Task::whereDate('task_date', today())
            ->orderBy('id')
            ->get();

        return view('pages.welcome', compact('todayTasks'));
    }

    public function index()
    {
        $tasks = Task::orderBy('task_date')->orderBy('id')->get();

        return view('tasks.index', compact('tasks'));
    }
}
