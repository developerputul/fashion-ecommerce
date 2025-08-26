<?php

use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\CompareController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\SubscribeController;
use App\Http\Controllers\Frontend\WelcomeController;
use App\Http\Controllers\Frontend\WishlistController;
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

//Compare Routes
Route::get('/compare', [CompareController::class, 'Index'])->name('compare.index');
// Route::get('/products/create', [ProductController::class, 'Create'])->name('products.create');

//Cart Routes
Route::get('/cart', [CartController::class, 'Index'])->name('cart.index');
// Route::get('/products/create', [ProductController::class, 'Create'])->name('products.create');


//WishList Routes
Route::get('/wishlist', [WishlistController::class, 'Index'])->name('wishlist.index');
// Route::get('/products/create', [ProductController::class, 'Create'])->name('products.create');


//Checkout Routes
Route::get('/checkout', [CheckoutController::class, 'Index'])->name('checkout.index');
// Route::get('/products/create', [ProductController::class, 'Create'])->name('products.create');


//Subscribe Routes
Route::post('/subscribe', [SubscribeController::class, 'Store'])->name('subscribe.store');
