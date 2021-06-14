@extends('layout')
@section('title')
    Resultados demanda por categoría de servicio
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
                                    <p>Demanda por categoría de servicio</p>
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
                        <p>Código : RPT01</p>
                        <p>Nombre : Demanda por categoría de servicio</p>
                        <p>Descripción : Reporte de las categorías de servicio y la demanda que poseen por rangos de tiempo </p>
                        <p>Período comprendido entre {{$inicio}} al {{$final}}</p>
                </div>
                
              
                <br><br>
                <div style="display:flex; flex-direction: column; align-items:center;">
                <h4>DEMANDA POR CATEGORÍAS DE SERVICIO</h4>
                   
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                    <span>Tabla de categorías de servicios y cantidad de solicitudes</span>
                        <table class="table table-striped" style="text-align:center;">
                        <thead>
                            <tr>
                            <th scope="col">Categorías de servicio</th>
                            <th scope="col">Cantidad de solicitudes</th>
                            </tr>
                        </thead>
                        <tbody>
                       @foreach($categorias_servicios as $categorias)
                            <tr>
                                <td>{{$categorias->categoria_evento}}</td>
                                <td>{{$categorias->cantidad_solicitudes}}</td>
                            </tr>
                        @endforeach
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