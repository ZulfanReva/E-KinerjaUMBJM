<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DataDosenController;
use App\Http\Controllers\DataJabatanController;
use App\Http\Controllers\DataJatabanController;
use App\Http\Controllers\DataPengawasController;

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
    // Halaman beranda admin
    Route::view('/beranda', 'pageadmin.berandaadmin')->name('beranda');
    
    // Data Dosen menggunakan resource route
    Route::resource('datadosen', DataDosenController::class)->names([
    'index' => 'datadosen.index',
    'create' => 'datadosen.create',
    'store' => 'datadosen.store',
    'show' => 'datadosen.show',
    'edit' => 'datadosen.edit',
    'update' => 'datadosen.update',
    'destroy' => 'datadosen.destroy',
    ]);
    
    // Data Pengawas menggunakan resource route
    Route::resource('datapengawas', DataPengawasController::class)->names([
    'index' => 'datapengawas.index',
    'create' => 'datapengawas.create',
    'store' => 'datapengawas.store',
    'show' => 'datapengawas.show',
    'edit' => 'datapengawas.edit',
    'update' => 'datapengawas.update',
    'destroy' => 'datapengawas.destroy',
    ]);

    // Data Jabatan menggunakan resource route
    Route::resource('datajabatan', DataJabatanController::class)->names([
        'index' => 'datajabatan.index',
        'create' => 'datajabatan.create',
        'store' => 'datajabatan.store',
        'show' => 'datajabatan.show',
        'edit' => 'datajabatan.edit',
        'update' => 'datajabatan.update',
        'destroy' => 'datajabatan.destroy',
        ]);

    // Data Prodi menggunakan resource route
    Route::resource('dataprodi', ProdiController::class)->names([
        'index' => 'dataprodi.index',
        'create' => 'dataprodi.create',
        'store' => 'dataprodi.store',
        'show' => 'dataprodi.show',
        'edit' => 'dataprodi.edit',
        'update' => 'dataprodi.update',
        'destroy' => 'dataprodi.destroy',
    ]);

    // Penilaian Profile Matching
    Route::view('/penilaianpm', 'pageadmin.penilaianpm')->name('penilaianpm');

    // Profil Admin
    Route::view('/profiladmin', 'pageadmin.profiladmin')->name('profiladmin');
});

// Route untuk halaman pengawas (Proteksi dengan middleware auth)
Route::get('/pengawas/beranda', function () {
    return view('pagepengawas.berandapengawas');
})->name('pagepengawas.berandapengawas')->middleware('auth');