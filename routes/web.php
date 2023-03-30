<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\QuoteController;
// Route::get('/', function () {
//     return view('welcome');
// });

// Search
//Route::get('/',[SearchController::class, 'index'])->name('index');
//Route::get('/search',[QuoteController::class, 'search'])->name('index');

Route::resource('/', \App\Http\Controllers\QuoteController::class);
Route::get('/search', [QuoteController::class,'search'])->name('search');

Route::get('/index', [QuoteController::class, 'index'])->name('index');
