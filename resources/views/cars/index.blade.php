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
    </style>

    <div class="container1">
<table style="border-radius: 10px;"class="table table-dark table-bordered table-hover">
    <a class="btn btn-success" href="{{route("cars.create")}}">+ Voeg een auto toe</a>
<thead>
    <tr>
        <th scope="col">Merk</th>
        <th scope="col">Type</th>
        <th scope="col">Kenteken</th>
        <th scope="col">Prijs €</th>
        <th scope="col">Wijzigen</th>
        <th scope="col">Verwijderen &#x1F5D1</th>
    </tr>
    </thead>
    <tbody>
    @foreach($cars as $car)
    <tr>

        <td>{{$car->merk}}</td>
        <td>{{$car->type}}</td>
        <td>{{$car->license_plate}}</td>
        <td>{{$car->price}}</td>
        <td><a href="{{route('cars.edit',$car->id)}}" class="btn btn-success">Wijzig</a> </td>
        <td>
            <form action="{{route('cars.destroy',$car->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Verwijderen &#x1F5D1</button>

            </form>
        </td>
    </tr>
@endforeach
    </tbody>
</table>
    </div>
    @endsection