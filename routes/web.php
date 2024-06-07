<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

//登録一覧ページ
Route::get('/posts',[PostController::class, 'index'])->name('posts.index');

//登録作成ページ
Route::get('/posts/create',[PostController::class, 'create'])->name('posts.create');

//登録作成機能
Route::post('/posts',[PostController::class,'store'])->name('posts.store');

//更新ページ
Route::get('/posts/{post}/edit',[PostController::class,'edit'])->name('posts.edit');

//更新機能
Route::patch('/posts/{post}',[PostController::class,'update'])->name('posts.update');

//削除機能
Route::delete('/posts/{post}',[PostController::class,'destroy'])->name('posts.destroy');