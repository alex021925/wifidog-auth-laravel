@extends('layouts.app')

@section('content')
    <div class="container contenedor" >
        <div class="row justify-content-center">


            @if ($password_login['enabled'])


                <div class="login" style="margin-left: 0px;border:solid 2px #0072bc;width: 350px;text-align: center;background-color: transparent">
                    <img  src="{{asset('img/wifigratis.png')}}" align="center" width="60px">
                    <h5 class="heading">Autenticarse </h5>

                    <form method="POST" action="{{ route('login') }}" style="padding: 20px 20px 20px 20px ">
                        @csrf
                        <div class="form-group">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Correo Electrónico" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control" placeholder="Contraseña" name="password">
                            {{--<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

                        </div>
                        <div class="form-group pregunta1">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">

                                    ¿Olvidaste tu contraseña ?
                                </a>
                            @endif
                        </div>

                        <div class="form-group enviar">
                            <button type="submit" class="form-control submit px-3 btn-primary enviar">{{'ACCEDER'}}</button>
                        </div>

                        {{--<div class="form-group enviar">--}}
                        {{--<a style="text-align: center" class="form-control btn-primary "><i class="icon-facebook"></i>{{'  Facebook'}}</a>--}}
                        {{--</div>--}}
                        <div class="form-group pregunta">
                            @if (Route::has('register'))
                                <a class="nav-link" href="{{ route('register') }}"> ¿Aún no tienes cuenta con nosotros?</a>
                            @endif



                        </div>
                        <div class="form-group enviar">
                            <button type="submit" class="form-control submit px-3 btn-default ">REGÍSTRATE</button>
                        </div>



                    </form>

                    @if ($social_login['enabled'])
                        <div class="card">

                            <div class="card-body text-center" >
                                @if (in_array('wechat_web', $social_login['providers']))
                                    <script src="https://res.wx.qq.com/connect/zh_CN/htmledition/js/wxLogin.js"></script>
                                    <div class="card-text" id="login_container"></div>
                                    <script>
                                      var obj = new WxLogin({
                                        self_redirect: false,
                                        id: "login_container",
                                        appid: "{{ config('services.wechat_web.client_id') }}",
                                        scope: "snsapi_login",
                                        redirect_uri: "{{ config('services.wechat_web.redirect') }}",
                                        state: "{{ csrf_token() }}",
                                        style: "",
                                        href: ""
                                      });
                                    </script>
                                    @php
                                        unset($social_login['providers'][array_search('wechat_web', $social_login['providers'])]);
                                    @endphp
                                @endif

                                <ul class="nav justify-content-center" >
                                    @foreach ($social_login['providers'] as $provider)
                                        <li class="nav-item mr-2" >
                                            <a style="width: 100px;text-align: center" class="nav-link btn {{ $errors->has($provider) ? 'btn-danger' : 'btn-primary' }}" href="/login/{{ strtolower(str_replace('_', '-', $provider)) }}" role="button">{{ __($provider) }}</a>
                                        </li>

                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
        </div>
        @endif

    </div>
    </div>
    </div>
@endsection
