<?php

Route::get('/', 'PostsController@index')->name('home');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{postId}', 'PostsController@show');
Route::post('/posts/{postId}/comment', 'CommentsController@store');

Route::get('/event', 'EventsController@index')->name('events.index');
Route::post('/event', 'EventsController@addEvent')->name('events.add');

// Route::post('/search', 'PostsController@search'); // Did Post for search first ... 
// then I realise that a simple get will go a long way. this I learned because of the Pagination probslems
// of the returned search posts 
Route::get('/search', 'PostsController@search');

// Eloquent Model => Post
// migration => create_posts_table
// controller => PostsController


Route::get('/csssample', function (){
    return view('simplex-bootstrap-css-sample');
});