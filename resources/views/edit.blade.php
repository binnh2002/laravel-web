<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add product</title>
  </head>
  <body>
        <div class="container" style="margin-top: 50px">
            <div class="row">
                <div class="col-md-12">
                    <h1>Add new product</h1>

                    @if (Session::has('success'))
                       <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <form action="{{ url('update')}}" method="POST">
                        @csrf
                        <div class="md-3">
                            <label for='id' class='form-label'>ID</label>
                            <input type="text" name="id" class="form-control" value="{{ $data->productID}}" readonly>
                        </div>
                        <div class="md-3">
                            <label for='name' class='form-label'>Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $data->productName}}">
                        </div>
                        <div class="md-3">
                            <label for='price' class='form-label'>Price</label>
                            <input type="text" name="price" class="form-control" value="{{ $data->productPrice}}">
                        </div>
                        <div class="md-3">
                            <label for='details' class='form-label'>Details</label>
                            <textarea type="text" name="details" rows="5" class="form-control" >{{ $data->productDetails}}</textarea>
                        </div>
                        <div class="md-3">
                            <label for='image1' class='form-label'>Image</label>
                            <input type="file" name="image1" class="form-control" value="{{ $data->productImage1}}">
                        </div>
                        <div class="md-3">
                            <label for='producer' class='form-label'>Producer</label>
                            <input type="number" name="producer" class="form-control" value="{{ $data->producerID}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                       <a href="{{ url('list')}}" class="btn btn-success">Back</a>
                    </form>
                </div>
            </div>
        </div>
  </body>
