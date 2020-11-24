<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
  use HasFactory;
  protected $table = 'categories';

  public function subreddit() //関数名は単数形がベスト
  {
    return $this->hasMany('App\Models\Subreddit');
  }
}
