<?php

namespace App\Http\Controllers;

use App\Fecha;
use DB;
use PDF;
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
        
        $fecha_i = $request->get('fecha_inicio');
        $fecha_f = $request->get('fecha_final');

        $servicios_empleados = DB::select('select nombre_servicio, count(asignacion_empleado.id_empleado) as cantidad_empleados
                                            from servicio inner join asignacion_servicio on asignacion_servicio.id_servicio = servicio.id_servicio
                                            inner join solicitud on solicitud.id_solicitud=asignacion_servicio.id_solicitud
                                            inner join asignacion_empleado on asignacion_empleado.id_solicitud=solicitud.id_solicitud
                                            where fecha_solicitud between ? and ?
                                            group by nombre_servicio', [$inicio, $final]);

        $inicio = Fecha::fechaTexto($inicio);
        $final = Fecha::fechaTexto($final);

        return view('ReportesTacticos/resultados/resultados_solicitudes_servicios', compact('inicio', 'final', 'servicios_empleados', 'fecha_i', 'fecha_f'));
    }

    public function reporte(Request $request)
    {  
        $inicio = $request->get('fecha_inicio');
        $final = $request->get('fecha_final');
        $url_grafico = $request->get('url_grafico');
        $fecha_actual =  Fecha::fechaTexto(date("d-m-Y"));

        $servicios_empleados = DB::select('select nombre_servicio, count(asignacion_empleado.id_empleado) as cantidad_empleados
                                            from servicio inner join asignacion_servicio on asignacion_servicio.id_servicio = servicio.id_servicio
                                            inner join solicitud on solicitud.id_solicitud=asignacion_servicio.id_solicitud
                                            inner join asignacion_empleado on asignacion_empleado.id_solicitud=solicitud.id_solicitud
                                            where fecha_solicitud between ? and ?
                                            group by nombre_servicio', [$inicio, $final]);

        $inicio = Fecha::fechaTexto($inicio);
        $final = Fecha::fechaTexto($final);

        $pdf=PDF::loadView('ReportesTacticos/ReportePDF/reporte_solicitudes_servicios', compact('fecha_actual', 'inicio', 'final', 'servicios_empleados', 'url_grafico'));//Cargar la vista y recibe como parámetro el array de proyectos
        return $pdf->stream('Reporte_solicitudes_servicios.pdf');//Retorna el pdf de los estudiantes inscritos..

    }
}
