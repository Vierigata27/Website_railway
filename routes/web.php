<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KomponenController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RakitController;
use App\Http\Controllers\RekomendasiRakitanController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Cookie;


// Route Login
Route::get('/login_admin', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login_admin', [AuthController::class, 'login'])->name('login_admin.store');
Route::get('/logout_admin', [AuthController::class, 'logout'])->name('logout_admin');

// Middleware untuk admin yang sudah login
Route::middleware([AdminMiddleware::class])->group(function () {

    Route::get('/dashboard', [DashboardAdminController::class, 'index'])->name('dashboard');
    
    Route::get('/komponen', [KomponenController::class, 'index'])->name('komponen.index');
    Route::get('/komponen/create', [KomponenController::class, 'create'])->name('komponen.create');
    Route::post('/komponen/store', [KomponenController::class, 'store'])->name('komponen.store');

    Route::get('/komponen/{id}/edit', [KomponenController::class, 'edit'])->name('komponen.edit');
    Route::put('/komponen/{id}', [KomponenController::class, 'update'])->name('komponen.update');
    Route::delete('/komponen/destroy/{id}', [KomponenController::class, 'destroy'])->name('komponen.destroy');

    Route::get('/kategori', [KategoriController::class, 'index']);

    Route::get('/tabel_pengguna', [PenggunaController::class, 'index']);

    Route::get('/tabel_rekomendasi', [RekomendasiRakitanController::class, 'index']);
    Route::get('/tabel_rekomendasi/{id}', [RekomendasiRakitanController::class, 'detail'])->name('tabel_rekomendasi.detail');
    Route::get('/downloadhasilrekomendasirakit/{id}', [RekomendasiRakitanController::class, 'cetakhasilrekomendasirakit'])->name('download_rakit_admin.pdf');
});

// Form Pengguna
Route::get('/', [PenggunaController::class, 'create_user'])->name('formpengguna.index');
Route::post('/formpengguna/store', [PenggunaController::class, 'store'])->name('formpengguna.store');

// Route Logout
Route::get('/logout', function () {
    Cookie::queue(Cookie::forget('id_pengguna'));
    return redirect('/');
});

// Middleware untuk User
Route::middleware([\App\Http\Middleware\UserCookieMiddleware::class])->group(function () {
    Route::get('/menu_utama', [DashboardController::class, 'index'])->name('dashboard.index');

    // Route::get('/rekomendasi', [RekomendasiRakitanController::class, 'algoritmagenetika'])->name('algoritmagenetika');
    Route::get('/input_rekomendasi', [RekomendasiRakitanController::class, 'createrekomendasi'])->name('form.rekomendasi');
    Route::post('/rekomendasi', [RekomendasiRakitanController::class, 'algoritma_genetika1'])->name('rekomendasi.get');
    Route::get('/hasilrekomendasi/{id}', [RekomendasiRakitanController::class, 'hasilrekomendasi'])->name('hasilrekomendasi.show');
    Route::get('/downloadhasilrekomendasi/{id}', [RekomendasiRakitanController::class, 'cetakhasilrekomendasi'])->name('downloadrekomendasi.pdf');


    Route::get('/rakit_komputer', [RakitController::class, 'index'])->name('rakitkomputer.index');
    Route::post('/rakit_komputer/store', [RakitController::class, 'store'])->name('rakitkomputer.store');
    Route::get('/hasilrakit/{id}', [RakitController::class, 'show'])->name('hasilrakit.show');
    Route::get('/downloadhasilrakit/{id}', [RakitController::class, 'cetakhasilrakit'])->name('download.pdf');
});
