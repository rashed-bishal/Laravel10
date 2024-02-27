<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;

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

Route::get('/', WelcomeController::class);

Route::get('/test',AboutController::class);

Route::resource('blog', BlogController::class);

Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('login',[LoginController::class, 'handleLogin'])->name('login.submit');

Route::fallback(function(){
    return 'You are lost!';
});