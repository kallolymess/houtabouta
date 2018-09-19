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
Route::get('/search', 'PostsController@search')->name('searchit');

// Eloquent Model => Post
// migration => create_posts_table
// controller => PostsController

Route::get('/redirectTest', function () {
    return redirect('/test');
});
Route::get('/redActionTest', function () {
    return redirect()->action('PostsController@show', ['postId' => 3 ]);
});
Route::get('/redAcSearchTest', function () {
    $query = array(
        's' => 'that',
        'where' => 'title',
        'date_from' => 'NULL',
        'date_to' => 'NULL'
    );
    return redirect()->route('searchit', $query);
});
Route::get('/test', function () {
    return response('<h1>Hello there </h1> <br> how are you', 200)
        ->header('Content-Type', 'text/html');
    // return response()->json(['foo' => 'bar'], 200, $headers);
});

Route::get('/csssample', function (){
    return view('simplex-bootstrap-css-sample');
});