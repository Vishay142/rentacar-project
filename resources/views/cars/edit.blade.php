@extends('layouts.app')

@section('content')
    <style>
        .container1 {
            padding: 60px;
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
        .col-md-6{
            padding: 7px;
        }
    </style>

    <div class="container1">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card text-light bg-dark">

                    <div class="card-body">
                        <form method="POST" action={{route('cars.update', $car->id)}}>
                            @method('PUT')
                            @csrf

                            <div class="form-group row">
                                <label for="merk" class="col-md-4 col-form-label text-md-right">{{ __('Merk') }}</label>
                                <div class="col-md-6">
                                    <input id="merk" type="text"  value="{{$car->merk}}" class="form-control @error('name') is-invalid @enderror" name="merk"  required autocomplete="merk" autofocus>
                                </div>
                                <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
                                <div class="col-md-6">
                                    <input id="type" type="text"  value="{{$car->type}}" class="form-control @error('type') is-invalid @enderror" name="type"  required autocomplete="type">
                                </div>
                                <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Kenteken') }}</label>
                                <div class="col-md-6">
                                    <input id="license_plate" type="text"  value="{{$car->license_plate}}" class="form-control @error('name') is-invalid @enderror" name="license_plate"  required autocomplete="license_plate" autofocus>
                                </div>
                                <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Prijs') }}</label>
                                <div class="col-md-6">
                                    <input id="price" type="text"  value="{{$car->price}}" class="form-control @error('price') is-invalid @enderror" name="price"  required autocomplete="price" autofocus>
                                </div>
                                <label for="price" class="col-md-4 col-form-label text-md-right">Afbeelding 600x300</label>
                                <div class="col-md-6">
                                    <input id="price" type="file"  value="{{$car->image}}" class="form-control @error('price') is-invalid @enderror" name="price"  required autocomplete="price" autofocus>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-success">Wijzigen</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
