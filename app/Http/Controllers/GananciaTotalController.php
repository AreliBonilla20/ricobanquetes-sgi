<?php

namespace App\Http\Controllers;

use App\Fecha;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\ConsultarDosPeriodosRequest;

class GananciaTotalController extends Controller
{
    public function index()
    {
        return view('ReportesEstrategicos/Consultas/ganancias_totales');
    }

    public function consultar(ConsultarDosPeriodosRequest $request)
    {

        $inicio_uno = $request->get('fecha_inicio_uno');
        $final_uno = $request->get('fecha_final_uno');

        $inicio_dos = $request->get('fecha_inicio_dos');
        $final_dos = $request->get('fecha_final_dos');

        $inicio_uno = Fecha::fechaTexto($inicio_uno);
        $final_uno = Fecha::fechaTexto($final_uno);
        
        $inicio_dos = Fecha::fechaTexto($inicio_dos);
        $final_dos = Fecha::fechaTexto($final_dos);

        return view('ReportesEstrategicos/resultados/resultados_ganancias_totales', compact('inicio_uno', 'final_uno', 'inicio_dos', 'final_dos'));
    }

    public function reporte(Request $request)
    {

        return view('ReportesEstrategicos/ReportePDF/resultados_ganancias_totales');
        /*$pdf=PDF::loadView('ReportesTacticos/ReportePDF/resultados_ganancias_totales');//Cargar la vista y recibe como parámetro el array de proyectos
        return $pdf->stream('Reporte_ganancias_totales.pdf');//Retorna el pdf de los estudiantes inscritos..*/
    }

}
