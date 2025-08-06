<?php

use App\Http\Controllers\Frontend\PagesController;
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
