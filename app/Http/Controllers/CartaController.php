<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartaController extends Controller
{

    public function mostrarCarta()
    {
        $menu = ['mensaje' => 'Hola desde el controlador'];
        return view('CartaAmazonas632Benjamin', compact('menu'));
    }
    

}


