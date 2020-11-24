<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // public function classic()
    // {
    //     $posts = Post::get();
    //     return view('subreddit',['posts' => $posts]) ;
    // }
    public function classic()
    {
        $posts = Post::paginate(1);
        return view('subreddit',['posts' => $posts]) ;
    }
}
