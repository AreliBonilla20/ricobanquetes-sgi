<?php

namespace App\Http\Controllers;

use App\Fecha;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\ConsultarUnPeriodoRequest;

class ServicioMasSolicitadoController extends Controller
{
    public function index()
    {
        return view('ReportesTacticos/Consultas/servicios_mas_solicitados');
    }

    public function consultar(ConsultarUnPeriodoRequest $request)
    {

        $inicio = $request->get('fecha_inicio');
        $final = $request->get('fecha_final');
        $inicio = Fecha::fechaTexto($inicio);
        $final = Fecha::fechaTexto($final);

        return view('ReportesTacticos/resultados/resultados_servicios_mas_solicitados', compact('inicio', 'final'));
    }

    public function reporte(Request $request)
    {

        return view('ReportesTacticos/ReportePDF/reporte_servicios_mas_solicitados');
    }
}
