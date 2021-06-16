@extends('layout')
@section('title')
    Resultados ganancias totales comparadas por período
@endsection
@section('content')
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-windows"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Reporte</h2>
                                    <p>Ganancias totales comparadas por período</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
                                    <form action="{{route('reporte_ganancias_totales')}}" method="POST">
                                        @csrf
                                    <button formtarget="_blank" data-toggle="tooltip" data-placement="left"
                                    class="btn btn-default"><i class="notika-icon notika-down-arrow"></i> Generar PDF</button>
                                    </form>
								</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="form-element-area">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list" >
                <br>
                <div style="text-align:center">
                    <h2 >Resultados</h2>
                    <h3>Reporte</h3>
                        <p>Código : RPE03</p>
                        <p>Nombre : Ganancias totales comparadas por período</p>
                        <p>Descripción : Reporte de la comparación entre períodos de tiempo de las ganancias de la empresa. </p>
                        <p>Del {{$inicio_uno_f}} al {{$final_uno_f}} <br> y {{$inicio_dos_f}} al {{$final_dos_f}}</p>
                </div>
                
              
                <br><br>
                <div style="display:flex; flex-direction: column; align-items:center;">
                <h4>GANANCIAS TOTALES DE DOS PERÍODOS</h4>
                  
                    <h4>Tabla de ganancias totales por período</h4>
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        
                        <table class="table table-striped" style="text-align:center;">
                        <thead>
                            <tr>
                           
                            <th scope="col">{{$inicio_uno}} al {{$final_uno}}</th>
                            <th scope="col">{{$inicio_dos}} al {{$final_dos}}</th>
                            </tr>
                        </thead>
                        <tbody>
                       
                     
                                <tr>
                                    <td>$ {{$ganancias_periodo_uno[0]->ganancia}}</td>
                                    <td>$ {{$ganancias_periodo_dos[0]->ganancia}}</td>
                                  
                                </tr>
                        
                        
                        </tbody>
                        </table>
                    </div>
                </div>
                </div>
                <div id="grafico_genero" style="width: 900px; height: 500px;"></div>
                    <div id="grafico_genero_imagen" style="width: 900px; height: 500px;" hidden></div>
                
                <br><br><br>
             
            </div>
    
        </div>
        
    </div>
</div>
</div>





@endsection