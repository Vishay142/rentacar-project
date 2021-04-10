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
        <table style="border-radius: 10px;"class="table table-dark table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Ophalen</th>
                                <th scope="col">Inleveren</th>
                                <th scope="col">Naam</th>
                                <th scope="col">Telefoonnummer</th>
                                <th scope="col">Merk</th>
                                <th scope="col">Kenteken</th>
                                <th scope="col">Status</th>
                                <th scope="col">Verwijderen</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($data as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->start_date}}</td>
                                    <td>{{$row->end_date}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->phone_number}}</td>
                                    <td>{{$row->merk}}</td>
                                    <td>{{$row->license_plate}}</td>
                                    <td>Gereed</td>

                                    <td>
                                        <form action="{{route('rented.destroy',$row->id)}}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" onclick="return confirm('Weet je zeker dat je de geselecteerde auto wilt verwijderen?')"
                                                    class="btn btn-danger">Verwijderen &#x1F5D1</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{--Hier eindigt de table--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--Hier eindigt de container--}}
@endsection
