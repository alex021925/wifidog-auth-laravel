@extends('layouts.admin')

@section('content')
    <div class="col-md-3 py-md-5 py-4  pl-lg-3" style=" border:2px solid #0072bc;float: right;text-align: center ;position:relative;background-color: white;">
        <img  src="{{asset('img/wifigratis.png')}}" width="60px">
        <h5 class="heading" >Panel de Administración </h5>

        <form method="POST" action="{{ url('/admin/login') }}" style="background-color: white" >
            @csrf
            <div class="form-group">
                <input id="email" type="email" class="form-control" name="email" placeholder="Correo Electrónico" value="{{ old('email') }}" required autofocus>

            </div>
            <div class="form-group">
                {{--<input id="password" type="password" class="form-control" placeholder="Contraseña" name="password">--}}
                <input id="password" type="password" class="form-control" name="password" required>

            </div>
            <div class="form-group pregunta1">
                {{--@if (Route::has('password.request'))--}}
                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}

                        {{--¿Olvidaste tu contraseña ?--}}
                    {{--</a>--}}
                {{--@endif--}}
            </div>

            <div class="form-group enviar">
                <button type="submit" class="form-control submit px-3 btn-primary enviar">{{'ACCEDER'}}</button>
            </div>

        </form>
    </div>
@endsection
