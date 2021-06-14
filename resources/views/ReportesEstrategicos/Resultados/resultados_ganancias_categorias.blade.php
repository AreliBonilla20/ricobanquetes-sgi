@extends('layout')
@section('title')
    Resultados ganancias por categorías comparadas por período
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
                                    <p>Ganancias por categorías comparadas por período</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
                                    <form action="{{route('reporte_categorias_servicios')}}" method="POST">
                                        @csrf
                                        <input id="url_grafico_generos" name="url_grafico_generos" type="text" hidden>
                                        <input id="url_grafico_carreras" name="url_grafico_carreras" type="text" hidden>
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
                        <p>Código : RPE02</p>
                        <p>Nombre : Ganancias por categoría de servicios</p>
                        <p>Descripción : Reporte de la comparación entre períodos de tiempo de las ganancias obtenidas por categoría de servicios </p>
                        <p>Del {{$inicio_uno_f}} al {{$final_uno_f}} <br> y 
                        {{$inicio_dos_f}} al {{$final_dos_f}}</p>
                </div>
                
              
                <br><br>
                <div style="display:flex; flex-direction: column; align-items:center;">
                <h4>GANANCIAS POR CATEGORÍA DE SERVICIOS</h4>
                   
                    <h4>Tabla de ganancias por caetegoría del período  al {{$final_uno}}</h4>
                    <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="normal-table-list mg-t-30">
                            
                            <table class="table table-striped" style="text-align:center;">
                            <thead>
                                <tr>
                                <th scope="col">Categoría de servicio</th>
                                <th scope="col">Ganancias {{$inicio_uno}} al {{$final_uno}}</th>
                                <th scope="col">Ganancias {{$inicio_dos}} al{{$final_dos}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i=0; $i<count($categorias); $i++)
                                <tr>
                                    <td>{{$categorias[$i]->nombre_categoria_evento}}</td>
                                    <td>$ {{$categorias_ganancias_uno[$i]}}</td>
                                    <td>$ {{$categorias_ganancias_dos[$i]}}</td>
                                </tr>
                                @endfor
                            </tbody>
                            </table>
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