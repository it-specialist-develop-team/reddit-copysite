<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subreddit;
use App\Models\Categorie;

class SubredditController extends Controller
{
    function index()
    {
        $categories = Categorie::latest()->get();;
        return view('create_subreddit', ['categories' => $categories]);
    }
    function create(Request $request)
    {
        $categories = Categorie::where('category_name', $request->category_name)->first();
        $subreddit = new Subreddit;
        $subreddit->category_id = $categories->id;
        $subreddit->subreddit_name =  $request->input('subreddit_name');
        $subreddit->body = $request->input('body');
        $subreddit->save();
        return redirect('subreddit/' . $subreddit->id);
    }
}
