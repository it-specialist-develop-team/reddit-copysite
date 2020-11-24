<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation_log extends Model
{
  use HasFactory;
  protected $table = 'evaluation_logs';

  public function post()
  {
    return $this->belongsTo('App\Models\Post');
  }

  public function user()
  {
    return $this->belongsTo('App\Models\User');
  }
}
