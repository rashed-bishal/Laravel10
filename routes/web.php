<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SampleController;
use App\http\Controllers\BlogController;
use App\Models\Post;
use App\Mail\OrderShipped;

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
    // Mail::raw('This is the body of the test email.', function($message){
    //     $message->to('test@mextex.com')->subject('Noreply test title');
    // });

    Mail::send(new OrderShipped());

    dd('Mail has been sent');
});


Route::get('sessions', function(Request $request)
{
    //$data = session()->all();

    $data = $request->session()->all();

    //$data = $request->session()->get('_flash'); //get a single session data using keys

    dd($data);
});

Route::get('save-session', function(Request $request)
{
    //session(['user_id' => '14154178541']);

    //$request->session()->put(['user_status' => 'offline']);

    $request->session()->put('user_operator', 'AT&T');

    return redirect()->to('/sessions');
});

Route::get('erase-session', function(Request $request){
    // session()->forget('user_id');
    $request->session()->forget('user_status');
    return redirect()->to('/sessions');
});

