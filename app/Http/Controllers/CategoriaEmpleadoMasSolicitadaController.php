<?php

namespace App\Http\Controllers;

use App\Fecha;
use DB;
use PDF;
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

        
        $fecha_i = $request->get('fecha_inicio');
        $fecha_f = $request->get('fecha_final');

        $categoria_empleados_mas_solicitadas = DB::select('select nombre_categoria_empleado, count(asignacion_empleado.id_empleado) as cantidad_empleados from categoria_empleado inner join empleado on empleado.id_categoria_empleado = categoria_empleado.id_categoria_empleado
                                                            inner join asignacion_empleado on asignacion_empleado.id_empleado=empleado.id_empleado
                                                            inner join solicitud on solicitud.id_solicitud=asignacion_empleado.id_solicitud
                                                            where fecha_solicitud between ? and ?
                                                            group by nombre_categoria_empleado
                                                            order by cantidad_empleados desc limit 3', [$inicio, $final]);
        $inicio = Fecha::fechaTexto($inicio);
        $final = Fecha::fechaTexto($final);

        return view('ReportesTacticos/resultados/resultados_categorias_empleados_mas_solicitadas', compact('inicio', 'final', 'categoria_empleados_mas_solicitadas', 'fecha_i', 'fecha_f'));
    }

    public function reporte(Request $request)
    {

        $inicio = $request->get('fecha_inicio');
        $final = $request->get('fecha_final');
        $url_grafico = $request->get('url_grafico');
        $fecha_actual =  Fecha::fechaTexto(date("d-m-Y"));

        $categoria_empleados_mas_solicitadas = DB::select('select nombre_categoria_empleado, count(asignacion_empleado.id_empleado) as cantidad_empleados from categoria_empleado inner join empleado on empleado.id_categoria_empleado = categoria_empleado.id_categoria_empleado
                                                            inner join asignacion_empleado on asignacion_empleado.id_empleado=empleado.id_empleado
                                                            inner join solicitud on solicitud.id_solicitud=asignacion_empleado.id_solicitud
                                                            where fecha_solicitud between ? and ?
                                                            group by nombre_categoria_empleado
                                                            order by cantidad_empleados desc limit 3', [$inicio, $final]);

        $inicio = Fecha::fechaTexto($inicio);
        $final = Fecha::fechaTexto($final);

        $pdf=PDF::loadView('ReportesTacticos/ReportePDF/reporte_categorias_empleados_mas_solicitadas', compact('fecha_actual', 'inicio', 'final', 'categoria_empleados_mas_solicitadas', 'url_grafico'));//Cargar la vista y recibe como parámetro el array de proyectos
        return $pdf->stream('Reporte_categorias_empleados_mas_solicitadas.pdf');//Retorna el pdf de los estudiantes inscritos..
    }
}
