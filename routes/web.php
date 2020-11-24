<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Evaluation_logController;

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
  $id=1;
  return view('subreddit')->with('id',$id);
});
Route::get('/post', function () {
  return view('post');
});
// Route::get('/subreddit', function () {
//     return view('subreddit');
// });
Route::get('/subreddit',[PostController::class,'classic']);


Route::get('/readerboard', function () {
  return view('readerboard');
});
Route::get('/create', function () {
  return view('create');
});
Route::get('/sidebar', function () {
  return view('sidebar');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/create/create_post', [CreateController::class, 'create_post']);
Route::post('/eva_up', [Evaluation_logController::class, 'eva_up']);
Route::post('/eva_down', [Evaluation_logController::class, 'eva_down']);
Route::post('/eva_up_cancel', [Evaluation_logController::class, 'eva_up_cancel']);
Route::post('/eva_down_cancel', [Evaluation_logController::class, 'eva_down_cancel']);

Route::get('/subreddit/{id?}', function ($id = 1) {
  return view('subreddit')->with('id', $id);
});

Route::get('/post/{post}', [PostController::class, 'show']);