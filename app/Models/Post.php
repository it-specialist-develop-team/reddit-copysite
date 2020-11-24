<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function evaluation_log()
    {
        return $this->hasMany('App\Models\Evaluation_log');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function subreddit()
    {
        return $this->belongsTo('App\Models\Subreddit');
    }
}
