<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;

Route::get('/', [TesteController::class, 'index']);
Route::get('/formulario', [TesteController::class, 'formulario']);
