<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/quote', \App\Http\Controllers\QuoteController::class);
