<?php

use App\Task;

Route::get('/tasks', function () {
    $tasks = Task::all();

    // return $tasks;
    return view('tasks.tasks', compact('tasks'));
});

Route::get('/tasks/{task}', function ($which) {

    // dd($what);

    $task = Task::find($which);

    // dd($tasks);

    // return $tasks;
    return view('tasks.show', compact('task'));
});

// this produces the phpinfo() for http://localhost:8888/info from MAMP OR http://localhost:8000/info for artisan serve
Route::get('/info', function () {
    return view('phpInfo');
});
Route::get('/', function () {
    return view('welcome');
});
