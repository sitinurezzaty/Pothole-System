<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    {{--icon--}}
    <link rel="shortcut icon" href="<?php echo asset('/favicon-32x32.png'); ?>">
    <title>Pothole-System</title>
</head>
<body style="background-color:powderblue;">
    <div class="container">
        <h2><center><b>Pothole Detection System</b></center></h2>
        <form action="{{ route('pothole-store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="img">Image</label>
                <input class="form-control" type="file" name="img">
            </div>
            <div class="form-group">
                <label for="nameLoc">Location Name</label>
                <input class="form-control" type="text" name="nameLoc" placeholder="Enter location name...">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
    </div>
</body>
</html>