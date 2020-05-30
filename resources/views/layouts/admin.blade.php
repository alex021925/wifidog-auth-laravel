<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Tabares" >
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Portal </title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}"  rel="stylesheet">
{{--<script src="{{asset('js/jquery-2.0.0.min.js')}}"></script>--}}

<!-- Add custom CSS here -->
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    <link href="{{ asset('css/admin/estilo.css') }}"  rel="stylesheet">

    {{----}}
</head>

<body>
<header>
    <figure>
        <div class="logo col-md-2">

            <img src="{{asset('img/portal2.png')}}" width="180px" height="120px"  alt="" />
        </div>


    </figure>

</header>

<nav class="navbar navbar-fixed-top navbar-inverse col-md-11 " style="margin-left:60px; margin-top: -20px " role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--<a class="" href="index.html">Start Bootstrap</a>-->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">

                {{--<li class="nav-item dropdown">--}}
                {{--<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class=""></i>    {{ Auth::user()->name }} <b class="caret"></b></a>--}}
                {{--<ul class="dropdown-menu">--}}
                {{--<li><a href="#"><i class="icon-user"></i> Perfil</a></li>--}}
                {{--<li><a href="#"><i class="icon-envelope"></i> Alertas <span class="badge">7</span></a></li>--}}
                {{--<li><a href="#"><i class="icon-gear"></i> Settings</a></li>--}}
                {{--<li class="divider"></li>--}}

                {{--<li>--}}
                {{--<a class="dropdown-item" href="{{ route('login') }}"--}}
                {{--onclick="event.preventDefault();--}}
                {{--document.getElementById('logout-form').submit();">--}}
                {{--<i class="icon-power-off"></i>{{ __('Cerrar sesión') }}--}}
                {{--</a>--}}

                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                {{--@csrf--}}
                {{--</form>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</li>--}}
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>
<main class="py-4 cabecera" style="margin-left: 60px;position: relative">

    <div class="row col-md-11">



    </div>

    <!-- Controls -->

    {{--<img src="img/banner_part1.jpg" width="800" height="300" alt="" style="position: absolute" />--}}


    </div>
    {{--<img src="img/banner_part1.jpg" width="300" height="300" alt="" style="position: absolute" />--}}
    <br><br><br>

</main>
<div class="container">

    <div class="row section">
        <div class="col-lg-12">
            <h1></h1>
            {{--<p>This is a great starting point for yet another modern and stylish website. Here are some things to consider when working with this template:</p>--}}
            {{--<ul>--}}
            @yield('content')                {{--<li>Unique Fonts</li>--}}
            {{--<li>Attractive Colors</li>--}}
            {{--<li>Content Spacing for Legibility and Design</li>--}}
            {{--<li>Decent Pictures that Still Load Quickly (less than 400KB for example)</li>--}}
            {{--<li>Make the Pictures INFORMATIVE</li>--}}
            {{--<li>Custom Styling for the Captions</li>--}}
            {{--</ul>--}}
        </div>
    </div>

    <hr>

    {{--<footer class="footer">--}}
        {{--<div class="container-fluid px-lg-5">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-11 py-5">--}}
                    {{--<p class="modalidades">Otras modalidades de transporte</p>--}}
                    {{--<div id="base" class="row col-md-5 " >--}}
                        {{--<img src="{{asset('img/base.png')}}" width="150" alt="">--}}
                    {{--</div>--}}
                    {{--<br>--}}
                    {{--<br>--}}
                    {{--<hr>--}}
                    {{--<div class="row pie">--}}

                        {{--<div class="col-md-4 mb-md-0 mb-4">--}}
                            {{--<h5 class="footer-heading">Empresa</h5>--}}
                            {{--<ul class="list-unstyled">--}}
                                {{--<li><a href="#" class="py-1 d-block">Mision</a></li>--}}
                                {{--<li><a href="#" class="py-1 d-block">Noticias y Actualidad</a></li>--}}
                                {{--<li><a href="#" class="py-1 d-block">Videos Institucionales</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-8">--}}
                            {{--<div class="row justify-content-center">--}}
                                {{--<div class="col-md-12 col-lg-10">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-6 mb-md-0 mb-6">--}}
                                            {{--<h5 class="footer-heading">Soporte al cliente</h5>--}}
                                            {{--<ul class="list-unstyled">--}}
                                                {{--<li><a href="#" class="py-1 d-block">Preguntas frecuentes</a></li>--}}
                                                {{--<li><a href="#" class="py-1 d-block">Comprar en Europa sin IVA</a></li>--}}
                                                {{--<li><a href="#" class="py-1 d-block">Comercio Electrónico Seguro</a></li>--}}
                                                {{--<li><a href="#" class="py-1 d-block">Formas de Pago</a></li>--}}
                                                {{--<li><a href="#" class="py-1 d-block">Buscador Tiendas</a></li>--}}

                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 mb-md-0 mb-4">--}}
                                            {{--<h2 class="footer-heading">About</h2>--}}
                                            {{--<ul class="list-unstyled">--}}
                                            {{--<li><a href="#" class="py-1 d-block">Staff</a></li>--}}
                                            {{--<li><a href="#" class="py-1 d-block">Team</a></li>--}}
                                            {{--<li><a href="#" class="py-1 d-block">Careers</a></li>--}}
                                            {{--<li><a href="#" class="py-1 d-block">Blog</a></li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-6 mb-md-0 mb-6">--}}
                                            {{--<h5 class="footer-heading">Información de Interes</h5>--}}
                                            {{--<ul class="list-unstyled">--}}
                                                {{--<li><a href="#" class="py-1 d-block">Mercancia Que No Transporta Vía Curier</a></li>--}}
                                                {{--<li><a href="#" class="py-1 d-block">Mercancia Que No Se Asegura</a></li>--}}
                                                {{--<li><a href="#" class="py-1 d-block">TCL</a></li>--}}
                                                {{--<li><a href="#" class="py-1 d-block">Servicios Logisticos  Empresas Casilleros</a></li>--}}


                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="row mt-md-5">--}}
                        {{--<div class="col-md-12">--}}
                            {{--<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->--}}
                                {{--Alastinas Curier & Cargo -<script>document.write(new Date().getFullYear());</script> Avenida de la Industria 38 - Nave D8(28823)Coslada - Madrid - España Telefono(34)914285478 Todos los derechos Reservados--}}
                                {{--<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!--<div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">-->--}}
                {{--<!--<h2 class="footer-heading">Request A Quote</h2>-->--}}
                {{--<!--<form action="#" class="contact-form">-->--}}
                {{--<!--<div class="form-group">-->--}}
                {{--<!--<input type="text" class="form-control" placeholder="Your Name">-->--}}
                {{--<!--</div>-->--}}
                {{--<!--<div class="form-group">-->--}}
                {{--<!--<input type="text" class="form-control" placeholder="Your Email">-->--}}
                {{--<!--</div>-->--}}
                {{--<!--<div class="form-group">-->--}}
                {{--<!--<input type="text" class="form-control" placeholder="Subject">-->--}}
                {{--<!--</div>-->--}}
                {{--<!--<div class="form-group">-->--}}
                {{--<!--<textarea name="" id="" cols="30" rows="3" class="form-control" placeholder="Message"></textarea>-->--}}
                {{--<!--</div>-->--}}
                {{--<!--<div class="form-group">-->--}}
                {{--<!--<button type="submit" class="form-control submit px-3">Send</button>-->--}}
                {{--<!--</div>-->--}}
                {{--<!--</form>-->--}}
                {{--<!--</div>-->--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</footer>--}}


</div><!-- /.container -->

<!-- Bootstrap core JavaScript -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Make sure to add jQuery - download the most recent version at http://jquery.com/ -->

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>