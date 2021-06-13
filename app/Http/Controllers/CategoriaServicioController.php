<?php

namespace App\Http\Controllers;

use App\Fecha;
use DB;
use PDF;
use Illuminate\Http\Request;
use App\Http\Requests\ConsultarUnPeriodoRequest;

class CategoriaServicioController extends Controller
{
    public function index()
    {
        return view('ReportesTacticos/Consultas/categorias_servicios');
    }

    public function consultar(ConsultarUnPeriodoRequest $request)
    {

        $inicio = $request->get('fecha_inicio');
        $final = $request->get('fecha_final');
       

        $categorias_servicios = DB::select('select nombre_categoria_evento as categoria_evento, count(id_solicitud) as cantidad_solicitudes from categoria_evento 
                                            inner join solicitud on solicitud.id_categoria_evento = categoria_evento.id_categoria_evento
                                            where fecha_solicitud between ? and ?
                                            group by nombre_categoria_evento', [$inicio, $final]);

                                             
        $inicio = Fecha::fechaTexto($inicio);
        $final = Fecha::fechaTexto($final);

        return view('ReportesTacticos/resultados/resultados_categorias_servicios', compact('inicio', 'final', 'categorias_servicios'));
    }

    public function reporte(Request $request)
    {

        return view('ReportesTacticos/ReportePDF/resultados_categorias_servicios', compact('inicio', 'final'));
        /*$pdf=PDF::loadView('ReportesTacticos/ReportePDF/resultados_categorias_servicios');//Cargar la vista y recibe como parámetro el array de proyectos
        return $pdf->stream('Reporte_categorias_servicios.pdf');//Retorna el pdf de los estudiantes inscritos..*/
    }
}
