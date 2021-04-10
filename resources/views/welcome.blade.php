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

            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: 'Poppins',sans-serif;
            }
            .navbar{
                position: fixed;
                top: 0;
                z-index: 99999;
                padding:25px 0;
            }
            .navbar .logo{
                font-size: 1.5em;
                text-transform: uppercase;
                font-weight: 750;
                letter-spacing: 2px;
            }
            .navbar ul.nav{
                margin-right: 15%;
            }
            .navbar ul.nav li.active,
            .navbar ul.nav li:hover{
                background:rgba(255, 255, 255, 0.5);
                color: #000;

            }
            .navbar ul.nav li a{
                color: #fff;
                font-size: 1em;
                font-weight: 500;
            }
            .navbar ul.nav li.active a,
            .navbar ul.nav li:hover a{
                color: #000;
            }

            /*slider*/
            #carouselExampleIndicators{
                position: relative;
                height: 100vh;
                width: 100%;
            }
            #carouselExampleIndicators .carousel-inner{
                position: relative;
                height: 100%;
                width: 100%;
                background: #000;
            }
            #carouselExampleIndicators .carousel-inner:before{
                position: absolute;
                content: '';
                background: rgba(0, 0, 0, 0.45);
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                z-index: 1;
            }
            #carouselExampleIndicators .carousel-inner .carousel-item{
                position: relative;
                height: 100%;
                width:100%;
                background: url('https://s1.1zoom.me/b6460/154/BMW_M4_CS_Blue_Motion_539177_2560x1440.jpg');
                background-size: 100% 100%;
                background-position: center;
                background-attachment: fixed;
            }
            #carouselExampleIndicators .carousel-inner .carousel-item:nth-child(2){
                background: url('https://www.bmw.nl/content/dam/bmw/common/all-models/1-series/5-door/2019/inspire/bmw-1-series-inspire-mg-exterior-interior-desktop-05.jpg');
                background-size: 100% 100%;
                background-position: center;
                background-attachment: fixed;
            }
            #carouselExampleIndicators .carousel-inner .carousel-item:nth-child(3){
                background: url('https://justinrecruitment.nl/wp-content/uploads/2020/05/AdobeStock_310080344-min-scaled.jpeg');
                background-size: 100% 100%;
                background-position: center;
                background-attachment: fixed;
            }

            #carouselExampleIndicators .carousel-inner .carousel-item .info{
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                height: auto;
                width: 100%;
                z-index: 1;
                text-align: center;
            }
            #carouselExampleIndicators .carousel-inner .carousel-item h1{
                height: auto;
                color: #fff;
                width: 100%;
                z-index: 1;
                text-align: center;
                font-size: 5.5em;
                font-weight: 750;
            }
            #carouselExampleIndicators .carousel-inner .carousel-item p{
                height: auto;
                color: #ccc;
                width: 100%;
                z-index: 1;
                text-align: center;
                font-size: 1.2em;
                font-weight: 500;
            }

            .gallery-block{padding-bottom: 60px; padding-top: 60px;}
            .gallery-block .heading{margin-bottom: 50px; text-align: center;}

            .gallery-block .heading h2{font-weight: bold;font-size: 1.4rem; text-transform: uppercase;}

            .gallery-block.cards-gallery h6{font-size: 17px; font-weight: bold;}

            .gallery-block.cards-gallery .card{transition: 0.4s easy;}
            .gallery-block.cards-gallery .card img{box-shadow: 0px 2px 10px rgba(0,0,0,0.15);}
            .gallery-block.cards-gallery .card-body{text-align: center;}
            .gallery-block.cards-gallery .card-body p{font-size: 15px;}
            .gallery-block.cards-gallery a{color:#212529; }
            .gallery-block.cards-gallery a:hover{text-decoration: none;}
            .gallery-block.cards-gallery  .card{
                margin-bottom: 30px;
                box-shadow: 0px 2px 10px rgba(0,0,0,0.15);
            }

            @media (min-width: 576px) {

                .gallery-block .transform-on-hover:hover {
                    transform: translateY(-10px) scale(1.02);
                    box-shadow: 0px 10px 10px rgba(0, 0, 0, 0.15) !important;
                }
            }
        </style>


        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <!-- bootstrap cdn -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    <!-- font awesome cdn -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <!-- style.css -->
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <!-- jquery cdn -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="info">
                        <h1>RENT-A-CAR</h1>
                        <p>Wij helpen u op weg! Rent-a-Car biedt een groots assortiment in personen auto’s,
                            </br>zo kunt u eenvoudig en snel gebruik maken van een voertuig.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="info">
                        <h1>VESTIGING</h1>
                        <p>Snel een auto nodig? Dan kunt u op de zelfde dag terecht bij ons! Wij zijn gevestigd in Almere, Boerenweg 43.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="info">
                        <h1>CONTACT</h1>
                        <p>24/7 bereikbaar via 06-12348765 en info@rentacar.nl</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Terug</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Verder</span>
            </a>
        </div>
    </div>
</div>

        <section class="gallery-block cards-gallery">
            <div class="container">
                <div class="heading">
                    <h2>Assortiment</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 transform-on-hover">
                            <a class="lightbox"><img src="/img/mercedes.png" alt="Mercedes" width="350" </a>
                            <div class="card-body">
                                <h6>Mercedes A-Klasse</h6>
                                <p class="text-muted card-text">Een Mercedes Benz A-Klasse als
                                    huurauto geeft je bijzonder veel comfort en wat je ook van plan bent te doen,
                                    in deze auto zul je beslist op een positieve manier opvallen. Je kunt hem heel eenvoudig reserveren via 06-432187654 of via de website.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 transform-on-hover">
                            <a class="lightbox"><img src="/img/bmw.png" alt="BMW" width="350" </a>
                            <div class="card-body">
                                <h6>BMW 5 Serie</h6>
                                <p class="text-muted card-text">De BMW 5 serie is een heel betrouwbare en comfortabele reeks van een steengoed
                                    Duitse autoproducent. De lijnen van de BMW 5 serie zijn sportief, elegant en veelzijdig.
                                    De BMW 5 serie huren is dus ideaal voor stijlvolle gelegenheden.
                                    Je kunt hem heel eenvoudig reserveren via 06-432187654 of via de website.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 transform-on-hover">
                            <a class="lightbox"><img src="/img/golf.png" alt="Golf" width="350" </a>
                            <div class="card-body">
                                <h6>Golf 7 GTi</h6>
                                <p class="text-muted card-text">De Volkswagen Golf GTI staat bekend als een legendarische auto.
                                    Wij hebben deze auto daarom opgenomenin onze autoverhuur vloot.
                                    Je kunt hem heel eenvoudig reserveren via 06-432187654 of via de website.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>

            <div class="text-center">
                <a href="showroom" class="btn btn-warning">Ga naar Assortiment &rarr;</a>
            </div>
        </section>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script>

        </script>




<!-- scripts -->
<!-- bootstrap javascript cdn -->
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

@endsection