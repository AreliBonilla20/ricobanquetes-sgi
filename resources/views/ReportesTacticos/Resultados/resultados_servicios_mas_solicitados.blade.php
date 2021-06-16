@extends('layout')
@section('title')
    Resultados de servicios más solicitados
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
                                    <p>Servicios más solicitados</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                        <div class="breadcomb-report">
                                    <form action="{{route('reporte_servicios_mas_solicitados')}}" method="POST">
                                        @csrf
                                        <input id="url_grafico" name="url_grafico" type="text" hidden>
                                        <input name="fecha_inicio" type="text" value="{{$fecha_i}}" hidden>
                                        <input name="fecha_final" type="text" value="{{$fecha_f}}" hidden>
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
                        <p>Código : RPT04</p>
                        <p>Nombre : Servicios más solicitados</p>
                        <p>Descripción : Reporte de los 3 servicios más solicitados por rango de tiempo.</p>
                        <p>Período comprendido entre {{$inicio}} al {{$final}}</p>
            
                </div>
                
              
                <br><br>
                <div style="display:flex; flex-direction: column; align-items:center;">
                <h4>SERVICIOS MÁS SOLICITADOS</h4>
                   
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                    <span>Tabla con los 3 servicios más solicitados</span>
                        <table class="table table-striped" style="text-align:center;">
                        <thead>
                            <tr>
                            <th scope="col">Servicios</th>
                            <th scope="col">Cantidad de solicitudes</th>
                            </tr>
                        </thead>
                        <tbody>
                       @foreach($servicios_mas_solicitados as $servicios)
                            <tr>
                                <td>{{$servicios->nombre_servicio}}</td>
                                <td>{{$servicios->cantidad_solicitudes}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        </table>
                       
                    </div>
                    </div>
                </div>
                <div id="grafico" style="width: 900px; height: 500px; padding:15%" hidden></div>
                <div id="grafico_imagen" style="width: 900px; height: 500px;" hidden></div>
               
                
                <br><br><br>
             
            </div>
    
        </div>
        
    </div>
</div>
</div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    var cont = 0
    function random_color(){
        var randomColor = Math.floor(Math.random()*16777215).toString(16);
        return randomColor;
    }

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Servicio", "Cantidad Empleados", { role: "style" } ],
        @foreach($servicios_mas_solicitados as $servicios)
        ["{{$servicios->nombre_servicio}}", {{$servicios->cantidad_solicitudes}}, random_color()],
        @endforeach
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "SERVICIOS MÁS SOLICITADOS",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("grafico"));
      var imagen_grafico = document.getElementById('grafico_imagen');               //De la imagen generada a partir del grafico

        // Wait for the chart to finish drawing before calling the getImageURI() method.
        google.visualization.events.addListener(chart, 'ready', function () {
        imagen_grafico.innerHTML = '<img src="' + chart.getImageURI() + '">';
        document.getElementById('url_grafico').value = chart.getImageURI();
      });
      chart.draw(view, options);
  }
  </script>




@endsection