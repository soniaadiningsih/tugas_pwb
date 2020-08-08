<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">

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
                        <li class="nav-item active">
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

    <!-- about -->
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12 desc">
                    <h3>Tentang MI At-Taqwa</h3>
                    <p>MI AT - TAQWA Bondowoso adalah Lembaga Pendidikan favorit dikota Bondowoso dengan menyelenggarakan pendidikan dan pembelajaran yang berorientasi pada terbentuknya peserta didik yang beriman, bertaqwa, dan berakhlaq mulia atas dasar nilai-nilai Islam ala Ahlus Sunnah Wal Jama’ah an Nahdliyah. Madrasah kami pun turut menjaga tradisi lama yang baik dan mengambil perkembangan baru yang lebih baik.</p>
                    <a href="#" class="btn btn-success">Selengkapnya <i class="fa fa-arrow-right"></i> </a>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 img">
                    <div class="img-one img-fluid">
                        <img src="{{ asset('img/about1.png') }}" alt="..." class="img-fluid">
                        <div class="youtube">
                            <a href="https://youtu.be/jsnUVV9rtjM" data-fancybox>
                                <img src="{{ asset('img/play.png') }}" alt="..." class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="img-two img-fluid">
                        <img src="{{ asset('img/about2.png') }}" alt="..." class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- fasilitas -->
    <section class="fasilitas" id="fasilitas">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 top">
                    <div class="media">
                    <img src="{{ asset('img/fas-about-1.png') }}" alt="..." class="img-fluid mr-3">
                        <div class="media-body">
                            <h5 class="mt-3 mb-0">Gedung 2 Lantai</h5>
                            <p class="mt-0">MI AT-Taqwa menyediakan gedung 2 lantai agar para siswa merasa nyaman dalam belajar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 top">
                    <div class="media">
                    <img src="{{ asset('img/fas-about-2.png') }}" alt="..." class="img-fluid mr-3">
                        <div class="media-body">
                        <h5 class="mt-3 mb-0">Asrama Santri</h5>
                        <p class="mt-0">MI AT-Taqwa juga menyediakan asrama bagi santri yang ingin memperdalam ilmu agamanya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="media">
                    <img src="{{ asset('img/fas-about-3.png') }}" alt="..." class="img-fluid mr-3">
                        <div class="media-body">
                        <h5 class="mt-3 mb-0">Tempat Wudhu 2 Lantai</h5>
                        <p class="mt-0">Tempat wudhu disediakan 2 lantai agar mempermudah santi supaya tidak berdesak-desakan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="media">
                    <img src="{{ asset('img/fas-about-4.png') }}" alt="..." class="img-fluid mr-3">
                        <div class="media-body">
                        <h5 class="mt-3 mb-0">Makan 3x sehari</h5>
                        <p class="mt-0">Makan sudah disediakan sehari 3x agar santri tidak membeli makanan diluar.</p>
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
</body>
</html>