<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,800,900&display=swap" rel="stylesheet">


    <!-- icons -->

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">



    <!-- Bootstrap core CSS -->
    <link href="/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html, main{
            background-color: #f5f5dc;
            font-family: "Poppins";
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .site-header {
            background-color: rgba(0, 0, 0, .85);
            -webkit-backdrop-filter: saturate(180%) blur(20px);
            backdrop-filter: saturate(180%) blur(20px);
            color: white;
        }
        .site-header a {
            color: #8e8e8e;
            transition: color .15s ease-in-out;
        }
        .site-header a:hover {
            color: #fff;
            text-decoration: none;
        }

        .flex-equal > * {
            flex: 1;
        }
        @media (min-width: 768px) {
            .flex-md-equal > * {
                flex: 1;
            }
        }
    </style>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</head>
<header class="site-header sticky-top py-1">
    <nav class="navbar navbar-expand-md  bg-black text-light shadow-sm">
        <a class="py-2" href="{{url('welcome')}}" aria-label="Product">
            <img class="d-block w-80" src="/img/icon.svg" alt="Mercedes" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24">
        </a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('welcome')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('showroom.index')}}">Assortiment</a>
            </li>
            @can('manage-users')
            <li class="nav-item">
                <a class="nav-link" href="{{route('cars.index')}}">Auto's aanpassen</a>
            </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('rented.index')}}">Gereserveerde auto's</a>
                </li>
            @endcan
            <li class="nav-item">
                <a class="nav-link" href="{{url('/contact')}}">Contact</a>
            </li>

        </ul>
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Inloggen') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registreren') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->first_name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item" href="{{route('user.invoice') }}">
                            Factuur
                        </a>
                        <a class="dropdown-item" href="{{route('user.edit') }}">
                            Gegevens wijzigen
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Uitloggen') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </nav>
</header>
<main class="py-7">
    @yield('content')
</main>
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark">
        <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">


                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">

                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

        <!-- Grid row -->
        <div class="row mt-3 dark-grey-text">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold">Rent-a-Car</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Wij helpen u op weg! Rent-a-Car biedt een groots assortiment in personen auto’s,
                    zo kunt u eenvoudig en snel gebruik maken van een voertuig.</p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Account</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a class="dark-grey-text" href="/register">Registreren</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="/login">Inloggen</a>
                </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Pagina's</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a class="dark-grey-text" href="/welcome">Home</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="/showroom">Assortiment</a>
                </p>
                <p>
                    <a class="dark-grey-text" href="/contact">Contact</a>
                </p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i></i>&#9872; Boerenweg 43, Almere</p>
                <p>
                    <i></i>&#9993; info@rentacar.nl</p>
                <p>
                    <i></i>&#9743; 06-12345678</p>
                <p>
                    <i></i>&#9743; 06-56781234</p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center text-black-50 py-3">© 2021 Copyright:
        <a class="dark-grey-text" href="/welcome">Rent-a-Car</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
</html>
