<?php

namespace App\Http\Controllers;

use App\Fecha;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\ConsultarUnPeriodoRequest;

class CategoriaEmpleadoMasSolicitadaController extends Controller
{
    public function index()
    {
        return view('ReportesTacticos/Consultas/categorias_empleados_mas_solicitadas');
    }

    public function consultar(ConsultarUnPeriodoRequest $request)
    {

        $inicio = $request->get('fecha_inicio');
        $final = $request->get('fecha_final');
        $inicio = Fecha::fechaTexto($inicio);
        $final = Fecha::fechaTexto($final);

        return view('ReportesTacticos/resultados/resultados_categorias_empleados_mas_solicitadas', compact('inicio', 'final'));
    }

    public function reporte(Request $request)
    {

        return view('ReportesTacticos/ReportePDF/reporte_categorias_empleados_mas_solicitadas');
    }
}
