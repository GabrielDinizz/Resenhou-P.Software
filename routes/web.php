<?php

use App\Http\Controllers\CreateEventoController;
use App\Http\Controllers\ListEventosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelaPrincipalController;
use App\Http\Controllers\SacController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PerfilController;

Route::get('/sac', [SacController::class, 'create'])->name('sac.create');
Route::post('/sac', [SacController::class, 'store'])->name('sac.store');

Route::get('/', [TelaPrincipalController::class, 'index'])->name('pagina-inicial');

Route::get('/evento/etapa1', [CreateEventoController::class, 'Etapa1'])->name('evento.etapa1');
Route::post('/evento/etapa1', [CreateEventoController::class, 'saveEtapa1'])->name('evento.saveEtapa1');

Route::get('/evento/etapa2', [CreateEventoController::class, 'Etapa2'])->name('evento.etapa2');
Route::post('/evento/etapa2', [CreateEventoController::class, 'saveEtapa2'])->name('evento.saveEtapa2');

Route::get('/evento/etapa3', [CreateEventoController::class, 'Etapa3'])->name('evento.etapa3');
Route::post('/evento/etapa3', [CreateEventoController::class, 'saveEtapa3'])->name('evento.saveEtapa3');

Route::get('/evento/etapa4', [CreateEventoController::class, 'Etapa4'])->name('evento.etapa4');
Route::post('/evento/etapa4', [CreateEventoController::class, 'saveEtapa4'])->name('evento.saveEtapa4');

Route::get('/evento/etapa5', [CreateEventoController::class, 'Etapa5'])->name('evento.etapa5');
Route::post('/evento/etapa5', [CreateEventoController::class, 'saveEtapa5'])->name('evento.saveEtapa5');


Route::get('/eventos', [ListEventosController::class, 'listar'])->name('list-eventos');
Route::get('/eventos/categoria', [ListEventosController::class, 'listar'])->name('eventos.categoria');


Route::get('/CreateAccount', [LoginController::class, 'create'])->name('createAccount');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [LoginController::class, 'register'])->name('register'); // Rota de cadastro
Route::post('/authenticate', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/perfil', [PerfilController::class, 'edit'])->name('perfil');
Route::patch('/perfil', [PerfilController::class, 'update'])->name('perfil.update');
Route::patch('/perfil/avatar', [PerfilController::class, 'updateAvatar'])->name('perfil.avatar.update');
Route::patch('/perfil/update-name', [PerfilController::class, 'updateName'])->name('perfil.updateName');


