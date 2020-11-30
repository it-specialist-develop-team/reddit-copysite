<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
  // public function classic()
  // {
  //     $posts = Post::get();
  //     return view('subreddit',['posts' => $posts]);
  // }
  public function classic($id)
  {
    $posts = Post::where('subreddit_id',$id)->paginate(3);

    return view('subreddit', ['posts' => $posts, 'id' => $id]);
  }
  function show(Post $post)
  {
    return view("post", ["post" => $post]);
  }
}
