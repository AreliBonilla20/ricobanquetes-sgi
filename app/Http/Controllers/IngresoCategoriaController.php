<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngresoCategoriaController extends Controller
{
    public function index()
    {
        return view('ReportesEstrategicos/Consultas/ingresos_categorias');
    }
}
