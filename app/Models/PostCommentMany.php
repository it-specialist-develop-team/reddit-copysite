<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PostCommentMany extends Model
{
    use HasFactory;

    public function getPostsByRegComment(){

        $query = DB::table('posts as parent');
        $data = $query->select(
            'parent.id',
            'parent.title',
            DB::raw('(select count(*) from
            posts as child
            where child.parent_id = parent.id
            ) as cnt')
        )
        ->whereRaw(
            'parent.parent_id is null'
        )
        ->orderBy(
            'cnt',
            'desc',
        )->get();
// echo $query->toSql();
// die('-----');
        return $data;
    }

    public function getOrderManyComment(){

        $query = DB::table('posts as parent');
        $data = $query->select(
            '*',
            DB::raw('(select count(*) from
            posts as child
            where child.parent_id = parent.id
            ) as cnt')
        )
        ->whereNull('deleted_at')
        ->whereRaw(
            'parent.parent_id is null'
        )
        ->orderBy(
            'cnt',
            'desc',
        )->get();
        return $data;
    }

}
