<?php

Route::get('/', 'PostsController@index');

// Eloquent Model => Post
// migration => create_posts_table
// controller => PostsController


Route::get('/csssample', function (){
    return view('simplex-bootstrap-css-sample');
});