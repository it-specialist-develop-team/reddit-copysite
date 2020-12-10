<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class TopController extends Controller
{
    // public function classic()
    // {
    //     $posts = Post::get();
    //     return view('subreddit',['posts' => $posts]);
    // }
    public function classic()
    {
        $id = 1;

        $posts = Post::latest()->paginate(6);

        return view('top', ['posts' => $posts, 'id' => $id]);
    }
    function show(Post $post)
    {
        return view("post", ["post" => $post]);
    }
}
