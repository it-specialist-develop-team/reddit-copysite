<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_subreddit_link extends Model
{
    use HasFactory;
    protected $table = 'user_subreddit_links';

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function subreddit(){
        return $this->belongsTo('App\Models\Subreddit');
    }
}
