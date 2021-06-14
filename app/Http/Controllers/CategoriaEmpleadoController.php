<?php

namespace App\Http\Controllers;

use App\Fecha;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\ConsultarUnPeriodoRequest;

class CategoriaEmpleadoController extends Controller
{
    public function index()
    {
        return view('ReportesTacticos/Consultas/categorias_empleados');
    }

    public function consultar(ConsultarUnPeriodoRequest $request)
    {

        $inicio = $request->get('fecha_inicio');
        $final = $request->get('fecha_final');
        
        $categorias_empleados = DB::select('select nombre_categoria_empleado, count(asignacion_empleado.id_empleado) as cantidad_empleados
                                            from categoria_empleado 
                                            inner join empleado on empleado.id_categoria_empleado=categoria_empleado.id_categoria_empleado
                                            inner join asignacion_empleado on asignacion_empleado.id_empleado = empleado.id_empleado
                                            inner join solicitud on solicitud.id_solicitud = asignacion_empleado.id_solicitud
                                            where fecha_solicitud between ? and ?
                                            group by nombre_categoria_empleado', [$inicio, $final]);

        $inicio = Fecha::fechaTexto($inicio);
        $final = Fecha::fechaTexto($final);


        return view('ReportesTacticos/resultados/resultados_categorias_empleados', compact('inicio', 'final', 'categorias_empleados'));
    }

    public function reporte(Request $request)
    {

        return view('ReportesTacticos/ReportePDF/reporte_categorias_empleados');
    }
}
