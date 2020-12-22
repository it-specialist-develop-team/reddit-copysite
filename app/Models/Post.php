<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
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
