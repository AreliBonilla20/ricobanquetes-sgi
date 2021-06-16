<?php

namespace App\Http\Controllers;

use App\Fecha;
use DB;
use PDF;
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
        /*
        $ganancias_periodo_uno = DB::select('select round(contrato.ingreso_total - contrato.costo_total, 2) as ganancia from solicitud
        left join contrato on contrato.id_solicitud=solicitud.id_solicitud
        where fecha_solicitud between ? and ?', [$inicio_uno, $final_uno]);

        $ganancias_periodo_dos = DB::select('select round(contrato.ingreso_total - contrato.costo_total, 2) as ganancia from solicitud
        left join contrato on contrato.id_solicitud=solicitud.id_solicitud
        where fecha_solicitud between ? and ?', [$inicio_dos, $final_dos]);
        */
        $ganancias_periodo_uno = DB::select('select round(contrato.ingreso_total - contrato.costo_total, 2) as ganancia from solicitud
        left join contrato on contrato.id_solicitud=solicitud.id_solicitud
        where fecha_solicitud >= ?', [$inicio_uno]);

        $ganancias_periodo_dos = DB::select('select round(contrato.ingreso_total - contrato.costo_total, 2) as ganancia from solicitud
        left join contrato on contrato.id_solicitud=solicitud.id_solicitud
        where fecha_solicitud >= ?', [$inicio_dos]);


        $inicio_uno_f = Fecha::fechaTexto($inicio_uno);
        $final_uno_f = Fecha::fechaTexto($final_uno);
        
        $inicio_dos_f = Fecha::fechaTexto($inicio_dos);
        $final_dos_f = Fecha::fechaTexto($final_dos);

        return view('ReportesEstrategicos/resultados/resultados_ganancias_totales', compact('inicio_uno', 'final_uno', 'inicio_dos', 'final_dos',
        'inicio_uno_f', 'final_uno_f', 'inicio_dos_f', 'final_dos_f', 'ganancias_periodo_uno', 'ganancias_periodo_dos'));
    }

    public function reporte(Request $request)
    {
        $inicio_uno = $request->get('fecha_inicio_uno');
        $final_uno = $request->get('fecha_final_uno');

        $inicio_dos = $request->get('fecha_inicio_dos');
        $final_dos = $request->get('fecha_final_dos');
        /*
        $ganancias_periodo_uno = DB::select('select round(contrato.ingreso_total - contrato.costo_total, 2) as ganancia from solicitud
        left join contrato on contrato.id_solicitud=solicitud.id_solicitud
        where fecha_solicitud between ? and ?', [$inicio_uno, $final_uno]);

        $ganancias_periodo_dos = DB::select('select round(contrato.ingreso_total - contrato.costo_total, 2) as ganancia from solicitud
        left join contrato on contrato.id_solicitud=solicitud.id_solicitud
        where fecha_solicitud between ? and ?', [$inicio_dos, $final_dos]);
        */
        $ganancias_periodo_uno = DB::select('select round(contrato.ingreso_total - contrato.costo_total, 2) as ganancia from solicitud
        left join contrato on contrato.id_solicitud=solicitud.id_solicitud
        where fecha_solicitud >= ?', [$inicio_uno]);

        $ganancias_periodo_dos = DB::select('select round(contrato.ingreso_total - contrato.costo_total, 2) as ganancia from solicitud
        left join contrato on contrato.id_solicitud=solicitud.id_solicitud
        where fecha_solicitud >= ?', [$inicio_dos]);


        $inicio_uno_f = Fecha::fechaTexto($inicio_uno);
        $final_uno_f = Fecha::fechaTexto($final_uno);
        
        $inicio_dos_f = Fecha::fechaTexto($inicio_dos);
        $final_dos_f = Fecha::fechaTexto($final_dos);

        $pdf=PDF::loadView('ReportesEstrategicos/ReportePDF/reporte_ganancias_totales', compact('inicio_uno', 'final_uno', 'inicio_dos', 'final_dos',
        'inicio_uno_f', 'final_uno_f', 'inicio_dos_f', 'final_dos_f', 'ganancias_periodo_uno', 'ganancias_periodo_dos'));//Cargar la vista y recibe como parámetro el array de proyectos
        return $pdf->stream('Reporte_ganancias_totales.pdf');//Retorna el pdf de los estudiantes inscritos..
    }

}
