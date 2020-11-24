<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    public function post()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function user_subreddit_link(){
        return $this->hasMany('App\Models\User_subreddit_link');
    }

    public function evaluation_log(){
        return $this->hasMany('App\Models\Evaluation_log');
    }
}
