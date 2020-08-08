<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>


    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">

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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('galeri') }}">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('artikel') }}">Artikel</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('contact') }}">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>


    <!-- kontak -->
    <section class="kontak" id="kontak">
        <div class="row">
            <div class="col-3">
                <img src="{{ asset('img/bg-cewek.png') }}" alt="..." class="img-fluid bg-cewek">
            </div>
            <div class="col-6 kontak">
                <h2>Kontak Kami</h2>
                <p>Kontak kami untuk informasi lebih lanjut.</p>
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" value="Kadita Suryaningsih">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" value="ningkadita@gmai">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Pertanyaan</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Masukkan Pertanyaan Anda"></textarea>
                    </div>
                </form>
                <a href="#" class="btn btn-success btn-block">Kirim</a>
            </div>
            <div class="col-3">
                <img src="{{ asset('img/bg-cowok.png') }}" alt="..." class="img-fluid bg-cowok">
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