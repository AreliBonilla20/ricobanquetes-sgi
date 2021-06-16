<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Ricobanquetes </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
        ============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Fonts
        ============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- Bootstrap CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <!-- owl.carousel CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
        <!-- meanmenu CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/meanmenu/meanmenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/wave/button.css') }}">
        <!-- animate CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!-- normalize CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
        <!-- mCustomScrollbar CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
        <!-- jvectormap CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/jvectormap/jquery-jvectormap-2.0.3.css') }}">
        <!-- notika icon CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/notika-custom-icon.css') }}">
        <!-- wave CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/wave/waves.min.css') }}">
        <!-- main CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <!-- style CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('style.css') }}">
        <!-- responsive CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <!-- modernizr JS
        ============================================ -->
        <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Start Header Top Area -->
        <div class="header-top-area" style="background:#03182b;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"></div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" >
                        <div class="header-top-menu">
                            <ul class="nav navbar-nav notika-top-nav">
                                 <!-- Authentication Links -->
                                 @guest
                                 <li class="nav-item">
                                     <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                 </li>
                                 @else
                                 <li style="background: black," onmouseover="this.style.background=' #2d2e2e';" onmouseout="this.style.background=' #2d2e2e';" class="nav-item dropdown">
                                     <a style="font-size: 15px;" onmouseover="this.style.background=' #2d2e2e';" onmouseout="this.style.background=' #2d2e2e';" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                         {{ Auth::user()->name }} <span class="caret"></span>
                                     </a>
                                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
 
                                         @can('usuario')
 
                                         <a  style="font-size: 15px; color: #908C8C; padding:5%; padding-left:5%;"; class="dropdown-item" href = "{{ route('usuarios') }}">
                                             <i class="notika-icon notika-support"></i> Usuarios
                                         </a>
                                         <br>
                                         @endcan
                                         @can('roles')
 
                                         <a style="font-size: 15px; color: #908C8C; padding:5%; padding-left:5%;" class="dropdown-item" href="{{ route('roles') }}">
                                             <i class="notika-icon notika-menus"></i> {{ __('Roles') }}
                                         </a>
                                         <br>
                                         <a style="font-size: 15px; color: #908C8C; padding:5%; padding-left:5%;" class="dropdown-item" href="{{ route('sitio_index') }}">
                                             <i class="notika-icon notika-search"></i> {{ __('Sitio web') }}
                                         </a>
 
                                         @endcan
                                         <hr>
                                         <a style="font-size: 15px; color: #908C8C; padding:5%; padding-left:5%;" class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                             <i class="notika-icon notika-left-arrow"></i> Cerrar sesión
                                         </a>
 
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             @csrf
                                         </form>
                                     </div>
                                 </li>
                                 @endguest
                                    
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a href="{{url('/home')}}">Inicio</a>
                                </li>
                                <li><a data-toggle="collapse" data-target="#reportes_estrategicos" href="#">Reportes estratégicos</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="{{ route('ingresos_categorias') }}">Reporte ingresos por categoría de servicio</a></li>
                                        <li><a href="{{ route('ganancias_categorias') }}">Reporte ganancias por categoría de servicio</a></li>
                                        <li><a href="{{ route('ganancias_totales') }}">Reporte ganancias totales</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#reportes_tacticos" href="#">Reportes tácticos</a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="{{ route('categorias_servicios') }}">Reporte de demanda de servicios por categoría</a></li>
                                        <li><a href="{{ route('solicitudes_servicios') }}">Reporte de demanda de servicios y personal</a></li>
                                        <li><a href="{{ route('categorias_empleados') }}">Reporte de demanda de categoría de empleados</a></li>
                                        <li><a href="{{ route('servicios_mas_solicitados') }}">Reporte de los servicios más solicitados</a></li>
                                        <li><a href="{{ route('categorias_empleados_mas_solicitadas') }}">Reporte de las categorias de servicio mas solicitadas</a></li>
                                    </ul>
                                </li>
                              
                            </ul>    
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Contenido principal -->
<div class="invoice-img" style="background: #ffffff;" >
<img src="img/post/logo2.png" width="20%" alt="" />
</div>
<br><br>
<div class="contact-area" style="text-align: center;">
<div class="container">




