<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;



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

// Show Profile
Route::get('/profile', [UserController::class, 'show_profile']);



// Product routes
Route::get('/productindex', [ProductController::class, 'index']);

// Create Product form
Route::get('/productindex', [ProductController::class, 'create_product_form']);

// Edit product form
Route::get('productindex/edit_product/{id}', [ProductController::class, 'edit_product_form']);



// Wala to sa controller
// Route::get('/create', [ProductController::class, 'create']);

// Create Product 
Route::post('/productindex', [ProductController::class, 'create_product']);
// Delete
Route::delete('/productindex/{id}', [ProductController::class, 'delete_product']);

// Edit product
Route::get('/product/edit_product/{id}', [ProductController::class, 'edit_product_form']);

Route::put('/productindex/{id}', [ProductController::class, 'edit_product']);

// View page na product 
Route::get('/productindex/{id}', [ProductController::class, 'single_page']);

// All products page 
Route::get('/allproducts', [ProductController::class, 'showAllProducts']);

// Olay show products
Route::get('/olay', [ProductController::class, 'showOlayProducts']);


// Estee Lauder Show products
Route::get('/esteelauder', [ProductController::class, 'showEsteeLauderProducts']);


// Dior Show products 
Route::get('/dior', [ProductController::class, 'showDiorProducts']);


// Clinique Show products 
Route::get('/clinique', [ProductController::class, 'showCliniqueProducts']);


// Some By Mi Show products 
Route::get('/somebymi', [ProductController::class, 'showSomeByMiProducts']);



// Logout
Route::get('/logout', [UserController::class, 'logout']);