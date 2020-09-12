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
        .card{
            padding: 10px;
            margin: 40px;
            border-radius: 15px;
        }
        .card h2{
            font-family: 'Montserrat';
            font-size: 24px;
            font-weight: 600;
            margin: 30px 0 50px 0;
            text-align: center;
        }
        .card-body .table{
            font-family: 'Montserrat';
            font-size: 18px;
        }
    </style>

</head>
<body style="background-color: #eaeaea !important;">


    <div class="jurusan">
        <div class="card">
            <h2> Data Jurusan SMKN 1 Purwosari</h2>
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
                            <th scope="row">{{ $j->id_jurusan }}</th>
                            <td class="mr-56.">{{ $j->jurusan }}</td>
                            <td class="text-center">
                                <a href="#" class="btn"><i class="fa fa-edit" style='color: orange; font-size: 22px; margin-right: 50px;'></i></a>
                                <a href="#" class="btn"><i class="fa fa-trash-alt" style='color: red; font-size: 22px;'></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</body>
</html>