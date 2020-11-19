<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    public function post() //関数名は単数形がベスト
    {
        return $this->belongsTo('App\Models\Post');
    }
}
