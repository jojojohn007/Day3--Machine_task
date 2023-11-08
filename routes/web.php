<?php

use App\Http\Controllers\MyController;
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


//basic routing
Route::get('/', function () {
    return view('index');
});

//named routing

Route::get('/post', function () {
    return view('posts');
})->name('post');

//run controller method using route

Route::get('/runController',[MyController::class,'index']);