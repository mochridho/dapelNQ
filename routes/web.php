<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelanggarController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\SanctionController;
use App\Http\Controllers\SanksiController;
use App\Http\Controllers\SantriController;

// dashboard
Route::get('/', [DashboardController::class, 'index']);

// data pelanggar
Route::get('/data-pelanggar', [PelanggarController::class, 'index']);
Route::get('/tambah-data-pelanggar', [PelanggarController::class, 'tambahDataPelanggar'])->name('tambah-data-pelanggar');
Route::get('/edit-data-pelanggar', [PelanggarController::class, 'editDataPelanggar'])->name('edit-data-pelanggar');

// user
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/tambah-data-user', [UserController::class, 'tambahDataUser'])->name('tambah-data-user');
Route::get('/edit-data-user', [UserController::class, 'editDataUser'])->name('edit-data-user');

// pelanggaran
Route::get('/pelanggaran', [PelanggaranController::class, 'index']);
Route::get('/tambah-data-pelanggran', [PelanggaranController::class, 'tambahDataPelanggaran'])->name('tambah-data-pelanggaran');
Route::get('/edit-data-pelanggran', [PelanggaranController::class, 'editDataPelanggaran'])->name('edit-data-pelanggaran');

// sanksi
Route::resource('sanctions', SanctionController::class);
// Route::get('/tambah-data-sanksi', [SanksiController::class, 'tambahDataSanksi'])->name('tambah-data-sanksi');
// Route::get('/edit-data-sanksi', [SanksiController::class, 'editDataSanksi'])->name('edit-data-sanksi');

// santri
Route::get('/santri', [SantriController::class, 'index']);
Route::get('/tambah-data-santri', [SantriController::class, 'tambahDataSantri'])->name('tambah-data-santri');
Route::get('/edit-data-santri', [SantriController::class, 'editDataSantri'])->name('edit-data-santri');
