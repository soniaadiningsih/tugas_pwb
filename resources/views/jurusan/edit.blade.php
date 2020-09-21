<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Jurusan</title>


    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">



    <style>
        .header{
            background: white;
            padding: 10px 0;
        }
        .header .navbar{
            font-family: 'Montserrat';
            font-size: 18px;
        }
        .header .navbar .active{
            font-weight: 600;
        }
        .header .navbar .search{
            margin-left: 750px;
            font-size: 22px;
        }

        .card{
            padding: 70px 40px;
            margin: 20px 40px 40px 40px;
            border-radius: 15px;
        }
        .jurusan h3{
            font-family: 'Montserrat';
            font-size: 24px;
            font-weight: 600;
            margin: 50px 0 0 50px;
        }
        .jurusan form{
            font-family: 'Montserrat';
            font-size: 16px;
        }
        .jurusan form label{
            font-weight: 600;
            font-size: 18px;
        }

    </style>

</head>
<body style="background-color: #eaeaea !important;">
    
    <!-- header -->
    <section class="header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('') }}">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('') }}">Tentang</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('index') }}">Jurusan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('') }}">Kontak</a>
                        </li>
                        <li class="nav-item search">
                            <a class="nav-link" href="{{ url('') }}"><i class="fa fa-search"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>


    <!-- jurusan -->
    <div class="jurusan">
        <h3> Ubah Data Jurusan</h3>
        <div class="card">
            <form action="/jurusan/{{ $jurusan->id }}" method="post">
                @method('patch')
                @csrf
                <div class="form-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="Nama Jurusan">Nama Jurusan</label>
                                <input type="text" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror " id="nama jurusan" placeholder="Isi Jurusan" value="{{ $jurusan->jurusan }}">
                            </div>
                        </div>
                        <div class="col-6 text-center mt-4">
                        <button type="submit" name="simpan" class="btn btn-primary mr-3" style="width: 150px; padding: 12px; background: #337ab7; border: none;">Update</button>
                        <a href="/jurusan" class="btn btn-danger" style="width: 150px; padding: 12px; background: red; border: none;" >Back</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>