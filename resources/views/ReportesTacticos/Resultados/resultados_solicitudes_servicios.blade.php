@extends('layout')
@section('title')
    Resultados solicitudes de servicio y personal
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
                                    <p>Solicitudes de servicios y personal</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
								<div class="breadcomb-report">
                                    <form action="{{route('reporte_solicitudes_servicios')}}" method="POST">
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
                        <p>Código : RPT02</p>
                        <p>Nombre : Solicitudes de servicios y personal</p>
                        <p>Descripción : Reporte de las solicitudes de servicios y personal asignado por rangos de tiempo.</p>
            
                </div>
                
              
                <br><br>
                <div style="display:flex; flex-direction: column; align-items:center;">
                <h4>ESTUDIANTES POR GÉNERO</h4>
                    <div id="grafico_genero" style="width: 900px; height: 500px;"></div>
                    <div id="grafico_genero_imagen" style="width: 900px; height: 500px;" hidden></div>
                    <h4>Tabla de estudiantes por género</h4>
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        
                        <table class="table table-striped" style="text-align:center;">
                        <thead>
                            <tr>
                            <th scope="col">Género</th>
                            <th scope="col">Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                       
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        
                        </tbody>
                        </table>
                    </div>
                </div>
                </div>
                
                <br><br><br>
             
            </div>
    
        </div>
        
    </div>
</div>
</div>





@endsection