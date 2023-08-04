<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <br>
    <div class="container">
        <hr>
        <h4>Code: {{ $voucher->code }}</h4>
        <h5>Date Create: {{ $voucher->date_created }}</h5>
        <h5>Date Updated: {{ $voucher->date_updated }}</h5>
        <br>
        <a href="/" class="btn btn-success">Back</a>
        <a href="/delete/{{ $voucher->id }}" class="btn btn-danger">Delete</a>

        <hr>
    </div>

</body>

</html>
