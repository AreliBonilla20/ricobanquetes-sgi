<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GananciaTotalController extends Controller
{
    public function index()
    {
        return view('ReportesEstrategicos/Consultas/ganancias_totales');
    }

}
