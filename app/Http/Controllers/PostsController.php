<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostsController extends Controller
{
    public function index()
    {
        // $posts = Post::all(); this the oldest first (as in the database)
        // $posts = Post::latest()->get(); // latest first // After getting paginate which
        // user 
        return view('posts.index', ['posts' => Post::latest()->paginate(4)]);
    }

    public function show(Post $postId)
    {
        // $post = Post::find($which);
        return view('posts.show', compact('postId'));
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
        
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);
        // which btw. is Laravels equivalent to lines 30 through 33

        return redirect('/');
    }
}
