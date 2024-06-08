<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelaPrincipalController;
use App\Http\Controllers\SacController;

Route::get('/sac', [SacController::class, 'create'])->name('sac.create');
Route::post('/sac', [SacController::class, 'store'])->name('sac.store');
Route::get('/', [TelaPrincipalController::class, 'index']);

