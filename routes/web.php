<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;

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
    return view('welcome');
});

Route::get('/posts',[postController::class,'index'])->name('posts.index');
Route::get('/posts/create',[postController::class,'create'])->name('posts.create');
Route::get('/posts/{post}/edit',[postController::class,'edit'])->name('posts.edit');
Route::get('/posts/{post}',[postController::class,'show'])->name('posts.show');
Route::post('/posts',[PostController::class, 'store'])->name('posts.store');
Route::put('/posts/{post}',[PostController::class, 'update'])->name('posts.update');