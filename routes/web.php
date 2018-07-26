<?php

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

// this produces the phpinfo() for http://localhost:8888/info from MAMP OR http://localhost:8000/info for artisan serve
Route::get('/info', function () {
    return view('phpInfo');
});
Route::get('/', function () {
    return view('welcome');
});
