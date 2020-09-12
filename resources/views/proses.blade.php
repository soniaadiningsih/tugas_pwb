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
        .jurusan .jurusan-body{
            font-family: 'Montserrat';
        }
        .jurusan h3{
            font-family: 'Montserrat';
            font-style: normal;
            font-weight: 600;
            font-size: 30px;
            line-height: 25px;
            color: #000000;
            text-decoration: underline;
        }
        .jurusan .label{
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
            text-align: center;
        }
    </style>
</head>
    <div class="row">
        <div class="col-3">
            <img src="{{ asset('img/bg-cewek.png') }}" alt="..." class="img-fluid bg-cewek">
        </div>
        <div class="col-1"></div>
        <div class="col-5 mt-5">
            <div class="container">
                <div class="justify-content-center">
                        <div class="jurusan mt-5">
                            <div class="jurusan-body">
                                <h3 class="my-4">Data siswa  </h3>
        
                                <table class="table table-borderless justify-content-center">
                                    <tr>
                                        <td class="label" style="width:150px">NIS</td>
                                        <td>{{ $data->nis }}</td>
                                    </tr>
                                    <tr>
                                        <td class="label">Nama</td>
                                        <td>{{ $data->nama }}</td>
                                    </tr>
                                    <tr>
                                        <td class="label">Email</td>
                                        <td>{{ $data->email }}</td>
                                    </tr>
                                    <tr>
                                        <td class="label">Jurusan</td>
                                        <td>{{ $data->jurusan }}</td>
                                    </tr>
                                </table>
        
                                <a href="/jurusan" class="btn btn-success" style="width: 80%;">Back</a>
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