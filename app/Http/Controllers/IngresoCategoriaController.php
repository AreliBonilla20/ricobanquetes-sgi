<?php

namespace App\Http\Controllers;

use App\Fecha;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\ConsultarDosPeriodosRequest;

class IngresoCategoriaController extends Controller
{
    public function index()
    {
        return view('ReportesEstrategicos/Consultas/ingresos_categorias');
    }

    public function consultar(ConsultarDosPeriodosRequest $request)
    {

        $inicio_uno = $request->get('fecha_inicio_uno');
        $final_uno = $request->get('fecha_final_uno');

        $inicio_dos = $request->get('fecha_inicio_dos');
        $final_dos = $request->get('fecha_final_dos');

        $categorias = DB::select('select nombre_categoria_evento from categoria_evento');
        $categorias_ingresos_uno = [];
        $categorias_ingresos_dos = [];

        $ingresos_periodo_uno = DB::select('select nombre_categoria_evento, round(contrato.ingreso_total, 2) as ingreso from categoria_evento 
                                            inner join solicitud on categoria_evento.id_categoria_evento=solicitud.id_categoria_evento
                                            inner join contrato on contrato.id_solicitud=solicitud.id_solicitud
                                            where fecha_solicitud between ? and ? order by nombre_categoria_evento ', [$inicio_uno, $final_uno]);

        $ingresos_periodo_dos = DB::select('select nombre_categoria_evento, round(contrato.ingreso_total, 2) as ingreso from categoria_evento 
                                            inner join solicitud on categoria_evento.id_categoria_evento=solicitud.id_categoria_evento
                                            inner join contrato on contrato.id_solicitud=solicitud.id_solicitud
                                            where fecha_solicitud between ? and ? order by nombre_categoria_evento', [$inicio_dos, $final_dos]);

        
        $elementos_periodo_uno = count($ingresos_periodo_uno);
        $elementos_periodo_dos = count($ingresos_periodo_dos);

       
        for ($i = 0; $i < count($ingresos_periodo_uno); $i++) {
            $categorias_ingresos_uno[$i] = $ingresos_periodo_uno[$i]->ingreso;
            if($ingresos_periodo_uno[$i]->ingreso == ''){
                $categorias_ingresos_uno[$i] = 0.00;
            }
        }

        for ($i = 0; $i < (count($categorias) - count($ingresos_periodo_uno)); $i++) {
            $categorias_ingresos_uno[$elementos_periodo_uno] = 0.00;
            $elementos_periodo_uno++;
        }

        for ($i = 0; $i < count($ingresos_periodo_dos); $i++) {
            $categorias_ingresos_dos[$i] = $ingresos_periodo_dos[$i]->ingreso;
            if($ingresos_periodo_dos[$i]->ingreso == ''){
                $categorias_ingresos_dos[$i] = 0.00;
            }
        }

        for ($i = 0; $i < (count($categorias) - count($ingresos_periodo_dos)); $i++) {
            $categorias_ingresos_dos[$elementos_periodo_dos] = 0.00;
            $elementos_periodo_dos++;
        }

        
        
    
        $inicio_uno_f = Fecha::fechaTexto($inicio_uno);
        $final_uno_f = Fecha::fechaTexto($final_uno);
        
        $inicio_dos_f = Fecha::fechaTexto($inicio_dos);
        $final_dos_f = Fecha::fechaTexto($final_dos);

        return view('ReportesEstrategicos/resultados/resultados_ingresos_categorias', compact('inicio_uno', 'final_uno', 'inicio_dos', 'final_dos', 
        'inicio_uno_f', 'final_uno_f', 'inicio_dos_f', 'final_dos_f', 'categorias_ingresos_uno', 'categorias_ingresos_dos', 'categorias'));
    }

    public function reporte(Request $request)
    {

        return view('ReportesEstrategicos/ReportePDF/resultados_ingresos_categorias');
        /*$pdf=PDF::loadView('ReportesTacticos/ReportePDF/resultados_ingresos_categorias');//Cargar la vista y recibe como parámetro el array de proyectos
        return $pdf->stream('Reporte_ingresos_categorias.pdf');//Retorna el pdf de los estudiantes inscritos..*/
    }

}
