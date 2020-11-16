<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function classic()
    {
        $posts = Post::all();
        return view('subreddit',['posts' => $posts]) ;
    }
}
