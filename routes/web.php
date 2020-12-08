<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Evaluation_logController;
use App\Http\Controllers\User_subreddit_linkController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
  $posts = DB::table('posts')->whereNull('parent_id')->get();
  // $posts = DB::table('posts')->whereNull('parent_id')->paginate(10);
  return view('toppage',['posts' => $posts]);
});
// Route::resource('/', 'App\Http\Controllers\TopPageController');
Route::get('/toppage', [PostController::class, 'classic']);
// Route::get('/subreddit/{id}', [PostController::class, 'classic']);
Route::get('/post', function () {
    return view('post');
});
// Route::get('/subreddit', function () {
//     return view('subreddit');
// });
Route::get('/subreddit', [PostController::class, 'classic']);

Route::get('/subreddit/{id}/create', function ($id) {
    return view('create_subreddit_Post', ['id' => $id]);
});
Route::post('/create/create_Post/{subreddit_id}', [CreateController::class, 'create_subreddit_Post']);

Route::get('/create', function () {
    return view('create');
});
Route::get('/sidebar', function () {
    return view('sidebar');
});

Route::resource('readerboard', '\App\Http\Controllers\UserSubredditLinksController');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/create/create_post', [CreateController::class, 'create_post']);
Route::post('/evaluation', [Evaluation_logController::class, 'evaluation']);
Route::post('/eva_show', [Evaluation_logController::class, 'show']);

Route::get('/subreddit/{id}', [PostController::class, 'classic'])
->name('subreddit.show');
// Route::get('/subreddit/{id?}', function ($id = 1) {
//   return view('subreddit')->with('id', $id);
// });

Route::get('/post/{post}', [PostController::class, 'show'])
->name('post.show');

//test
Route::post('/create/testPost', [CreateController::class, 'testPost']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//top
Route::get('/top', [App\Http\Controllers\TopController::class, 'classic']);

Route::get('/sign_in', [AuthController::class, 'sign_in']);
Route::get('/sign_up', [AuthController::class, 'sign_up']);

Route::post('/create/testPost', [CreateController::class, 'testPost']);

Route::post('/subreddit/{id}/join', [User_subreddit_linkController::class, 'join']);
Route::post('/subreddit/{id}/show', [User_subreddit_linkController::class, 'show']);
