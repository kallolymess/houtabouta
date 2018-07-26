<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function isComplete()
    {
        return static::where('completed', 1)->get();
    }
    
    public function scopeInComplete($query)
    {
        return $query->where('completed', 1);
    }
}
