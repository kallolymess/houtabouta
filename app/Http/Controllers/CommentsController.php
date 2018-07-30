<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentsController extends Controller
{
  public function store(Post $postId)
  {
    $this->validate(request(), ['body' => 'required|min:2']);

    $postId->addComment(request('body'));

    return back();
  }

  public function storeAltenate1(Post $postId)
  {
    // dd(request()->all());

    $this->validate(request(), [
        'body' => 'required'
    ]);

    Comment::create([
        'post_id' => $postId->id,
        'body' => request('body')
    ]);

    return back();
  }
}
