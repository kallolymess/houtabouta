<?php

namespace App;

use App\Model;

class Post extends Model
{
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    

    public function addComment($body)
    {        
        $this->comments()->create(compact('body'));

        // the above is only possible because of Elequent and the body

        // Comment::create([
        //     'body' => $commentBody,
        //     'post_id' => $this->id
        // ]);

    }
}
