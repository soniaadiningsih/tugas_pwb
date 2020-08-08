<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galleri</title>


    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/galeri.css') }}">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">

    <!-- slick -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">

    <!-- fancybox css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    
</head>
<body class="bg-light">

    <!-- header -->
    <section class="header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <div class="media">
                    <img src="{{ asset('img/navbar.png') }}" class="mr-3" alt="...">
                    <div class="media-body">
                      <p class="mb-0">Madrasah Ibtidaiyah</p>
                      <h5 class="mt-0">At-Taqwa Bondowoso</h5>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('index') }}">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('about') }}">Tentang</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('galeri') }}">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('artikel') }}">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('contact') }}">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>


    <!-- galeri -->
    <section class="galeri" id="galeri">
        <div class="container">
            <h2>Galeri Mi At - Taqwa</h2>
            <div class="row">
                <div class="col-md-6 col-sm-12 img">
                    <img src="{{ asset('img/gal1.png') }}" class="img-fluid galeri1" alt="...">
                    <div class="youtube">
                        <a href="https://youtu.be/jsnUVV9rtjM" data-fancybox>
                            <img src="{{ asset('img/play.png') }}" class="img-fluid" alt="...">
                        </a>
                    </div>
                    <div class="desc">
                        <p class="text-muted date">Ahad, 21-01-2020</p>
                        <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 img-2">
                    <div class="overlay-slide">
                        <img src="{{ asset('img/gal2.png') }}" class="img-fluid galeri2" alt="...">
                        <div class="desc">
                            <p class="text-muted mt-0">Ahad, 21-01-2020</p>
                            <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm">
                            <div class="overlay-slide">
                                <img src="{{ asset('img/gal3.png') }}" class="img-fluid galeri3" alt="...">
                                <div class="desc">
                                    <p class="text-muted mt-0">Ahad, 21-01-2020</p>
                                    <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="overlay-slide">
                                <img src="{{ asset('img/gal4.png') }}" class="img-fluid galeri4" alt="...">
                                <div class="desc">
                                    <p class="text-muted mt-0">Ahad, 21-01-2020</p>
                                    <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row ml-0 mr-0">
                            <div class="col-md-6 col-sm-12 ml-0 mr-0">
                                <div class="overlay-slide">
                                    <img src="{{ asset('img/gal2.png') }}" class="img-fluid galeri2" alt="...">
                                    <div class="desc">
                                        <p class="text-muted mt-0">Ahad, 21-01-2020</p>
                                        <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm">
                                        <div class="overlay-slide">
                                            <img src="{{ asset('img/gal3.png') }}" class="img-fluid galeri3" alt="...">
                                            <div class="desc">
                                                <p class="text-muted mt-0">Ahad, 21-01-2020</p>
                                                <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="overlay-slide">
                                            <img src="{{ asset('img/gal4.png') }}" class="img-fluid galeri4" alt="...">
                                            <div class="desc">
                                                <p class="text-muted mt-0">Ahad, 21-01-2020</p>
                                                <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 img">
                                <img src="{{ asset('img/gal1.png') }}" class="img-fluid galeri1" alt="...">
                                <div class="youtube">
                                    <a href="https://youtu.be/jsnUVV9rtjM" data-fancybox>
                                        <img src="assets/img/play.png" alt="" class="img-fluid"/>
                                    </a>
                                </div>
                                <div class="desc">
                                    <p class="text-muted date">Ahad, 21-01-2020</p>
                                    <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row ml-0 mr-0">
                            <div class="col-md-6 col-sm-12 ml-0 mr-0">
                                <div class="overlay-slide">
                                    <img src="{{ asset('img/gal2.png') }}" class="img-fluid galeri2" alt="...">
                                    <div class="desc">
                                        <p class="text-muted mt-0">Ahad, 21-01-2020</p>
                                        <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm">
                                        <div class="overlay-slide">
                                            <img src="{{ asset('img/gal3.png') }}" class="img-fluid galeri3" alt="...">
                                            <div class="desc">
                                                <p class="text-muted mt-0">Ahad, 21-01-2020</p>
                                                <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="overlay-slide">
                                            <img src="{{ asset('img/gal4.png') }}" class="img-fluid galeri4" alt="...">
                                            <div class="desc">
                                                <p class="text-muted mt-0">Ahad, 21-01-2020</p>
                                                <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 img">
                                <img src="{{ asset('img/gal1.png') }}" class="img-fluid galeri1" alt="...">
                                <div class="youtube">
                                    <a href="https://youtu.be/jsnUVV9rtjM" data-fancybox>
                                        <img src="assets/img/play.png" alt="" class="img-fluid"/>
                                    </a>
                                </div>
                                <div class="desc">
                                    <p class="text-muted date">Ahad, 21-01-2020</p>
                                    <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row ml-0 mr-0">
                            <div class="col-md-6 col-sm-12 ml-0 mr-0">
                                <div class="overlay-slide">
                                    <img src="{{ asset('img/gal2.png') }}" class="img-fluid galeri2" alt="...">
                                    <div class="desc">
                                        <p class="text-muted mt-0">Ahad, 21-01-2020</p>
                                        <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm">
                                        <div class="overlay-slide">
                                            <img src="{{ asset('img/gal3.png') }}" class="img-fluid galeri3" alt="...">
                                            <div class="desc">
                                                <p class="text-muted mt-0">Ahad, 21-01-2020</p>
                                                <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="overlay-slide">
                                            <img src="{{ asset('img/gal4.png') }}" class="img-fluid galeri4" alt="...">
                                            <div class="desc">
                                                <p class="text-muted mt-0">Ahad, 21-01-2020</p>
                                                <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 img">
                                <img src="{{ asset('img/gal1.png') }}" class="img-fluid galeri1" alt="...">
                                <div class="youtube">
                                    <a href="https://youtu.be/jsnUVV9rtjM" data-fancybox>
                                        <img src="assets/img/play.png" alt="" class="img-fluid"/>
                                    </a>
                                </div>
                                <div class="desc">
                                    <p class="text-muted date">Ahad, 21-01-2020</p>
                                    <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row ml-0 mr-0">
                            <div class="col-md-6 col-sm-12 ml-0 mr-0">
                                <div class="overlay-slide">
                                    <img src="{{ asset('img/gal2.png') }}" class="img-fluid galeri2" alt="...">
                                    <div class="desc">
                                        <p class="text-muted mt-0">Ahad, 21-01-2020</p>
                                        <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm">
                                        <div class="overlay-slide">
                                            <img src="{{ asset('img/gal3.png') }}" class="img-fluid galeri3" alt="...">
                                            <div class="desc">
                                                <p class="text-muted mt-0">Ahad, 21-01-2020</p>
                                                <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="overlay-slide">
                                            <img src="{{ asset('img/gal4.png') }}" class="img-fluid galeri4" alt="...">
                                            <div class="desc">
                                                <p class="text-muted mt-0">Ahad, 21-01-2020</p>
                                                <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 img">
                                <img src="{{ asset('img/gal1.png') }}" class="img-fluid galeri1" alt="...">
                                <div class="youtube">
                                    <a href="https://youtu.be/jsnUVV9rtjM" data-fancybox>
                                        <img src="assets/img/play.png" alt="" class="img-fluid"/>
                                    </a>
                                </div>
                                <div class="desc">
                                    <p class="text-muted date">Ahad, 21-01-2020</p>
                                    <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row ml-0 mr-0">
                            <div class="col-md-6 col-sm-12 ml-0 mr-0">
                                <div class="overlay-slide">
                                    <img src="{{ asset('img/gal2.png') }}" class="img-fluid galeri2" alt="...">
                                    <div class="desc">
                                        <p class="text-muted mt-0">Ahad, 21-01-2020</p>
                                        <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-sm">
                                        <div class="overlay-slide">
                                            <img src="{{ asset('img/gal3.png') }}" class="img-fluid galeri3" alt="...">
                                            <div class="desc">
                                                <p class="text-muted mt-0">Ahad, 21-01-2020</p>
                                                <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="overlay-slide">
                                            <img src="{{ asset('img/gal4.png') }}" class="img-fluid galeri4" alt="...">
                                            <div class="desc">
                                                <p class="text-muted mt-0">Ahad, 21-01-2020</p>
                                                <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 img">
                                <img src="{{ asset('img/gal1.png') }}" class="img-fluid galeri1" alt="...">
                                <div class="youtube">
                                    <a href="https://youtu.be/jsnUVV9rtjM" data-fancybox>
                                        <img src="assets/img/play.png" alt="" class="img-fluid"/>
                                    </a>
                                </div>
                                <div class="desc">
                                    <p class="text-muted date">Ahad, 21-01-2020</p>
                                    <h5 class="card-title">Memperingati Isra' Mi'raj</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>


    




    <!-- footer -->
    <section class="footer" id="footer">
        <p >© 2020, Madrasah Ibtidaiyah At-Taqwa, All rights reserved.</p>
    </section>

    
    <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- fancybox js -->
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>


    <!-- slick -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script type="text/javascript">
        $('.slider').slick({
            slidesToShow: 1,
            dots: true,
            autoplay: false,
            autoplaySpeed: 0,
            responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: false,
                slidesToShow: 1
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: false,
                slidesToShow: 1
            }
            }
        ]
        });
    </script>
</body>
</html>