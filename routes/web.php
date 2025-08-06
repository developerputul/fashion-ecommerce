<?php

use App\Http\Controllers\Frontend\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//frontend Route

Route::get('/', [WelcomeController::class, 'index']);
