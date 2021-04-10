@extends('layouts.app')

@section('content')

    <style>
        .card {
            border-radius: 18px;
            background: white;
            box-shadow: 5px 5px 5px rgba(0,0,0,0.5);
            margin: 9px;

        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 5px 5px 15px rgba(0,0,0,0.6);
        }
        .card {
        transition: 0.5s ease;
            cursor: pointer;
        }

        .container1{
            padding:60px;
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <div class="container1">
        <div class="row">
            @foreach($showroom as $car)

            <div class="col order-last">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('storage/'. $car->image)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$car->merk}}</h5>
                        <p class="card-text">{{$car->type}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Kenteken: {{$car->license_plate}}</li>
                        <li class="list-group-item">Prijs per dag: €{{$car->price}},00,-</li>
                    </ul>
                    <div class="card-body">
                        @guest
                            @if (Route::has('login'))
                                <a href="{{ route('login') }}" class="btn btn-success">Inloggen &rarr;</a>
                            @endif
                        @else
                        <a href="{{route('rent.index', $car->id)}}" class="btn btn-outline-success col text-center">Reserveren &rarr;</a>
                        @endguest
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection




{{--{{$car->license_plate}}--}}
