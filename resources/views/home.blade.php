@extends('layouts.app')

@section('content')

{{--    Inline style--}}
    <style>
        .container1 {
            padding: 200px;
        }
        .card{
            border-radius: 18px;
            box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
            transition: 0.5s ease;
            cursor: pointer;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 5px 5px 15px rgba(0,0,0,0.6);
        }
        .btn{
            border-radius: 18px;
            box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
            transition: 0.5s ease;
            cursor: pointer;
        }
        .btn:hover {
            transform: scale(1.05);
            box-shadow: 5px 5px 15px rgba(0,0,0,0.6);
        }
    </style>

<div class="container1">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card alert alert-success">
                <div class="card-header">{{ __('Gefeliciteerd!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Je bent ingelogd!') }}
                        <a href="/welcome" class="btn btn-success">Ga naar Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
