<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\TestController;

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

Route::get('/', [WelcomeController::class, 'index']);

Route::get('/test',[TestController::class, 'index']);



Route::group(['prefix' => 'customer'], function(){

    Route::get('show', function(){
        return "<h1>User is Showing</h1>";
    });
    
    Route::get('edit', function(){
        return "<h1>User is Editing</h1>";
    });
    
    Route::get('delete', function(){
        return "<h1>User is Erasing</h1>";
    });
});


Route::fallback(function(){
    return 'You are lost!';
});