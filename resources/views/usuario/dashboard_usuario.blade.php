@extends('layouts.panel_admin')
<link href= "{{asset('css/app2.css')}}" rel="stylesheet">

@section('content')
    <div class="row" id="crud">
        <div class="col-xs-12">
            <h1 class="page-header"></h1>
        </div>
        <div class="col-sm-12">
            {{--<div class="align-content-left">--}}

            {{--<a href="#" class="btn btn-primary icon-ok" data-toggle="modal" data-target="#create">Crear Departamento</a>--}}
            {{--<br>--}}
            {{--<br>--}}
            {{--</div>--}}
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="card-header">Consumidores</div>
                        </div>
                        <div class="panel-body">
                            <div class="card-body">
                                <div class="table-responsive" >



                                    <table id="consumidores" class="table table-hover table-bordered  bbottom display no-wrap">
                                        <thead>
                                        <tr>
                                            <th  >Nombre</th>
                                            <th  >Usuario</th>
                                            <th  >Consumidor</th>


                                            {{--<th rowspan="2">Actions</th>--}}
                                        </tr>

                                        </thead>
                                        <tbody>
                                        @foreach($linked_providers as $usuario)

                                            <tr>
                                                <td >{{ $usuario->name }}</td>
                                                <td >{{ $usuario->nickname }}</td>
                                                @if($usuario->provider=='Facebook')
                                                    <td ><i class="icon-facebook"></i>{{ $usuario->provider }}</td>

                                                @endif

                                                {{--<td>--}}
                                                {{--<a class="btn btn-warning icon-fullscreen" href="{{ url('/admin/detalles_departamento/') . '/' . $departamento->departamento}}"> Detalles</a>--}}
                                                {{--<a class="btn btn-success icon-book btn-sm" href="{{ url('/buscar_nomina_trabajador/') . '/' . $trabajador->id }}">Nomina</a>--}}

                                                {{--<a class="btn btn-danger fa fa-trash-o" href="{{ url('/admin/destroy_departamento/') . '/' . $departamento->id}}">Eliminar</a>--}}

                                                {{--</td>--}}
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>



                                    <nav>
                                        <div class="col-md-5">
                                            {{@$linked_providers->links()}}
                                        </div>




                                    </nav>
                                    {{--@include('usuario/create')--}}
                                    {{--@include('gastos/edit')--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--<script src="{{ @asset('js/gastos.js') }}"></script>--}}
    </div>
    <script>

    </script>
    </div>
@endsection
{{--<script src="{{ elixir('js/gastos.js') }}"></script>--}}


