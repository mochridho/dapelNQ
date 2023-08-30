<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataOfViolationController;
use App\Http\Controllers\FormReportController;
use App\Http\Controllers\PelanggaranReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SanctionController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\ViolationController;
use App\Http\Controllers\WaliController;

Route::middleware('auth')->group(function () {
    // dashboard
    Route::get('/', [DashboardController::class, 'index']);

    // logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// data of violations = data pelanggaran
Route::resource('data-of-violations', DataOfViolationController::class)->middleware('auth');

Route::prefix('master')->middleware(['auth', 'auth.administrator'])->name('master.')->group(function () {
    // sanksi = sanctions
    Route::resource('sanctions', SanctionController::class);
    // pelanggaran = violations
    Route::resource('violations', ViolationController::class);
    // santris = santri
    Route::resource('santri', SantriController::class)->withoutMiddleware('auth.administrator');
    // users = user
    Route::resource('users', UserController::class);
    // form report
    Route::get('/form-report', FormReportController::class)->name('form-report');
    // report
    Route::get('/pelanggaran-report', PelanggaranReportController::class)->name('pelanggaran-report');
});

// login
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'formLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);
});

Route::get('/wali', WaliController::class)->name('wali');
