<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route untuk halaman home
Route::get('/', [ProductController::class, 'productPage'])->name('index');

// Route untuk daftar produk dan detail produk
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');
