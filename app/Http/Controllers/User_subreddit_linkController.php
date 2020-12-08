<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_subreddit_link;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class User_subreddit_linkController extends Controller
{
    function show($id, Request $request)
    {
        $usl = User_subreddit_link::where([
            ['subreddit_id', $id],
            ['user_id', $request->user_id],
        ])->get();
        if ($usl->count() < 1) {
            return 0;
        } else {
            return 1;
        }
    }
    function join($id, Request $request)
    {
        $usl = User_subreddit_link::where([
            ['subreddit_id', $id],
            ['user_id', $request->user_id],
        ])->get();
        if ($usl->count() < 1) {
            $usl = new User_subreddit_link();
            $usl->user_id = $request->user_id;
            $usl->subreddit_id = $id;
            $usl->role = 0;
            $usl->save();
            return 0;
        } else {
            User_subreddit_link::where([
                ['subreddit_id', $id],
                ['user_id', $request->user_id],
            ])->delete();
            // User_subreddit_link::find(16)->delete();
            return 1;
        }
    }
}
