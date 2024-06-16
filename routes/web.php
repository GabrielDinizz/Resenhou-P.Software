<?php

use App\Http\Controllers\CreateEvento;
use App\Http\Controllers\CreateEventoController;
use App\Http\Controllers\ListEventosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelaPrincipalController;
use App\Http\Controllers\SacController;

Route::get('/sac', [SacController::class, 'create'])->name('sac.create');
Route::post('/sac', [SacController::class, 'store'])->name('sac.store');
Route::get('/', [TelaPrincipalController::class, 'index'])->name('pagina-inicial');
Route::get('/create-evento', [CreateEventoController::class, 'index'])->name('create-evento');
Route::get('/list-eventos', [ListEventosController::class, 'index'])->name('list-eventos');


