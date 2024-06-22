<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

// Product routes

// Route::get('/productindex', [ProductController::class, 'create'])->name('products.create');
// Route::post('/productindex', [ProductController::class, 'store'])->name('products.store');
// Route::get('/productindex', [ProductController::class, 'edit'])->name('products.edit');
// Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
// Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

// Home and other pages
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/olay', function () {
    return view('Olay');
});

Route::get('/esteelauder', function () {
    return view('EsteeLauder');
});

Route::get('/dior', function () {
    return view('Dior');
});

Route::get('/clinique', function () {
    return view('Clinique');
});

Route::get('/somebymi', function () {
    return view('Somebymi');
});

Route::get('/allproducts', function () {
    return view('allProducts');
});

Route::get('/signup', [UserController::class, 'show_signup']);
Route::post('/signup', [UserController::class, 'signup']);
Route::get('/login', [UserController::class, 'show_login']);
Route::post('/login', [UserController::class, 'login']);

// Product routes
Route::get('/productindex', [ProductController::class, 'index']);

Route::get('/create', [ProductController::class, 'create']);

// Create Product form
Route::get('/productindex', [ProductController::class, 'create_product_form']);

// Create Product 
Route::post('/productindex', [ProductController::class, 'create_product']);

// View page na product 
Route::get('/productindex/{id}', [ProductController::class, 'single_page']);