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

Route::get('/', function () {
    return view('welcome');
});

// this produces the phpinfo() for http://localhost:8888/info from MAMP OR http://localhost:8000/info for artisan serve
Route::get('/info', function () {
    return view('phpInfo');
});
