@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Seta') }}</div>

                <div class="card-body">
                    @if (!empty($msg))
                        <div class="alert alert-info" role="alert">
                            {{ __($msg1) }}
                        </div>
                    @endif

                    @if (!empty($wifidog_uri))
                    <a class="btn btn-success" href={{ $wifidog_uri }}>start internet</a>
                    @endif
                        <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-4 thumb" align="center">
                        <a href="{{url('google')}}" target="_blank">
                       <img src="{{asset('img/google.png')}}" height="120px"></a>

                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-4 thumb" align="center">
                            <a href="{{url('facebook')}}" target="_blank">
                                <img src="{{asset('img/facebook.png')}}" height="120px"></a>

                        </div>
                            <div class="col-lg-3 col-md-4 col-sm-4 thumb" align="center">
                                <a href="{{url('gmail')}}" target="_blank">
                                    <img src="{{asset('img/gmail.jpg')}}" height="120px" ></a>

                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
