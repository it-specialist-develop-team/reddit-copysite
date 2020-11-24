<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subreddit extends Model
{
    use HasFactory;
    protected $table = 'subreddits';

    public function Post(){
        return $this->hasMany('App\Models\Post');
    }

    public function user_subreddit_link(){
        return $this->hasMany('App\Models\User_subreddit_link');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
