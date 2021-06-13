@extends('layout')
@section('title')
    Servicios más solicitados
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
                                    <h2>Reportes tácticos</h2>
                                    <p>Servicios más solicitados</p>
                                </div>
                            </div>
                        </div>
                      

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="data-table-area">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="breadcomb-wp">
                        <div class="breadcomb-icon">
                            <i class="notika-icon notika-edit"></i>
                        </div>
                       
                    </div> <br>
                    
                  
                    <div class="col-12" style="text-align:center;">
                        <h3>Reporte</h3>
                        <p>Código : RPT04</p>
                        <p>Nombre : Servicios más solicitados</p>
                        <p>Descripción : Reporte de los 3 servicios más solicitados por rangos de tiempo.</p>
                    </div>

                    <br><br>
                    <div class="col-10">
                    <h3 style="text-align:center;">Consulta</h3>
                    <p  style="text-align:center;">Ingrese las fechas de inicio y fin del período que desea consultar</h6>
                    <br><br>
                        <form style="padding-left:10%;" method="GET" action="{{route('consultar_servicios_mas_solicitados')}}">
                      

                            <div class="form-example-int mg-t-15">
                                <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
                                <label for="fecha_inicio">Fecha inicio</label>
                                <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="{{old('fecha_inicio')}}">
                                @foreach ($errors->get('fecha_inicio') as $mensaje)
                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                @endforeach
                                </div>
                              
                                <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
                                <label for="fecha_final">Fecha final</label>
                                <input type="date" class="form-control" name="fecha_final" id="fecha_final" value="{{old('fecha_final')}}">
                                @foreach ($errors->get('fecha_final') as $mensaje)
                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                @endforeach
                                </div>
                            </div>
                            <br>
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-success notika-btn-success"> <i class="fa fa-search"></i> </button>
                            </span>
                        </form>
                        <br>
   
                       
                      
                    </div>

                    <br>
                    

                    <br><br>    

                   

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
