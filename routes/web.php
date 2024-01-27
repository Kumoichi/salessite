<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function(){
    //return '<h1>このブログについて</h1>';
    return view('about');
});

Route::get('/posts', function()
{
    return '<h1>記事リスト</h1>';
});

Route::get('/posts/{id}', [PostsController::class, 'show']);