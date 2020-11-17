<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use phpDocumentor\Reflection\Types\Null_;

class CreateController extends Controller
{
  function create_post(Request $request)
  {
    $upload_image = $request->file('image');
    if ($request->post_type == 1) {
      if ($upload_image) {
        //アップロードされた画像を保存する
        $path = $upload_image->store("public/uploads");
        //画像の保存に成功したらDBに記録する
        if ($path) {
          $post = new Post;
          $post->subreddit_id = 1;
          $post->post_type = $request->post_type;
          $post->title = $request->title;
          $post->body = $request->body;
          $post->attachment = $path;
          $post->parent_id = Null;
          $post->user_id = 1;
          $post->evaluation = 0;
          $post->save();
        }
      }
    } else {
      $post = new Post;
      $post->subreddit_id = 1;
      $post->post_type = $request->post_type;
      $post->title = $request->title;
      $post->body = "";
      $post->attachment = "";
      $post->parent_id = Null;
      $post->user_id = 1;
      $post->evaluation = 0;
      $post->save();
    }
  }
}
