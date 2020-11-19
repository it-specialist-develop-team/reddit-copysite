<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluation_log;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class Evaluation_logController extends Controller
{
  function eva_up(Request $request)
  {
    $post = DB::table('posts')->where('id', 1)->first();
    DB::table('posts')->where('id', 1)->update(['evaluation' => $post->evaluation + 1]);
    $eva = new Evaluation_log;
    $eva->post_id = 1;
    $eva->user_id = 1;
    $eva->evaluation = 1;
    $eva->save();
    return response()->json([
      'val' => DB::table('posts')->where('id', 1)->value('evaluation'),
    ]);
  }
  function eva_down(Request $request)
  {
    $post = DB::table('posts')->where('id', 1)->first();
    DB::table('posts')->where('id', 1)->update(['evaluation' => $post->evaluation - 1]);
    $eva = new Evaluation_log;
    $eva->post_id = 1;
    $eva->user_id = 1;
    $eva->evaluation = -1;
    $eva->save();
    return response()->json([
      'val' => DB::table('posts')->where('id', 1)->value('evaluation'),
    ]);
  }
}
