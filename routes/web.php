<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/posts/trashed', [PostController::class, 'trashed'])->name('posts.trashed');

Route::delete('/posts/{id}/delete', [PostController::class, 'forceDelete'])->name('posts.force_delete');

Route::patch('/posts/{id}/recover', [PostController::class, 'recover'])->name('posts.recover');

Route::resource('/posts', PostController::class);

Route::get('authcheck', function(){
    dd(Auth::user()->email);
});


Route::group(['middleware'=>'auth'], function(){
    
    Route::get('/posts/trashed', [PostController::class, 'trashed'])->name('posts.trashed');

    Route::delete('/posts/{id}/delete', [PostController::class, 'forceDelete'])->name('posts.force_delete');

    Route::patch('/posts/{id}/recover', [PostController::class, 'recover'])->name('posts.recover');

    Route::resource('/posts', PostController::class);
});