<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    <div class="contact-list">
    <div class="contact-win" style="display:flex; flex-direction: row; justify-content:center;">
            <div class="contact-img">
                <img src="img/reporte.jpg" alt="" width="70px"/>
            </div>
        </div>
        <div class="contact-ctn">

            <p>Reporte de las categorías de servicios y la demanda que poseen por lapsos de tiempo.</p>
        </div>
        <a href="{{ route('categorias_servicios') }}"><button style="color:white;" class="btn notika-btn-indigo btn-reco-mg btn-button-mg">Consultar</button></a>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    <div class="contact-list sm-res-mg-t-30">
        <div class="contact-win" style="display:flex; flex-direction: row; justify-content:center;">
            <div class="contact-img">
            <img src="{{ asset('img/reporte.jpg') }}" alt="" width="70px"/>
            </div>
        </div>
        <div class="contact-ctn">
     
            <p>Reporte de las solicitudes de servicios y personal asignado por período de tiempo.</p>
        </div>
        <a href="{{ route('solicitudes_servicios') }}"><button style="color:white;" class="btn notika-btn-green btn-reco-mg btn-button-mg">Consultar</button></a>
    </div>
</div>


<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    <div class="contact-list sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
        <div class="contact-win" style="display:flex; flex-direction: row; justify-content:center;">
            <div class="contact-img">
                <img src="{{ asset('img/reporte.jpg') }}" alt="" width="75px"/>
            </div>

        </div>
        <div class="contact-ctn">
  
            <p>Reporte de las categorías de empleados y su demanda por rangos de tiempo.</p>
        </div>
        <a href="{{ route('categorias_empleados') }}"><button style="color:white;" class="btn notika-btn-deeporange">Consultar</button></a>
    </div>
</div>

<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    <div class="contact-list sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
        <div class="contact-win" style="display:flex; flex-direction: row; justify-content:center;">
            <div class="contact-img">
            <img src="{{ asset('img/reporte.jpg') }}" alt="" width="80px"/>
            </div>

        </div>
        <div class="contact-ctn">
     
            <p>Reporte de los servicios más solicitados. </p>
            <br>
        </div>
        <a href="{{ route('servicios_mas_solicitados') }}"><button style="color:white;" class="btn notika-btn-cyan">Consultar</button></a>
    </div>
</div>

</div>
<br>

<div class="row">

<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    <div class="contact-list sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
        <div class="contact-win" style="display:flex; flex-direction: row; justify-content:center;">
            <div class="contact-img">
                <img src="{{ asset('img/reporte.jpg') }}" alt="" width="70px"/>
            </div>

        </div>
        <div class="contact-ctn">
        <p>Reporte de las categorías de empleados más solicitadas .</p>
        </div>
        <a href="{{ route('categorias_empleados_mas_solicitadas') }}"><button style="color:white;" class="btn notika-btn-lightblue">Consultar</button></a>
    </div>
</div>

<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    <div class="contact-list">
        <div class="contact-win" style="display:flex; flex-direction: row; justify-content:center;">
            <div class="contact-img">
                <img src="img/reporte.jpg" alt="" width="70px"/>
            </div>
        </div>
        <div class="contact-ctn">
            <p>Reporte de ingresos por categoría de servicio.</p>
        </div>
        <a href="{{ route('ingresos_categorias') }}"><button style="color:white;" class="btn notika-btn-teal">Consultar</button></a>
    </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    <div class="contact-list sm-res-mg-t-30">
        <div class="contact-win" style="display:flex; flex-direction: row; justify-content:center;">
            <div class="contact-img">
                <img src="{{ asset('img/reporte.jpg') }}" alt="" width="70px"/>
            </div>
        </div>
        <div class="contact-ctn">
            <p>Reporte de ganancias por categoría de servicio.</p>
        </div>
        <a href="{{ route('ganancias_categorias') }}"><button style="color:white;" class="btn notika-btn-orange">Consultar</button></a>
    </div>
