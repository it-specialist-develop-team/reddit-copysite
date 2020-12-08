<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class KubotaController extends Controller
{

    public function scroll()
    {
        $posts = Post::orderBy('id')->paginate(3);
        // ini_set('xdebug.var_display_max_children', -1);
        // ini_set('xdebug.var_display_max_data', -1);
        // ini_set('xdebug.var_display_max_depth', -1);
        // var_dump($posts);
        return view('kubota', ['posts'=>$posts]);
        // return view('kubota', compact('posts'));

    }
}
