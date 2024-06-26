<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FaveController;
use App\Http\Controllers\SkinTypeController;




// Home and other pages
Route::get('/', function () {
    if (Session::has('id') && Session::get('role') == 0 ) {
        // To user site
        return view('welcome');
    } 
        // To admin site
    elseif (Session::has('id') && Session::get('role') == 1 ){
        return view('productindex');
    }
    else {
        // If No ID
        return redirect("/login");
    }
    
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


// User Accounts
Route::get('/userAccounts', [UserController::class, 'show_UserAccounts']);

// User Accounts
Route::get('/adminAccounts', [UserController::class, 'show_AdminAccounts']);


// Logout
Route::get('/logout', [UserController::class, 'logout']);
// Route::get('/logout', [ProductController::class, 'logout']);

// Cart Table
Route::get('/cart', [CartController::class, 'viewCart'])->name('cart.view');
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');


// FAVORITES TABLE
Route::get('/favorites', [FaveController::class, 'viewFavorites'])->name('favorites.view');
Route::post('/favorites/add/{id}', [FaveController::class, 'addToFavorites'])->name('favorites.add');
Route::post('/favorites/remove/{id}', [FaveController::class, 'removeFromFavorites'])->name('favorites.remove');

// SKIN TEST
Route::get('/skinTestExam', [SkinTypeController::class, 'showSkinTypeTest'])->name('skinTestExam.view');

// SKIN TEST
Route::get('/skinTestExam', [SkinTypeController::class, 'showSkinTypeTest'])->name('skinTestExam.view');
Route::post('/skinTestExam', [SkinTypeController::class, 'storeSkinTypeAnswers'])->name('skinTestExam.store');
Route::get('/skinTestResult', [SkinTypeController::class, 'showSkinTypeResult'])->name('skinTestResult.view');