<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evaluation_log;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class Evaluation_logController extends Controller
{
  function show(Request $request)
  {
    $eva_log = DB::table('evaluation_logs')->where([
      ['post_id', $request->post_id],
    ])->get();

    return response()->json([
      'val' => DB::table('posts')->where('id', $request->post_id)->value('evaluation'),
    ]);
  }
  function evaluation(Request $request)
  {
    $eva_log = DB::table('evaluation_logs')->where([
      ['user_id', $request->user_id],
      ['post_id', $request->post_id],
      ['deleted_at', NULL],
    ])->get();
    if ($eva_log->count() < 1) { //ログにない時
      if ($request->evaluation == 1) { //1作成
        $post = DB::table('posts')->where('id', $request->post_id)->first();
        DB::table('posts')->where('id', $request->post_id)->update(['evaluation' => $post->evaluation + 1]);
        $eva = new Evaluation_log;
        $eva->post_id = $request->post_id;
        $eva->user_id = $request->user_id;
        $eva->evaluation = 1;
        $eva->save();
      } else if ($request->evaluation == -1) { //-1作成
        $post = DB::table('posts')->where('id', $request->post_id)->first();
        DB::table('posts')->where('id', $request->post_id)->update(['evaluation' => $post->evaluation - 1]);
        $eva = new Evaluation_log;
        $eva->post_id = $request->post_id;
        $eva->user_id = $request->user_id;
        $eva->evaluation = -1;
        $eva->save();
      }
    } else if ($eva_log->count() > 0) { //ログにある時
      DB::table('evaluation_logs')->where([
        ['user_id', $request->user_id],
        ['post_id', $request->post_id],
      ])->delete();
      $post = DB::table('posts')->where('id', $request->post_id)->first();
      if ($eva_log->first()->evaluation == 1) { //+1
        DB::table('posts')->where('id', $request->post_id)->update(['evaluation' => $post->evaluation - 1]);
        if ($request->evaluation == -1) { //+1取消-1作成
          DB::table('posts')->where('id', $request->post_id)->update(['evaluation' => $post->evaluation - 2]);
          $eva = new Evaluation_log;
          $eva->post_id = $request->post_id;
          $eva->user_id =  $request->user_id;
          $eva->evaluation = -1;
          $eva->save();
        }
      } else if ($eva_log->first()->evaluation == -1) { //-1
        DB::table('posts')->where('id', $request->post_id)->update(['evaluation' => $post->evaluation + 1]);
        if ($request->evaluation == 1) { //-1取消+1作成
          DB::table('posts')->where('id', $request->post_id)->update(['evaluation' => $post->evaluation + 2]);
          $eva = new Evaluation_log;
          $eva->post_id = $request->post_id;
          $eva->user_id =  $request->user_id;
          $eva->evaluation = 1;
          $eva->save();
        }
      }
    }
    return response()->json([
      'val' => DB::table('posts')->where('id', $request->post_id)->value('evaluation'),
    ]);
  }
}
