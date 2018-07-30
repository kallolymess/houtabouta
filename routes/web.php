<?php

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{postId}', 'PostsController@show');
Route::post('/posts/{postId}/comment', 'CommentsController@store');

// Eloquent Model => Post
// migration => create_posts_table
// controller => PostsController


Route::get('/csssample', function (){
    return view('simplex-bootstrap-css-sample');
});