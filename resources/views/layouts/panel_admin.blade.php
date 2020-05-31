<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portal Admin</title>
    {{--<link href="{{asset('css/bootstrap34.css')}}" rel="stylesheet">--}}

    <link href="{{asset('css/admin/bootstrap3.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/admin/metisMenu.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/admin/sb-admin-3.css')}}" rel="stylesheet">


    <!-- Bootstrap Core CSS -->

    <link href="{{asset('css/datatables/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/datatables/dataTables.responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">

    <script src="{{asset('js/admin/jquery-2.0.0.min.js')}}"></script>
{{--<script src="{{asset('js/jquery-2.0.0.min.js')}}"></script>--}}
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <![endif]-->

</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Panel Administracion</a>
        </div>
        <!-- /.navbar-header -->

        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav   navbar-nav  side-nav" >

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-folder-open"></i> Consumidores<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/admin/consumidores')}}"> Listado de Usuarios</a></li>

                        </ul>
                    </li>

                    {{--<li class="dropdown">--}}
                        {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-folder-open"></i> Departamento <b class="caret"></b></a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li><a href="{{ url('/admin/departamentos')}}"> Listado departamentos</a></li>--}}

                        {{--</ul>--}}
                    {{--</li>--}}
                    {{--<li><a href="{{ url('/admin/secciones') }}"><i class="icon-bar-chart"></i> Secciones</a></li>--}}
                    {{--<li><a href=""><i class="icon-font"></i> Typography</a></li>--}}

                    {{--<li><a href=""><i class="icon-wrench"></i> Otros Gastos</a></li>--}}
                    {{--<li class="active"><a href=""><i class="icon-file-alt"></i>Trabajadores</a></li>--}}

                </ul>

            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <ul class="nav navbar-nav  navbar-right">
            <li class="dropdown alerts-dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="icon-user"></i>    {{ Auth::guard('admins')->user()->name }} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href=""><i class="icon-user"></i> Perfil</a></li>
                    <li class="divider"></li>

                    <li>
                        <a class="dropdown-item" href="{{ route('login') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="icon-power-off"></i>{{ __('Salir') }}
                        </a>

                        <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>            </li>

        </ul>

        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
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
                </div>           {{--<li>Make the Pictures INFORMATIVE</li>--}}
                {{--<li>Custom Styling for the Captions</li>--}}
                {{--</ul>--}}
            </div>
        </div>



    </div>    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<script>
  $(document).ready(function() {
    $('#dataTables-example').DataTable({
      responsive: true
    });
  });
</script>
<!-- jQuery -->
<script src="{{asset('js/admin/jquery2.min.js')}}"></script>

<script src="{{asset('js/admin/bootstrap2.min.js')}}"></script>
<!--datatables js -->
{{--<script src="{{asset('js/tablesorter/jquery.dataTables.min.js')}}"></script>--}}

{{--<script src="{{asset('js/tablesorter/dataTables.bootstrap.min.js')}}"></script>--}}
{{--<script src="{{asset('js/tablesorter/dataTables.responsive.js')}}"></script>--}}
<!-- end datatables js -->

<!-- Custom scripts for all pages-->
<script src="{{asset('js/sb-admin-2.js')}}"></script>
<script src="{{asset('js/metisMenu.js')}}"></script>

<!-- Demo scripts for this page-->


</body>

</html>
