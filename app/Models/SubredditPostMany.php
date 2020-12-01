<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SubredditPostMany extends Model
{
    use HasFactory;

    public function getCommunitiesByRegComment(){

        $query = DB::table('posts');
        $data = $query->select(
            'subreddit_id',
            'subreddit_name',
            DB::raw('count(*) as post_cnt')
        )
        ->leftJoin(
            'subreddits','subreddits.id', '=', 'posts.subreddit_id'
        )
        ->groupBy(
            'subreddit_id',
            'subreddit_name',
        )
        ->orderBy(
            'post_cnt',
            'desc'
        )->get();
// echo $query->toSql();
// die('-----');
        return $data;
    }
}
