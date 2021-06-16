<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Reporte de ganancias por categorias de servicio</title>
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
                                <p>Emisión: {{\App\Fecha::fechaTexto(date("Y-m-d"))}}</p>
                                <div>
                                    <h5>RPE02 - Ganancias por categorías comparadas por período</h5>
                                    <br>
                                        <p>Reporte de la comparación entre períodos de tiempo de las ganancias obtenidas por categoría de servicios</p>
                                        <p> <b>Del {{$inicio_uno_f}} al {{$final_uno_f}} <br> y {{$inicio_dos_f}} al {{$final_dos_f}}</b></p>
                                </div>
                                
                                <br><br>
                        
                                <div style="display:flex; flex-direction: column; align-items:center;">
                             
                                <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="normal-table-list mg-t-30">
                                  
                                    <span><b>Tabla de ganancias por categorías de servicios</b></span>
                                    <br><br>
                                    <table class="table table-striped" style="text-align:center;">
                                        <thead>
                                            <tr>
                                            <th scope="col">Categoría de servicio</th>
                                            <th scope="col">Ganancias {{$inicio_uno}} al {{$final_uno}}</th>
                                            <th scope="col">Ganancias {{$inicio_dos}} al {{$final_dos}}</th>
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
                                
                                
                             
                            </div>
                    
                        </div>
                    </div>
                </main>
</body>
</html>        