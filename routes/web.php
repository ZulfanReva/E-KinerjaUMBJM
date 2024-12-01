<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\BerandaController;

// Route untuk halaman beranda
Route::get('/', [BerandaController::class, 'index'])->name('index');  // Gunakan 'index' sesuai di Blade

// Route untuk halaman kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

// // Route untuk halaman kontak
// Route::get('/masuk', [KontakController::class, 'index'])->name('masuk');

Route::get('/masuk', function () {
    return view('masuk'); // Ganti 'masuk' dengan nama view Anda
})->name('masuk');