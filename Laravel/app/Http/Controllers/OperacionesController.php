<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{
    public function realizarOperacion($operacion, $num1, $num2)
    {
        $resultado = 0;

        switch ($operacion) {
            case 'suma':
                $resultado = $num1 + $num2;
                break;
            case 'resta':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicacion':
                $resultado = $num1 * $num2;
                break;
            case 'division':
                $resultado = $num2 !== 0 ? $num1 / $num2 : 'No se puede dividir por cero';
                break;
        }

        return "El resultado de la $operacion es: $resultado";
    }
}
