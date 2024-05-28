<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelaPrincipalController;

Route::get('/', [TelaPrincipalController::class, 'mostrarView']);
