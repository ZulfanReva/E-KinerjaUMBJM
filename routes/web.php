<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\BerandaController;

// Route untuk halaman beranda
Route::get('/', [BerandaController::class, 'index'])->name('index');

// Route untuk halaman kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

// Route untuk halaman login
Route::get('/masuk', [MasukController::class, 'index'])->name('masuk')->middleware('guest'); // Proteksi untuk user yang sudah login
Route::post('/masuk', [MasukController::class, 'login'])->name('login');

// Route untuk halaman admin (Proteksi dengan middleware auth)
Route::get('/admin/beranda', function () {
    return view('pageadmin.berandaadmin');
})->name('pageadmin.berandaadmin')->middleware('auth');

// Route untuk halaman pengawas (Proteksi dengan middleware auth)
Route::get('/pengawas/beranda', function () {
    return view('pagepengawas.berandapengawas');
})->name('pagepengawas.berandapengawas')->middleware('auth');