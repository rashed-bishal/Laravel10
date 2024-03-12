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


Route::get('/posts/trashed', [PostController::class, 'trashed'])->name('posts.trashed');

Route::delete('/posts/{id}/delete', [PostController::class, 'forceDelete'])->name('posts.force_delete');

Route::patch('/posts/{id}/recover', [PostController::class, 'recover'])->name('posts.recover');

Route::resource('/posts', PostController::class);
