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
        <h4 class="mb-2">Hello {{ session('user')->firstname }}</h4>
        <a href="/logout" class="mb-5">Logout</a>
        <br><br>
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-9">
             
                
                <h5>Your list of Voucher Code ({{ $vouchers->total() }})</h5>
            </div>
            <div class="col-md-3">
                <form action="/generate" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary w-100">Generate Voucher Code</button>
                </form>
            </div>
        </div>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Date Created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vouchers as $voucher)
                    <tr>
                        <td>{{ $voucher->code }}</td>
                        <td>{{ $voucher->date_created }}</td>
                        <td>
                            <a href="/view/{{ $voucher->id }}" class="btn btn-outline-success">View</a>
                            <a href="/delete/{{ $voucher->id }}" class="btn btn-outline-danger">Delete</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>

        </table>
        {{ $vouchers->links() }}
    </div>

</body>

</html>
