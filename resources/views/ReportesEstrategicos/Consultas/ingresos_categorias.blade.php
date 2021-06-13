@extends('layout')
@section('title')
    Ingresos por categoría de servicios
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
                                    <h2>Reportes estratégicos</h2>
                                    <p>Ingresos por categoría de servicios</p>
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
                        <p>Código : RPE01</p>
                        <p>Nombre : Ingresos por categoría de servicios</p>
                        <p>Descripción : Reporte de la comparación entre períodos de tiempo de los ingresos por categoría de servicios..</p>
                    </div>

                    <br><br>
                    <div class="col-10">
                    <h3 style="text-align:center;">Consulta</h3>
                    <p  style="text-align:center;">Ingrese las fechas de inicio y fin para cada período que desea comparar.</h6>
                    <br><br>
                        <form style="padding-left:10%;" method="GET" action="{{route('consultar_ingresos_categorias')}}">
                      
                            <h6>Período uno</h6>
                            <div class="form-example-int mg-t-15">
                                <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
                                <label for="fecha_inicio_uno">Fecha inicio</label>
                                <input type="date" class="form-control" name="fecha_inicio_uno" id="fecha_inicio_uno" value="{{old('fecha_inicio_uno')}}">
                                @foreach ($errors->get('fecha_inicio_uno') as $mensaje)
                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                @endforeach
                                </div>
                              
                                <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
                                <label for="fecha_final_uno">Fecha final</label>
                                <input type="date" class="form-control" name="fecha_final_uno" id="fecha_final_uno" value="{{old('fecha_final_uno')}}">
                                @foreach ($errors->get('fecha_final_uno') as $mensaje)
                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                @endforeach
                                </div>
                            </div>

                             <div clssName="col-2"> <br> <br><br></div>
                            <br>
                            <h6>Período dos</h6>
                            <div class="form-example-int mg-t-15">
                                <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
                                <label for="fecha_inicio_dos">Fecha inicio</label>
                                <input type="date" class="form-control" name="fecha_inicio_dos" id="fecha_inicio_dos" value="{{old('fecha_inicio_dos')}}">
                                @foreach ($errors->get('fecha_inicio_dos') as $mensaje)
                                        <small style="color:#B42020;">{{ $mensaje }}</small>
                                @endforeach
                                </div>
                              
                                <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
                                <label for="fecha_final_dos">Fecha final</label>
                                <input type="date" class="form-control" name="fecha_final_dos" id="fecha_final_dos" value="{{old('fecha_final_dos')}}">
                                @foreach ($errors->get('fecha_final_dos') as $mensaje)
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