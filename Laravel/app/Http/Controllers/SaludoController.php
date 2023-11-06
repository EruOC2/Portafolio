<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function saludar($nombre, $apellido = null)
    {
        $saludo = "Hola, $nombre";
        if ($apellido) {
            $saludo .= " $apellido";
        }
        return $saludo;
    }

    public function vistaSaludo()
    {
        $nombre = "Visitante";
        return view('saludo', ['nombre' => $nombre]);
    }
}
