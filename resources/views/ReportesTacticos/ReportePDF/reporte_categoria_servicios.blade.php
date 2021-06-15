<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Reporte de categorías de servicios</title>
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
                    <p>Ricobanquetes S.A de C.V</p> 
                </div>
                <hr>
            </header>
                <main>                
                    <div style="display:flex; flex-direction: column; align-items:center; text-align:center;" >
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
                                <br><br><br>
                                   
                                <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="normal-table-list mg-t-30">
                                        <br><br><br>
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
                                       
                                        <img alt="" src="{{$url_grafico}}" >
                                    </div>
                                </div>
                                </div>
                                
                                
                                <br><br><br>
                             
                            </div>
                    
                        </div>
                    </div>
                </main>
</body>
</html>                