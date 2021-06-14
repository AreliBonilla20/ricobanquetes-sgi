<?php

namespace App\Http\Controllers;

use App\Fecha;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\ConsultarDosPeriodosRequest;

class GananciaCategoriaController extends Controller
{
    public function index()
    {
        return view('ReportesEstrategicos/Consultas/ganancias_categorias');
    }


    public function consultar(ConsultarDosPeriodosRequest $request)
    {

        $inicio_uno = $request->get('fecha_inicio_uno');
        $final_uno = $request->get('fecha_final_uno');

        $inicio_dos = $request->get('fecha_inicio_dos');
        $final_dos = $request->get('fecha_final_dos');

        $ganancia_categoria_uno = DB::select('select nombre_categoria_evento, contrato.costo_total, contrato.ingreso_total, contrato.ingreso_total - contrato.costo_total as ganancia from categoria_evento 
                                            inner join solicitud on categoria_evento.id_categoria_evento=solicitud.id_categoria_evento
                                            inner join contrato on contrato.id_solicitud=solicitud.id_solicitud
                                            where fecha_solicitud between ? and ?', [$inicio_uno, $final_uno]);

        $ganancia_categoria_dos = DB::select('select nombre_categoria_evento, contrato.costo_total, contrato.ingreso_total, contrato.ingreso_total - contrato.costo_total as ganancia from categoria_evento 
                                            inner join solicitud on categoria_evento.id_categoria_evento=solicitud.id_categoria_evento
                                            inner join contrato on contrato.id_solicitud=solicitud.id_solicitud
                                            where fecha_solicitud between ? and ?', [$inicio_dos, $final_dos]);                                   

        $inicio_uno = Fecha::fechaTexto($inicio_uno);
        $final_uno = Fecha::fechaTexto($final_uno);
        
        $inicio_dos = Fecha::fechaTexto($inicio_dos);
        $final_dos = Fecha::fechaTexto($final_dos);

        return view('ReportesEstrategicos/resultados/resultados_ganancias_categorias', compact('inicio_uno', 'final_uno', 'inicio_dos', 'final_dos', 'ganancia_categoria_uno', 'ganancia_categoria_dos'));
    }

    public function reporte(Request $request)
    {

        return view('ReportesEstrategicos/ReportePDF/resultados_ganancias_categorias');
        /*$pdf=PDF::loadView('ReportesTacticos/ReportePDF/resultados_ganancias_categorias');//Cargar la vista y recibe como parámetro el array de proyectos
        return $pdf->stream('Reporte_ganancias_categorias.pdf');//Retorna el pdf de los estudiantes inscritos..*/
    }
}
