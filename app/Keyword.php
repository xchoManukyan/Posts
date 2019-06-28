<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{   
    protected $fillable = [
        'text', 'post_id'
    ];

    public function posts()
    {
        return $this->belongsToMany(Posts::class);
    }
}
