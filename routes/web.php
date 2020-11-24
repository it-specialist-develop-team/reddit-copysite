<?php

use Illuminate\Support\Facades\Route;
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
    return view('post');
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
