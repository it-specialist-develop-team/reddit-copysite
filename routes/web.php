<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// use controllers----------------------------------------
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\Evaluation_logController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\User_subreddit_linkController;
use App\Http\Controllers\SubredditController;
use App\Http\Controllers\UserController;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* top */

Route::get('/', function () {
    return view('toppage');
});
Route::get('/top', [App\Http\Controllers\TopController::class, 'classic']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* create */
Route::get('/create', function () {
    return view('create');
});
Route::get('/create/subreddit', [SubredditController::class, 'index']);
Route::post('/create/subreddit_post', [SubredditController::class, 'create']);
Route::post('/create/testPost', [CreateController::class, 'testPost']);
Route::post('/create/create_post', [CreateController::class, 'create_post']);
Route::post('/create/create_Post/{subreddit_id}', [CreateController::class, 'create_subreddit_Post']);



/* post */
Route::get('post', 'App\Http\Controllers\PostController@index');
Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');

/* subreddit */
Route::get('/subreddit', [PostController::class, 'classic']);
Route::get('/subreddit/{id}', [PostController::class, 'classic'])->name('subreddit.show');
Route::get('/subreddit/{id}/create', function ($id) {
    return view('create_post', ['id' => $id]);
});
Route::post('/subreddit/{id}/join', [User_subreddit_linkController::class, 'join']);
Route::post('/subreddit/{id}/show', [User_subreddit_linkController::class, 'show']);

/* readerboard */
Route::resource('readerboard', '\App\Http\Controllers\UserSubredditLinksController');

/* user */
// Route::get('user', 'App\Http\Controllers\UserController@index');
Route::get('/user/show/{id}', [UserController::class, 'show']);

/* eva */
Route::post('/evaluation', [Evaluation_logController::class, 'evaluation']);
Route::post('/eva_show', [Evaluation_logController::class, 'show']);

/* auth */
Auth::routes();
Route::get('/sign_in', [AuthController::class, 'sign_in']);
Route::get('/sign_up', [AuthController::class, 'sign_up']);

/* show user */
Route::get('/show_user', function () {
    return view('/show_user');
});

/* user page */
Route::get('/user_page/{id}', function ($id) {
    if (Auth::check()) {
        if ($id == Auth::user()->id) {
            return view('/user.store.user_page', ['id' => $id]);
        } else {
            return redirect('/');
        }
    } else {
        return redirect('/');
    }
});
Route::get('/user_store_page/{id}', function ($id) {
    if (Auth::check()) {
        if ($id == Auth::user()->id) {
            return view('user.store.user_store_page');
        } else {
            return redirect('/');
        }
    } else {
        return redirect('/');
    }
});
Route::post('/user_store/{id}', [UserController::class, 'store']);
