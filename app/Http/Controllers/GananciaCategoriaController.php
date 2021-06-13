<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GananciaCategoriaController extends Controller
{
    public function index()
    {
        return view('ReportesEstrategicos/Consultas/ganancias_categorias');
    }
}
