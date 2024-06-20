<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', [UserController::class, 'show_signup']);

Route::post('/signup', [UserController::class, 'signup']);

Route::get('/login', [UserController::class, 'show_login']);

Route::post('/login', [UserController::class, 'login']);