<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// HOME PAGE
Route::get('/', function () {
    return view('welcome');
});

// ABOUT PAGE
Route::get('/about', function () {
    return view('about');
});

// OLAY PAGE
Route::get('/olay', function () {
    return view('Olay');
});

// ESTEE LAUDER PAGE
Route::get('/esteelauder', function () {
    return view('EsteeLauder');
});

// DIOR PAGE
Route::get('/dior', function () {
    return view('Dior');
});

// CLINIQUE PAGE
Route::get('/clinique', function () {
    return view('Clinique');
});

// SOME BY MI PAGE
Route::get('/somebymi', function () {
    return view('Somebymi');
});

// ALL PRODUCTS PAGE
Route::get('/allproducts', function () {
    return view('allProducts');
});

Route::get('/signup', [UserController::class, 'show_signup']);

Route::post('/signup', [UserController::class, 'signup']);

Route::get('/login', [UserController::class, 'show_login']);

Route::post('/login', [UserController::class, 'login']);