</div>

<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    <div class="contact-list sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
        <div class="contact-win" style="display:flex; flex-direction: row; justify-content:center;">
            <div class="contact-img">
                <img src="{{ asset('img/reporte.jpg') }}" alt="" width="70px"/>
            </div>

        </div>
        <div class="contact-ctn">
        <p>Reporte de ganancias totales.</p>
        <br>
        </div>
        <a href="{{ route('ganancias_totales') }}"><button style="color:white;" class="btn notika-btn-lightblue">Consultar</button></a>
    </div>
</div>



</div>
<br>

</div>
</div>

<!-- End Sale Statistic area-->
<!-- Start Email Statistic area-->

<!-- End Email Statistic area-->
<!-- Start Realtime sts area-->
<!-- End Realtime sts area-->
<!-- Start Footer area-->
<br><br>
<div class="footer-copyright-area" style="background: #03182b;">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="footer-copy-right">
        <p>Derechos reservados © {{date("Y")}}
            <a href="{{ url('home') }}">. Ricobanquetes S.A de C.V</a>.</p>
        </div>
    </div>
</div>
</div>
</div>
<!-- End Footer area-->
<!-- jquery
============================================ -->
<script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- bootstrap JS
============================================ -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- wow JS
============================================ -->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!-- price-slider JS
============================================ -->
<script src="{{ asset('js/jquery-price-slider.js') }}"></script>
<!-- owl.carousel JS
============================================ -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- scrollUp JS
============================================ -->
<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
<!-- meanmenu JS
============================================ -->
<script src="{{ asset('js/meanmenu/jquery.meanmenu.js') }}"></script>
<!-- counterup JS
============================================ -->
<script src="{{ asset('js/counterup/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/counterup/waypoints.min.js') }}"></script>
<script src="{{ asset('js/counterup/counterup-active.js') }}"></script>
<!-- mCustomScrollbar JS
============================================ -->
<script src="{{ asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!-- jvectormap JS
============================================ -->
<script src="{{ asset('js/jvectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('js/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('js/jvectormap/jvectormap-active.js') }}"></script>
<!-- sparkline JS
============================================ -->
<script src="{{ asset('js/sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('js/sparkline/sparkline-active.j') }}"></script>
<!-- sparkline JS
============================================ -->
<script src="{{ asset('js/flot/jquery.flot.js') }}"></script>
<script src="{{ asset('js/flot/jquery.flot.resize.js') }}"></script>
<script src="{{ asset('js/flot/curvedLines.js') }}"></script>
<script src="{{ asset('js/flot/flot-active.js') }}"></script>
<!-- knob JS
============================================ -->
<script src="{{ asset('js/knob/jquery.knob.js') }}"></script>
<script src="{{ asset('js/knob/jquery.appear.js') }}"></script>
<script src="{{ asset('js/knob/knob-active.js') }}"></script>
<!--  wave JS
============================================ -->
<script src="{{ asset('js/wave/waves.min.js') }}"></script>
<script src="{{ asset('js/wave/wave-active.js') }}"></script>
<!--  todo JS
============================================ -->
<script src="{{ asset('js/todo/jquery.todo.js') }}"></script>
<!-- plugins JS
============================================ -->
<script src="{{ asset('js/plugins.js') }}"></script>
<!--  Chat JS
============================================ -->
<script src="{{ asset('js/chat/moment.min.js') }}"></script>
<script src="{{ asset('js/chat/jquery.chat.js') }}"></script>
<!-- main JS
============================================ -->
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
