<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\KalkulatorController;

Route::get('/', [HealthController::class, 'index'])->name('home');
Route::get('/kalkulator', [KalkulatorController::class, 'index'])->name('kalkulator');
Route::post('/kalkulator/hitung', [KalkulatorController::class, 'hitung'])->name('kalkulator.hitung');
Route::get('/diet-program', [HealthController::class, 'dietProgram'])->name('diet.program');
