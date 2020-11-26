<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
  use HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'id',
    'name',
    'email',
    'password',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
  ];
  protected $primaryKey = "id";

  // public function post()
  // {
  //   return $this->hasMany('App\Models\Post');
  // }
  // public function post()
  // {
  //   return $this->belongsTo('App\Models\Post');
  // }

  public function post()
  {
    return $this->hasMany('App\Models\Post');
  }

  public function user_subreddit_link()
  {
    return $this->hasMany('App\Models\User_subreddit_link');
  }

  public function evaluation_log()
  {
    return $this->hasMany('App\Models\Evaluation_log');
  }
}
