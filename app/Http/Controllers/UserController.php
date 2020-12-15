<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class UserController extends Controller
{
    public function show($id)
    {
        $posts = Post::where('user_id', $id)->get();
        return view('user.show.show_user', ['posts' => $posts, 'id' => $id]);
    }
    public function store($id, Request $request)
    {
        if ($id == Auth::user()->id) {
            $user = User::find($id);
            $upload_image = $request->file('image');
            if ($upload_image) {
                //アップロードされた画像を保存する
                $path = $upload_image->store("public/uploads");
                $path = str_replace("public/uploads", "storage/uploads/", $path);
                //画像の保存に成功したらDBに記録する
                if ($path) {
                    $user->attachment = $path;
                }
            }

            $user->name = $request->user_name;
            $user->email = $request->user_mali;
            $user->save();
            // 詳細ページへリダイレクト
            // return redirect("/articles/" . $id);
            return redirect('/user_page/' . $id);
        } else {
            return redirect('/');
        }
    }
}
