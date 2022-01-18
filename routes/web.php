<?php

use App\Http\Controllers\AdminCommintController;
use App\Http\Controllers\AdminPostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserCommintController;
use App\Http\Controllers\UserPostsController;

;

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
    return view('Layout');
});
Route::resource('/post',UserPostsController::class);
Route::resource('/post',UserCommintController::class);
Route::resource('/post',AdminPostsController::class);
Route::resource('/post',AdminCommintController::class);


