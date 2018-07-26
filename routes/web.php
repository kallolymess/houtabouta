<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/tasks', function () {
    $tasks = DB::table('tasks')->get();

    // return $tasks;
    return view('tasks.tasks', compact('tasks'));
});

Route::get('/tasks/{task}', function ($what) {

    // dd($what);

    $task = DB::table('tasks')->find($what);

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
