<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function show()
    {
        return view('posts.show');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        // dd(request()->all());
        // dd(request(['title', 'body']));

        // $post = new Post;
        // $post->title = request('title');
        // $post->body = request('body');
        // $post->save();

        // Create a superclass of Post calle Model that is inturn extends Elequent\Model
        // Remove the Laravels guard on hacking-loophole where a hacker can potentially use post request
        // to change any DB values: See App\Model, App\Post changes
        // For this its also imp. to set the parameters that we want to be set by a form explicitly
        // in this case 'title' and 'body' like so:
        
        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);
        // which btw. is Laravels equivalent to lines 30 through 33

        return redirect('/');
    }
}
