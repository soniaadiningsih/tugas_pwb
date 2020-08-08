<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>

    
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('index') }}">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('about') }}">Tentang</a>
                        </li>
                        <li class="nav-item">
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

    <!-- hero -->
    <section class="hero" id="hero">
        <div class="row">
            <div class="col-3">
                <img src="{{ asset('img/bg-cewek.png') }}" alt="..." class="img-fluid bg-cewek">
            </div>
            <div class="col-6">
                <div class="slider">
                    <div class="hero-body">
                        <h2>Their Favourite Choice in Bondowoso</h2>
                        <p>Menyelenggarakan pendidikan dan pembelajaran yang berorientasi pada terbentuknya peserta didik yang beriman, bertaqwa, dan berakhlaq mulia atas dasar nilai-nilai Islam ala Ahlus Sunnah Wal Jama’ah an Nahdliyah</p>
                        <a href="#" class="btn btn-success">Ayo Gabung <i class="fa fa-arrow-right"></i> </a>
                    </div>
                    <div class="hero-body">
                        <h2>Their Favourite Choice in Bondowoso</h2>
                        <p>Menyelenggarakan pendidikan dan pembelajaran yang berorientasi pada terbentuknya peserta didik yang beriman, bertaqwa, dan berakhlaq mulia atas dasar nilai-nilai Islam ala Ahlus Sunnah Wal Jama’ah an Nahdliyah</p>
                        <a href="#" class="btn btn-success">Ayo Gabung <i class="fa fa-arrow-right"></i> </a>
                    </div>
                    <div class="hero-body">
                        <h2>Their Favourite Choice in Bondowoso</h2>
                        <p>Menyelenggarakan pendidikan dan pembelajaran yang berorientasi pada terbentuknya peserta didik yang beriman, bertaqwa, dan berakhlaq mulia atas dasar nilai-nilai Islam ala Ahlus Sunnah Wal Jama’ah an Nahdliyah</p>
                        <a href="#" class="btn btn-success">Ayo Gabung <i class="fa fa-arrow-right"></i> </a>
                    </div>
                    
                </div>
            </div>
            <div class="col-3">
                <img src="{{ asset('img/bg-cowok.png') }}" alt="..." class="img-fluid bg-cowok">
            </div>
        </div>
    </section>


    <!-- about -->
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 desc">
                    <h3>Tentang MI At-Taqwa</h3>
                    <p>MI AT - TAQWA Bondowoso adalah Lembaga Pendidikan favorit dikota Bondowoso dengan menyelenggarakan pendidikan dan pembelajaran yang berorientasi pada terbentuknya peserta didik yang beriman, bertaqwa, dan berakhlaq mulia atas dasar nilai-nilai Islam ala Ahlus Sunnah Wal Jama’ah an Nahdliyah. Madrasah kami pun turut menjaga tradisi lama yang baik dan mengambil perkembangan baru yang lebih baik.</p>
                    <a href="{{ url('about') }}" class="btn btn-success">Selengkapnya <i class="fa fa-arrow-right"></i> </a>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 img">
                    <div class="img-one">
                        <img src="{{ asset('img/about1.png') }}" alt="..." class="img-fluid">
                        <div class="youtube">
                            <a href="https://youtu.be/jsnUVV9rtjM" data-fancybox>
                                <img src="{{ asset('img/play.png') }}" alt="..." class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="img-two">
                        <img src="{{ asset('img/about2.png') }}" alt="..." class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- galleri -->
    <section class="galeri" id="galeri">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-sm-12 desc">
                    <h3>Galeri</h3>
                    <p>MI AT - TAQWA Bondowoso adalah Lembaga Pendidikan favorit dikota Bondowoso dengan menyelenggarakan pendidikan dan pembelajaran yang berorientasi pada terbentuknya peserta didik yang beriman, bertaqwa, dan berakhlaq mulia atas dasar nilai-nilai Islam ala Ahlus Sunnah Wal Jama’ah an Nahdliyah.</p>
                    <a href="{{ url('galeri') }}" class="btn btn-success">Selengkapnya <i class="fa fa-arrow-right"></i> </a>
                </div>
                <div class="col-lg-10 col-md-12 col-sm-12 img">
                    <div class="row img-1">
                        <div class="col-sm-8 galeri1">
                            <img src="{{ asset('img/galeri1.png') }}" alt="..." class="img-fluid galeri1">
                            <div class="youtube">
                                <a href="https://youtu.be/jsnUVV9rtjM" data-fancybox>
                                    <img src="{{ asset('img/play.png') }}" alt="..." class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <img src="{{ asset('img/galeri2.png') }}" alt="..." class="img-fluid galeri2">
                        </div>
                    </div>
                    <div class="row img-2">
                        <div class="col-sm">
                            <img src="{{ asset('img/galeri3.png') }}" alt="..." class="img-fluid galeri3">
                        </div>
                        <div class="col-sm">
                            <img src="{{ asset('img/galeri4.png') }}" alt="..." class="img-fluid galeri4">
                        </div>
                        <div class="col-sm">
                            <img src="{{ asset('img/galeri5.png') }}" alt="..." class="img-fluid galeri5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- kontak -->
    <section class="kontak" id="kontak">
        <div class="container">
            <h3>Tanyakan Seputar MI At-Taqwa Bondowoso</h3>
            <form action="/action_page.php">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control email" id="email" value="botpablo@gmai" style="height: 52px;">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Pertanyaan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Masukkan Pertanyaan Anda"></textarea>
                </div>
            </form>
            <a href="#" class="btn btn-success btn-block">Kirim</a>
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