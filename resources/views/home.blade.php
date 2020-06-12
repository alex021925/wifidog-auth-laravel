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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
