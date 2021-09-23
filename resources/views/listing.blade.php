<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Pothole-System</title>
    {{--icon--}}
    <link rel="shortcut icon" href="<?php echo asset('/favicon-32x32.png'); ?>">
</head>
<body>
    <div class="container">
        <h2><center><b>Pothole Data</b></center></h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name Location</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($potholes as $pothole)
                <tr>
                    {{-- $potholes dia ikut dekat controller --}}
                    <th scope="row">{{$pothole->id}}</th> 
                    <td>
                        {{$pothole->nameLoc}}
                    </td>
                    <td>
                        <img src="{{ asset("storage/$pothole->img") }}" alt="{{$pothole->img}}" style="border-radius: 8px;" width="300">
                    </td>
                </tr>  
                @endforeach              
            </tbody>
        </table>
    </div>
</body>
</html>