<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;    use HasFactory;
    protected $table = 'users';

    public function post()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function user_subreddit_link(){
        return $this->hasMany('App\Models\User_subreddit_link');
    }

    // /**
    //  * The attributes that should be cast to native types.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];

    // /**
    //  * リレーション (1対多の関係)
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function posts() // 複数形
    // {
    //     // 記事を新しい順で取得する
    //     return $this->hasMany('App\Models\Post')->latest();
    public function evaluation_log(){
        return $this->hasMany('App\Models\Evaluation_log');
    }
}