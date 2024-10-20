<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

// Rute untuk halaman login
Route::get('/', function () {
    return view('pages.auth.login');
});

// Rute yang membutuhkan autentikasi
Route::middleware(['auth'])->group(function () {
    // Rute untuk dashboard
    Route::get('/home', function() {
        return view('pages.dashboard.dashboard');
    })->name('home');

    // Rute untuk produk (dapat diakses oleh pengguna yang diautentikasi)
    Route::resource('product', ProductController::class);
});
