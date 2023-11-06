<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\SaludoController;

// Ruta para operaciones matemáticas (suma, resta, multiplicación, división)
Route::get('/operaciones/{operacion}/{num1}/{num2}', [OperacionesController::class, 'realizarOperacion'])
    ->where(['operacion' => 'suma|resta|multiplicacion|division', 'num1' => '[0-9]+', 'num2' => '[0-9]+']);

// Ruta para saludar a un usuario con su nombre y apellido (apellido opcional)
Route::get('/saludar/{nombre}/{apellido?}', [SaludoController::class, 'saludar'])
    ->where(['nombre' => '[A-Za-z]+', 'apellido' => '[A-Za-z]+']);

// Ruta que muestra una vista con el nombre del visitante y saludo desde la vista
Route::get('/vista-saludo', [SaludoController::class, 'vistaSaludo']);
