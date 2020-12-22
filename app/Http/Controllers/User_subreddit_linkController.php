<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_subreddit_link;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class User_subreddit_linkController extends Controller
{
    function join($id)
    {
        $usl = User_subreddit_link::where([
            ['subreddit_id', $id],
            ['user_id', Auth::id()],
        ])->get();
        if ($usl->count() < 1) {
            $usl = new User_subreddit_link();
            $usl->user_id = Auth::id();
            $usl->subreddit_id = $id;
            $usl->role = 0;
            $usl->save();
            return 0;
        } else {
            User_subreddit_link::where([
                ['subreddit_id', $id],
                ['user_id', Auth::id()],
            ])->delete();
            return 1;
        }
    }
}
