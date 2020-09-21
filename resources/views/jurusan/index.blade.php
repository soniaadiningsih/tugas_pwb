<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Jurusan</title>


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
        .body{
            background-color: #eaeaea !important;
        }

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
            padding: 10px;
            margin: 40px;
            border-radius: 15px;
        }
        .card h2{
            font-family: 'Montserrat';
            font-size: 28px;
            font-weight: 600;
            margin: 30px 0 50px 30px;
        }
        .card .create a{
            background: #337ab7;
            margin-top: 20px;
            margin-left: 60%;
        }
        .card-body .table{
            font-family: 'Montserrat';
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
        <div class="card">
            <div class="row">
                <div class="col-6">
                    <h2>Data Jurusan</h2>
                </div>
                <div class="col-6">
                    <div class="create">
                        <a href="/jurusan/create" class="btn btn-primary" style="padding: 10px;"> <span class="fa fa-plus" style="border: 2px solid #fff; padding: 3px;"></span> Tambah Data Jurusan</a>
                    </div>
                </div>
            </div>
            <!-- <h2>Data Jurusan</h2>
            <div class="create ml-auto mr-4">
                <a href="/jurusan/create" class="btn btn-primary" style="padding: 10px;"> <span class="fa fa-plus" style="border: 2px solid #fff; padding: 3px;"></span> Tambah Data Jurusan</a>
            </div> -->
            @if (session('status'))
                <div class="alert alert-success mt-3 p-4 text-center">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card-body">
                <table class="table table-border">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Jurusan</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jurusan as $j)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td class="mr-56.">{{ $j->jurusan }}</td>
                            <td class="text-center">
                                <a href="{{ $j->id }}/edit" class="btn"><i class="fa fa-edit" style='color: orange; font-size: 22px; margin-right: 50px;'></i></a>
                                <!-- <a class="btn" data-toggle="modal" data-target="modal-edit"><i class="fa fa-edit" style='color: orange; font-size: 22px; margin-right: 50px;'></i></a> -->
                                <form action="{{ $j->id }}" method="post" class="d-inline" onsubmit="return confirm('Yakin mau mengapus Jurusan?')">
                                        @method('delete')
                                        @csrf
                                        <button class="btn"><i class="fa fa-trash-alt" style='color: red; font-size: 22px;'></i></button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- <div class="modal" id="modal-edit" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div> -->

</body>
</html>