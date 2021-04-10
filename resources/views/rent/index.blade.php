@extends('layouts.app')

@section('content')
<style>
    section {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .section-book {
        height: 100vh;
    }

    .rent {
        width: 60%;
        height: 60%;
        background-image: linear-gradient(
                105deg,
                rgba(255, 255, 255, 0.9) 0%,
                rgba(255, 255, 255, 0.9) 50%,
                transparent 50%
        ),
        url("https://www.hdcarwallpapers.com/walls/bmw_m4_m_performance_led_headlights-HD.jpg");
        background-size: 100%;
        background-position: right;
        background-size: cover;
        border-radius: 3px;
        box-shadow: 0 1.5rem 4rem rgba(0, 0, 0, 0.2);
    }

    .book__form {
        width: 50%;
        padding: 6rem;
    }

    .heading {
        margin-bottom: 3rem;
        color: #000000;
    }

    .btn,
    .btn:link,
    .btn:visited {
        text-decoration: none;
        padding: 1rem 2rem;
        display: inline-block;
        border-radius: 5rem;
        transition: all 0.2s;
        position: relative;
        font-size: 16px;
        border: none;
        cursor: pointer;
        margin-top: 4.5rem;
        background-color: #000000;
        color: white;
    }

    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.2);
    }

</style>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Reserveren</title>
</head>
<body>
<section class="section-book">
    <div class="rent">
        <div class="book__form">
            <form action="{{route("rent.store")}}"  method="post" class="form">
                @csrf
                <h2 class="heading">Online reserveren</h2>

                <div class="form__label">
                    <h6>Begindatum:</h6>
                    <div class="form__radio-group">
                        <input value="{{ auth()->id() }}" name="user_id" type="hidden" />
                        <input value="{{$car->id}}" name="car_id" type="hidden">
                    <input id="birth" type="date" class="form-control @error('birth') is-invalid @enderror" name="start_date" value="{{ old('birth') }}" required autocomplete="birth">
                    </div>
                </div>

                <div class="form__label">
                    <div class="form__radio-group">
                        <h6>Einddatum:</h6>
                        <input id="birth" type="date" class="form-control @error('birth') is-invalid @enderror" name="end_date" value="{{ old('birth') }}" required autocomplete="birth">
                    </div>
                </div>


                <div class="form__group">
                    <button type="submit" class="btn btn-success ">Reserveren &rarr;</button>
                </div>
            </form>
        </div>
    </div>
</section>
</body>
</html>
@endsection
