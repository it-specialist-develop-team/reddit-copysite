<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_subreddit_link;
use Illuminate\Support\Facades\DB;

class User_subreddit_linkController extends Controller
{
    function show($id, Request $request)
    {
        $usl = DB::table('user_subreddit_links')->where([
            ['subreddit', $id],
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
        $usl = DB::table('user_subreddit_links')->where([
            ['subreddit', $id],
            ['user_id', $request->user_id],
        ])->get();
        if ($usl->count() < 1) {
            $usl = new User_subreddit_link();
            $usl->user_id = $request->user_id;
            $usl->subreddit = $id;
            $usl->role = 0;
            $usl->save();
            return 0;
        } else {
            DB::table('user_subreddit_links')->where([
                ['subreddit', $id],
                ['user_id', $request->user_id],
            ])->delete();
            return 1;
        }
    }
}
