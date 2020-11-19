<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\PostController;
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
Route::get('/subreddit', function () {
  return view('subreddit');
});
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

Route::get('/post/{post}', [PostController::class, 'show']);

Route::get('/subreddit/{id?}', function($id = 1){
  return view('subreddit') -> with('id',$id);
});
