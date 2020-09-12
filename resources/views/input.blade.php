<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">

    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">



    <style>
        body{
            overflow: hidden;
        }
        .jurusan form input{
            height: 45px;
            width: 90%;
        }
        .jurusan .form-control{
            border: 1px solid #D9D9D9;
            box-shadow: 6px 6px 10px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
        }
        .jurusan form input, .contact form textarea{
            background: #FFFFFF;
            border: 1px solid #D9D9D9;
            box-shadow: 6px 6px 10px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
        }
        .jurusan form label{
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-size: 18px;
            line-height: 25px;
            color: #000000;
        }
        .jurusan .jurusan-body .btn-success{
            background: #00AF00;
            border-radius: 5px;
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-size: 18px;
            line-height: 25px;
            padding: 13px 0;
            color: #FFFFFF;
            border: none;
            width: 50%;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="row">
        <div class="col-3">
            <img src="{{ asset('img/bg-cewek.png') }}" alt="..." class="img-fluid bg-cewek">
        </div>

        <div class="col-6">
            <div class="container">
            <div class=" justify-content-center">
                <div class="">
                    <div class="jurusan mt-5">
                        <div class="jurusan-body">
                            <br/>
 
                            {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
 
                            <br/>
                             <!-- form validasi -->
                            <form action="/proses" method="post">
                                {{ csrf_field() }}
                            
                                <div class="form-group">
                                    <label for="nis">NIS</label>
                                    <input class="form-control" type="text" name="nis" value="{{ old('nis') }}">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input class="form-control" type="text" name="nama" value="{{ old('nama') }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" type="text" name="email" value="{{ old('email') }}">
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <select name="jurusan" class="form-control" style=" height: 100%; padding: 10px;" value="{{ old('jurusan') }}">
                                        <option value="" selected="">- Pilih Jurusan -</option>
                                        
                                        <option value="' .$jurusan['id_jurusan']. '">
                                        @foreach($jurusan as $j)
                                            $j['jurusan']viyfytghbjhkftuf
                                        @endforeach
                                        </option>
                                    </select>
                                </div>
                                <div class="text-center">
                                    <input class="btn btn-success mt-4" type="submit" value="Proses">
                                </div>
                                
                            </form>
 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
        <div class="col-3">
            <img src="{{ asset('img/bg-cowok.png') }}" alt="..." class="img-fluid bg-cewek">
        </div>
    </div>
        
   
</body>
</html>