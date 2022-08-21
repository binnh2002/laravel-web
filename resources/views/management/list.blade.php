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

        <title>Product List</title>
    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <div class="container" style="margin-top: 50px">
            <div class="row">
                <div class="col-md-12">
                    <h2>Product list</h2>
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <div style="float: right;">
                        <a href="{{ url('add') }}" class="btn btn-outline-success">Add new</a>
                    </div>
                    <table class="table table-striped">
                        <thead class='thead-dark'>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Producer</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Keywords</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                                <tr>
                                    <td> {{ $row->product_id }} </td>
                                    <td> {{ $row->product_title }} </td>
                                    <td> {{ $row->producer_id }} </td>
                                    <td> {{ $row->product_cat }} </td>
                                    <td> {{ $row->product_price }} </td>
                                    <td> <img src="{{ asset('img/' . $row->product_image) }}"
                                            style="height: 50px; width: 50px;">
                                    </td>
                                    <td> {{ $row->product_keywords }} </td>
                                    <td>
                                        <a href="{{ url('edit/' . $row->product_id) }}" class="btn btn-primary">Edit</a>
                                        <a href="{{ url('delete/' . $row->product_id) }}" class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this')">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav>
                        {{-- <ul class="pagination">
                            {{ $data->links() }}
                        </ul> --}}
                    </nav>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
