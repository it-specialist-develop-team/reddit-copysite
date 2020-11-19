<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function user() //関数名は単数形がベスト
    {
        return $this->belongsTo('App\Models\User');
    }
}
