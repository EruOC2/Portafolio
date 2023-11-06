<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacionesController;
use App\Http\Controllers\SaludoController;


Route::get('/operaciones/{operacion}/{num1}/{num2}', [OperacionesController::class, 'realizarOperacion'])
    ->where(['operacion' => 'suma|resta|multiplicacion|division', 'num1' => '[0-9]+', 'num2' => '[0-9]+']);


Route::get('/saludar/{nombre}/{apellido?}', [SaludoController::class, 'saludar'])
    ->where(['nombre' => '[A-Za-z]+', 'apellido' => '[A-Za-z]+']);


Route::get('/saludo-usuario/{nombre}', [SaludoController::class, 'saludoUsuario'])
    ->where('nombre', '[A-Za-z]+');