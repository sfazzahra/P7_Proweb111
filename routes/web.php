<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.home'); // 'pages' adalah nama folder, 'home' adalah nama file Blade (tanpa .blade.php)
})->name('home');

Route::get('/produk', [ProductController::class, 'index']);