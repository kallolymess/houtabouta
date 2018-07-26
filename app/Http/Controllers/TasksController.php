<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index() {
        $tasks = Task::all();
        // return $tasks;
        return view('tasks.tasks', compact('tasks'));
    }

    public function showtask($which) { // simple way to pass a Route-Parameter to the controller
        // dd($what);
        $task = Task::find($which);
        // dd($tasks);
        // return $tasks;
        return view('tasks.show', compact('task'));
    }

    public function show(Task $task) // same as above, only with Route-Model-Binding
    {
        return view('tasks.show', compact('task'));
    }
}
