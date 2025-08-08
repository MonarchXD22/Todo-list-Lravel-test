<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('user', [UserController::class,'getUser']);
Route::get('about', [UserController::class,'about']);
Route::get('user/{name}', [UserController::class,'getUsername']);


// route::redirect('/home','/'); to redirect 1st page to second
