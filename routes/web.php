<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Evaluation_logController;
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
  $id = 1;
  return view('subreddit')->with('id', $id);
});
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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/create/create_post', [CreateController::class, 'create_post']);
Route::post('/evaluation', [Evaluation_logController::class, 'evaluation']);
Route::post('/eva_show', [Evaluation_logController::class, 'show']);

Route::get('/subreddit/{id}', [PostController::class, 'classic']);
// Route::get('/subreddit/{id?}', function ($id = 1) {
//   return view('subreddit')->with('id', $id);
// });

Route::get('/post/{post}', [PostController::class, 'show']);

//test
Route::post('/create/testPost',[CreateController::class, 'testPost']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//top
Route::get('/top', [App\Http\Controllers\TopController::class, 'classic']);

Route::post('/create/testPost', [CreateController::class, 'testPost']);
