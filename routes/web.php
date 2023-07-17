<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SanctionController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\ViolationController;


Route::middleware('auth')->group(function () {
    // dashboard
    Route::get('/', [DashboardController::class, 'index']);

    // logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::prefix('master')->middleware('auth')->name('master.')->group(function () {
    // sanksi = sanctions
    Route::resource('sanctions', SanctionController::class);
    // pelanggaran = violations
    Route::resource('violations', ViolationController::class);
    // santris = santri
    Route::resource('santri', SantriController::class);
    // users = user
    Route::resource('users', UserController::class);
});

// login
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'formLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
});

// data pelanggar
// Route::get('/data-pelanggar', [PelanggarController::class, 'index']);
// Route::get('/tambah-data-pelanggar', [PelanggarController::class, 'tambahDataPelanggar'])->name('tambah-data-pelanggar');
// Route::get('/edit-data-pelanggar', [PelanggarController::class, 'editDataPelanggar'])->name('edit-data-pelanggar');
