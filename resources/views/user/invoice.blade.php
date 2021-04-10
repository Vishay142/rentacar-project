@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-14">
                <div class="card">
                    {{--Hier begint de table--}}
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col">Naam</th>
                            <th scope="col">Adres</th>
                            <th scope="col">Postcode</th>
                            <th scope="col">Plaats</th>
                            <th scope="col">Telefoonnummer</th>
                            <th scope="col">Kenteken</th>
                            <th scope="col">Merk</th>
                            <th scope="col">Type</th>
                            <th scope="col">Gereserveerd</th>
{{--                            <th scope="col">Aantal dagen</th>--}}
                            <th scope="col">Prijs per dag</th>
{{--                            <th scope="col">Totale Prijs Exc. BTW</th>--}}
{{--                            <th scope="col">Totale Prijs Inc. BTW</th>--}}

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($invoices as $invoice)

                            <tr>
                                <td>{{$invoice->name}}</td>
                                <td>{{$invoice->adress}}</td>
                                <td>{{$invoice->zip_code}}</td>
                                <td>{{$invoice->city}}</td>
                                <td>{{$invoice->phone_number}}</td>
                                <td>{{$invoice->license_plate}}</td>
                                <td>{{$invoice->merk}}</td>
                                <td>{{$invoice->type}}</td>
                                <td>{{$invoice->start_date}}/{{$invoice->end_date}} </td>
{{--                                    <?php--}}
{{--                                    $start_date = invoices->start_date;--}}
{{--                                    $end_date = $invoices->end_date;--}}
{{--                                    $datetime1 = new DateTime($start_date);--}}
{{--                                    $datetime2 = new DateTime($end_date);--}}
{{--                                    $interval = $datetime1->diff($datetime2);--}}
{{--                                    $days = $interval->format('%a');--}}
{{--                                    echo $days;--}}
{{--                                    ?>--}}
{{--                                </td>--}}
                                <td>€{{$invoice->price}}</td>
{{--                                <td>€{{$invoice->price * $days}}</td>--}}

{{--                                <td>--}}
{{--                                    <?php--}}
{{--                                    $price= $invoice->price *$days;--}}
{{--                                    $taxRate=21;--}}
{{--                                    $tax=$price*$taxRate/100;--}}
{{--                                    $total=$price+$tax;--}}
{{--                                    echo '€', $total;--}}
{{--                                    ?>--}}
{{--                                </td>--}}


                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
