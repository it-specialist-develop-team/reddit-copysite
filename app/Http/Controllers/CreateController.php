<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use phpDocumentor\Reflection\Types\Null_;

class CreateController extends Controller
{
  function create_post(Request $request)
  {
        $post = new Post;
        $post->subreddit_id = 1;
        $post->post_type = $request->post_type;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->attachment = "";
        $post->parent_id = $request->parent_id;
        $post->user_id = 1;
        $post->evaluation = 0;
        $post->save();
  }

  function testPost(Request $request)
  {
    $upload_image = $request->file('image');
    if ($upload_image) {
      //アップロードされた画像を保存する
      $path = $upload_image->store("public/uploads");
      $path = str_replace("public/uploads","storage/uploads/",$path);
      //画像の保存に成功したらDBに記録する
      if ($path) {
          $post = new Post;
          $post->subreddit_id = 1;
          $post->post_type = 0;
          $post->title = $request->input('image-title');
          $post->body = "";
          $post->attachment = $path;
          $post->parent_id = Null;
          $post->user_id = 1;
          $post->evaluation = 0;
          $post->save();
      }
    } else {
        $post = new Post;
        $post->subreddit_id = 1;
        $post->post_type = 1;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->attachment = "";
        $post->parent_id = Null;
        $post->user_id = 1;
        $post->evaluation = 0;
        $post->save();
    }
    return redirect('post/' . $post->id);
  }
  function create_subreddit_Post($subreddit_id, Request $request)
  {   
      $upload_image = $request->file('image');
      if ($upload_image) {
          //アップロードされた画像を保存する
          $path = $upload_image->store("public/uploads");
          $path = str_replace("public/uploads","storage/uploads/",$path);
          //画像の保存に成功したらDBに記録する
          if ($path) {
              $post = new Post;
              $post->subreddit_id = $subreddit_id;
              $post->post_type = 0;
              $post->title = $request->input('image-title');
              $post->body = "";
              $post->attachment = $path;
              $post->parent_id = Null;
              $post->user_id = 1;
              $post->evaluation = 0;
              $post->save();
            }
      } else {
          $post = new Post;
          $post->subreddit_id = $subreddit_id;
          $post->post_type = 1;
          $post->title = $request->input('title');
          $post->body = $request->input('body');
          $post->attachment = "";
          $post->parent_id = Null;
          $post->user_id = 1;
          $post->evaluation = 0;
          $post->save();
      }  
    }
}