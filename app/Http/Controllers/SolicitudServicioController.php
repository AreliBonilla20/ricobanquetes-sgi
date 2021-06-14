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

        $servicios_empleados = DB::select('select nombre_servicio, count(asignacion_empleado.id_empleado) as cantidad_empleados
                                            from servicio inner join asignacion_servicio on asignacion_servicio.id_servicio = servicio.id_servicio
                                            inner join solicitud on solicitud.id_solicitud=asignacion_servicio.id_solicitud
                                            inner join asignacion_empleado on asignacion_empleado.id_solicitud=solicitud.id_solicitud
                                            where fecha_solicitud between ? and ?
                                            group by nombre_servicio', [$inicio, $final]);

        $inicio = Fecha::fechaTexto($inicio);
        $final = Fecha::fechaTexto($final);

        return view('ReportesTacticos/resultados/resultados_solicitudes_servicios', compact('inicio', 'final', 'servicios_empleados'));
    }

    public function reporte(Request $request)
    {

        return view('ReportesTacticos/ReportePDF/reporte_solicitudes_servicios');
    }
}
