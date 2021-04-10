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
    </style>
    <div class="container1">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-dark text-white"><i class="fa fa-envelope"></i>Contacteer ons
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="name">Naam &#9776;</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Vul je naam in" required>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail &#9993</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Vul je e-mail in" required>
                                <small id="emailHelp" class="form-text text-muted">We delen nooit je email met iemand anders.</small>
                            </div>
                            <div class="mx-auto">
                                <button type="submit" class="btn btn-success text-right">Verzenden</button></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="card bg-light mb-3">
                    <div class="card-header bg-dark text-white"><i class="fa fa-home"></i>Adres</div>
                    <div class="card-body">
                        <p>Boerenweg 43</p>
                        <p>1376PC</p>
                        <p>Almere, Nederland</p>
                        <p>info@rentacar.nl</p>
                        <p>+31 6 12348764</p>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
