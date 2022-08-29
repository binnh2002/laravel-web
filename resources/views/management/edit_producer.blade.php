@extends('home1')
@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Edit producer</title>
    </head>

    <body>
        <div class="container" style="margin-top: 50px">
            <div class="row">
                <div class="col-md-12">
                    <h1>Edit producer</h1>

                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ url('producers/update') }}" method="POST">
                        @csrf
                        <div class="md-3">
                            <label for='id' class='form-label'>ID</label>
                            <input type="text" name="id" class="form-control" value="{{ $data->producer_id }}"
                                readonly>
                        </div>
                        <div class="md-3">
                            <label for='name' class='form-label'>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $data->producer_name }}">
                        </div>
                        <div class="md-3">
                            <label for='name' class='form-label'>Image</label>
                            <input type="file" name="image" class="form-control" value="{{ $data->producer_image }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ url('producers') }}" class="btn btn-success">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
@endsection
