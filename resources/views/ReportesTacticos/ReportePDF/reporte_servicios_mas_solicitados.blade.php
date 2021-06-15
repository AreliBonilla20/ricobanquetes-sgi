<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Reporte de los 3 servicios más solicitados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    

</head>
<style>
    *{
        font-size: 13px;
        font-family: Arial, Helvetica, sans-serif;
    }

</style>
<body style="font-family:Arial, Helvetica, sans-serif;">
            <header style="padding:5%; text-align:justify;" >
                <div style="text-align:center; line-height: 0.1;">
                <img src="img/post/logo2.png" width="20%" alt="" />
                    <h3>Ricobanquetes S.A de C.V</h3> 
                </div>
                <hr>
            </header>
                <main>                
                    <div style="display:flex; flex-direction: column; align-items:center; text-align:center;" >
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-element-list" >
                                <p>Emisión: {{$fecha_actual}}</p>
                                <div>
                                    <h5>RPT04 - Servicios más solicitados</h5>
                                    <br>
                                        <p>Reporte de los 3 servicios más solicitados por rango de tiempo </p>
                                        <p> <b> Período comprendido entre {{$inicio}} al {{$final}} </b></p>
                                </div>
                                
                                <br><br>
                        
                                <div style="display:flex; flex-direction: column; align-items:center;">
                             
                                <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="normal-table-list mg-t-30">
                                  
                                    <span>Tabla las 3 categorías de servicios más solicitados</span>
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
                                       
                                     <br>
                                    <span>Gráfico de las 3 categorías de servicios más solicitados</span>
                                  <br><br><br>
                                      
                                        <img alt="" src="{{$url_grafico}}" width="70%">
                                    </div>
                                </div>
                                </div>
                                
                                
                             
                            </div>
                    
                        </div>
                    </div>
                </main>
</body>
</html>   