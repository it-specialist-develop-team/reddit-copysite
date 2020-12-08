<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User_subreddit_link extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'user_subreddit_links';

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function subreddit()
    {
        return $this->belongsTo('App\Models\Subreddit');
    }
}
