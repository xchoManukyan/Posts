<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{   

    protected $fillable = [
        'title', 'description', 'content', 'poster', 'category_id', 'slug', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function keywords()
    {
        return $this->belongsToMany(Keywords::class);
    }
}
