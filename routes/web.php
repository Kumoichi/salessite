<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

//なんか最後に名前を付けると楽らしい。今はよくわからん。
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');