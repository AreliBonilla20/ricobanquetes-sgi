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

        $servicios_mas_solicitados = DB::select('select nombre_servicio, count(asignacion_servicio.id_servicio) as cantidad_solicitudes from servicio inner join asignacion_servicio on servicio.id_servicio=asignacion_servicio.id_servicio
                                                inner join solicitud on solicitud.id_solicitud = asignacion_servicio.id_solicitud
                                                where fecha_solicitud between ? and ?
                                                group by nombre_servicio
                                                order by cantidad_solicitudes desc limit 3', [$inicio, $final]);

        $inicio = Fecha::fechaTexto($inicio);
        $final = Fecha::fechaTexto($final);

        return view('ReportesTacticos/resultados/resultados_servicios_mas_solicitados', compact('inicio', 'final', 'servicios_mas_solicitados'));
    }

    public function reporte(Request $request)
    {

        return view('ReportesTacticos/ReportePDF/reporte_servicios_mas_solicitados');
    }
}
