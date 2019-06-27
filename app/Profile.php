<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{   

    protected $fillable = [
        'first_name', 'last_name', 'gender', 'birth_date', 'phone', 'adress', 'icon', 'about', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
