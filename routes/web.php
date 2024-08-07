<?php

use App\Http\Controllers\CreateEvento;
use App\Http\Controllers\CreateEventoController;
use App\Http\Controllers\ListEventosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelaPrincipalController;
use App\Http\Controllers\SacController;
use App\Http\Controllers\LoginController;

Route::get('/sac', [SacController::class, 'create'])->name('sac.create');
Route::post('/sac', [SacController::class, 'store'])->name('sac.store');

Route::get('/', [TelaPrincipalController::class, 'index'])->name('pagina-inicial');

Route::get('/create-evento', [CreateEventoController::class, 'index'])->name('create-evento');
Route::get('/list-eventos', [ListEventosController::class, 'index'])->name('list-eventos');

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

