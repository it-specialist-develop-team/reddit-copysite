<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post; // Postモデルをインポートする

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Post $post)
    {
        $post = Post::latest()->first();
        return view('post', ['post' => $post]);
    }
    // public function classic()
    // {
    //     $posts = Post::get();
    //     return view('subreddit',['posts' => $posts]);
    // }
    public function classic($id)
    {
        $posts = Post::where('subreddit_id', $id)->paginate(6);

        return view('subreddit', ['posts' => $posts, 'id' => $id]);
    }
    function show(Post $post)
    {
        if(Auth::check()){
            $u_id = Auth::id();
            return view("post", ["post" => $post,"u_id" => $u_id]);
        }
        
        return view("post", ["post" => $post]);
    }
    function delete($id)
    {
        Post::find($id)->delete();
        return redirect('/');
    }
}
