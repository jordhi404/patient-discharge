<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BedController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Trial card
use App\Http\Controllers\trialCardController;

Route::middleware(['web'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login')->middleware('guest', 'no-cache');
    Route::post('/login', [AuthController::class, 'login']);
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('auth', 'no-cache')->group(function () {
        Route::get('/', [DashboardController::class, 'showDashboard'])->name('dashboard');
        Route::get('/keuangan', [trialCardController::class, 'showPatientCards'])->name('patient.card');
        Route::get('/Pasien/{id}/detail', [trialCardController::class, 'showPatientDetails'])->name('patient.detail');
        Route::get('/ranap', [BedController::class, 'index'])->name('ranap');
        Route::get('/cs', [BedController::class, 'index'])->name('cs');  
    });  
});