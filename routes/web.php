<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SampleController;
use App\http\Controllers\BlogController;
use App\Models\Post;

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


Route::get('/sample', [SampleController::class, 'index']);

Route::get('/custom', [SampleController::class, 'custom']);

Route::get('/fetch-post/{post:title}', function(Post $post){
   return $post->title;
});

Route::get('/trait/{text}', [BlogController::class, 'index']);

Route::get('/helper/{title}', [BlogController::class, 'custom']);

Route::get('/posts/trashed', [PostController::class, 'trashed'])->name('posts.trashed');

Route::delete('/posts/{id}/delete', [PostController::class, 'forceDelete'])->name('posts.force_delete');

Route::patch('/posts/{id}/recover', [PostController::class, 'recover'])->name('posts.recover');

Route::resource('/posts', PostController::class);

Route::get('contact', function(Post $post){
    $posts = $post->all();
    return view('contact', compact('posts'));
});


Route::get('send-mail', function(){
    Mail::raw('This is the body of the test email.', function($message){
        $message->to('test@mextex.com')->subject('Noreply test title');
    });

    dd('Mail has been sent');
});

