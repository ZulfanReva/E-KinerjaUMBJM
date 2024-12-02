<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\BerandaController;

// Route untuk halaman beranda
Route::get('/', [BerandaController::class, 'index'])->name('index');

// Route untuk halaman kontak
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

// Route untuk halaman login
Route::get('/masuk', function () {
    if (Auth::check()) {
        return redirect()->route('admin.beranda'); // Redirect ke beranda admin jika sudah login
    }
    return view('masuk'); // Ganti dengan 'masuk' sesuai nama file tampilan Anda
})->name('masuk');

// Proses login
Route::post('/masuk', [MasukController::class, 'login'])->name('login');

// Logout
Route::post('/logout', [MasukController::class, 'logout'])->name('logout');

// Route untuk halaman admin (Proteksi dengan middleware auth)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::view('/beranda', 'pageadmin.berandaadmin')->name('beranda');
    // Data Dosen
    Route::view('/datadosen', 'pageadmin.datadosen')->name('datadosen');
    Route::view('/datadosen/tambah', 'pageadmin.datadosen-tambah')->name('tambahdatadosen');
    Route::view('/datadosen/edit/{id}', 'pageadmin.datadosen-edit')->name('datadosen.edit');    

    // Data Jabatan
    Route::view('/datajabatan', 'pageadmin.datajabatan')->name('datajabatan');
    Route::view('/datajabatan/tambah', 'pageadmin.datajabatan-tambah')->name('datajabatan.tambah');
    // Data Pengawas
    Route::view('/datapengawas', 'pageadmin.datapengawas')->name('datapengawas');
    Route::view('/datapengawas/tambah', 'pageadmin.datapengawas-tambah')->name('datapengawas.tambah');
    Route::view('/datapengawas/edit', 'pageadmin.datapengawas-edit')->name('datapengawas.edit');
    // Penilaian Profile Matching
    Route::view('/penilaianpm', 'pageadmin.penilaianpm')->name('penilaianpm');
    // Profil Admin
    Route::view('/profiladmin', 'pageadmin.profiladmin')->name('profiladmin');
});

// Route untuk halaman pengawas (Proteksi dengan middleware auth)
Route::get('/pengawas/beranda', function () {
    return view('pagepengawas.berandapengawas');
})->name('pagepengawas.berandapengawas')->middleware('auth');