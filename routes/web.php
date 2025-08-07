<?php

use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//frontend Route
Route::get('/', [WelcomeController::class, 'index']);

//Common Pages All Route

Route::get('/terms-condition', [PagesController::class, 'Terms'])->name('terms.condition');
Route::get('/privacy-policy', [PagesController::class, 'PrivacyPolicy'])->name('privacy.policy');
Route::get('/about-us', [PagesController::class, 'AboutUs'])->name('about.us');
Route::get('/contact-us', [PagesController::class, 'ContactUs'])->name('contact.us');
Route::get('/faq', [PagesController::class, 'Faq'])->name('faq');


//Product Routes
Route::get('/product', [ProductController::class, 'Index'])->name('product.index');
// Route::get('/products/create', [ProductController::class, 'Create'])->name('products.create');
// Route::post('/products', [ProductController::class, 'Store'])->name('products.store');
// Route::get('/products/{id}', [ProductController::class, 'Show'])->name('products.show');
// Route::get('/products/edit/{id}', [ProductController::class, 'Edit'])->name('products.edit');
// Route::get('/products/update/{id}', [ProductController::class, 'Edit'])->name('products.update');
