@extends('layouts.app')

@section('content')

    <style>
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
        input {
            text-align: center;
        }

    </style>

    <div class="container1">
        <div class="row d-flex justify-content-center">
            <form class="form-inline" method="GET" action={{route('showroom.index')}}>

                @csrf
                <input id="birth" type="date" class="form-control " name="start_date"  required autocomplete="birth">

                <input id="birth" type="date" class="form-control" name="end_date" required autocomplete="birth">

                <button type="submit" class="btn btn-success">Zoeken</button>

            </form>
        </div>
{{--        End datepicker--}}
        <div class="row">
        @foreach($cars as $car)

            <div class="col order-last">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $car->url}}" class="card-img-top">
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
