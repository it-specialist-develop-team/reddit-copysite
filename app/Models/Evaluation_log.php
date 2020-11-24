<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation_log extends Model
{
  
  protected $table = 'evaluation_logs';

  public function post() //関数名は単数形がベスト
  {
    return $this->belongsTo('App\Models\Post');
  }

  public function user() //関数名は単数形がベスト
  {
    return $this->belongsTo('App\Models\User');
  }
}
