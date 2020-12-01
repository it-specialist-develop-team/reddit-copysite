<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserSubredditLinks extends Model
{
    use HasFactory;

    public function getCommunitiesByRegUser(){

        $query = DB::table('user_subreddit_links');
        $data = $query->select(
            'subreddit_id',
            'subreddit_name',
            DB::raw('count(*) as user_cnt')
        )
        ->leftJoin(
            'subreddits','subreddits.id', '=', 'user_subreddit_links.subreddit_id'
        )
        ->groupBy(
            'subreddit_id',
            'subreddit_name',
        )
        ->orderBy(
            'user_cnt',
            'desc'
        )->get();
// echo $query->toSql();
// die('-----');
        return $data;

        // $query = $query->select(
        //     'subreddit',
        //     DB::raw('count(*) as user_cnt')
        // );
        // $query = $query->groupBy(
        //     'subreddit'
        // )
        // $query = $query->orderBy(
        //     'user_cnt',
        //     'desc'
        // );
        // $data = $query->get();    

    }
}
