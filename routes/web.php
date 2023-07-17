<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelanggarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SanctionController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\ViolationController;

// dashboard
Route::get('/', [DashboardController::class, 'index']);

Route::prefix('master')->name('master.')->group(function () {
    // sanksi = sanctions
    Route::resource('sanctions', SanctionController::class);
    // pelanggaran = violations
    Route::resource('violations', ViolationController::class);
    // santris = santri
    Route::resource('santri', SantriController::class);
    // users = user
    Route::resource('users', UserController::class);
});

// data pelanggar
// Route::get('/data-pelanggar', [PelanggarController::class, 'index']);
// Route::get('/tambah-data-pelanggar', [PelanggarController::class, 'tambahDataPelanggar'])->name('tambah-data-pelanggar');
// Route::get('/edit-data-pelanggar', [PelanggarController::class, 'editDataPelanggar'])->name('edit-data-pelanggar');

// user
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/tambah-data-user', [UserController::class, 'tambahDataUser'])->name('tambah-data-user');
Route::get('/edit-data-user', [UserController::class, 'editDataUser'])->name('edit-data-user');
