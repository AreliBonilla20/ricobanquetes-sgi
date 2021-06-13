<?php

namespace App\Http\Controllers;

use App\Fecha;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\ConsultarUnPeriodoRequest;


class SolicitudServicioController extends Controller
{
    public function index()
    {
        return view('ReportesTacticos/Consultas/solicitudes_servicios');
    }
    public function consultar(ConsultarUnPeriodoRequest $request)
    {

        $inicio = $request->get('fecha_inicio');
        $final = $request->get('fecha_final');
        $inicio = Fecha::fechaTexto($inicio);
        $final = Fecha::fechaTexto($final);

        return view('ReportesTacticos/resultados/resultados_solicitudes_servicios', compact('inicio', 'final'));
    }

    public function reporte(Request $request)
    {

        return view('ReportesTacticos/ReportePDF/reporte_solicitudes_servicios');
    }
}
