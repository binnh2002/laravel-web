<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laptop Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home1/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <!-- fontawesom cdn link -->
    <link href="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/favicon.ico" rel="shortcut icon"
        type="image/x-icon">
    <!-- font -->

</head>

<body>
    {{-- Header --}}
    @include('home.layouts.header')
    <div class="container" style="height: 30px;">
        @include('home.layouts.navbar')
    </div>
    <hr>
    {{-- carousel --}}
    <div class="container mt-5 mb-5" id="productPage">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <img src="{{asset('img/'. $data->product_image)}}" class="figure-img img-fluid rounded">

                </div>
            </div>

            <div class="col-md-7">
                <h5>{{$data->product_title}}</h5>
                <h5 class="pt-4">${{$data->product_price}}</h5>
                <p class="description text-muted">{{$data->product_details}}</p>
                <hr>
                <table class="table mt-2">

                    <tbody>
                        <tr>
                            <th scope="row">Color</th>
                            <td>Black</td>
                        </tr>
                        <tr>
                            <th scope="row">Delivery</th>
                            <td>Bangalore, KA, India - 36</td>
                        </tr>
                    </tbody>
                </table>
                <hr>

                <div class="row">
                    <div class="col-md-3">
                        <div class="input-group">
                            <div class="input-group-prepend" onclick="add1()">
                                <span class="input-group-text"><i class="fas fa-plus"></i></span>
                            </div>

                            <input type="text" class="numberbox1 form-control" value="0">
                            <div class="input-group-append" onclick="subtract1()">
                                <span class="input-group-text"><i class="fas fa-minus"></i></span>
                            </div>
                        </div>
                    </div>


                </div><!-- row -->
                <div id="purchase-btn">
                    <button type="button" class="btn btn-sm btn-primary"><a class="text-white" href=""> Buy Now
                        </a></button>
                    &nbsp;
                    <button type="button" class="btn btn-sm btn-light"><a class="text-black" href=""> <i class="fas fa-shopping-cart pr-2"></i> Add to Cart </a> </button>
                </div>
            </div>
            <div class="container">
                <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">DESCRIPTION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">INFORMATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">REVIEWS (1)</a>
                    </li>
                </ul>
                <div class="tab-content w-100 pt-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h5>Product Description</h5>
                        <p class="text-muted">{{$data->product_title}}</p>
                        <div class="ratings">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="far fa-star text-primary"></i>

                        </div>
                        <h5 class="pt-4">${{$data->product_price}}</h5>
                        <p class="description text-muted">{{$data->product_details}}</p>

                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h5>Additional Information</h5>
                        <br>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="row">Laptop Gaming MSI Bravo 15 B5DD 276VN</th>
                                    <td><i></i> </td>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <th scope="row">CPU</th>
                                    <td><i>AMD Ryzen 5-5600H 3.30GHz upto 4.20GHz, 6 cores 12 threads</i></td>
                                </tr>

                            </tbody>

                            <tbody>

                                <tr>
                                    <th scope="row">RAM</th>
                                    <td><i>DDR4 8GB (1 x 8GB) 3200MHz; 2 slots, Up to 64GB</i></td>
                                </tr>

                            </tbody>

                            <tbody>

                                <tr>
                                    <th scope="row">Hard drive</th>
                                    <td><i>512GB NVMe PCIe Gen3x4 SSD</i></td>
                                </tr>

                            </tbody>

                            <tbody>

                                <tr>
                                    <th scope="row">Card</th>
                                    <td><i>Radeon RX5500M 4GB</i></td>
                                </tr>

                            </tbody>

                            <tbody>

                                <tr>
                                    <th scope="row">Monitor</th>
                                    <td><i>R15.6 inch FHD (1920*1080), 60Hz 45%NTSC IPS-Level</i></td>
                                </tr>

                            </tbody>


                        </table>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="review-rating float-right mt-5">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="far fa-star text-primary"></i>

                        </div>
                        <h5>1 review for Fantasy T-shirt</h5>
                        <br>
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img src="https://mdbootstrap.com/img/Photos/Others/placeholder1.jpg" alt="IMAGE LOADING" class="img-fluid">
                                    </div>
                                    <div class="col-md-10">
                                        <p class="mb-1"><strong> Marthasteward </strong> – Jan 28, 2020 </p>
                                        <p>Nice one, love it!</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr>

                        <h5 class="mt-3 pt-2">Add a Review</h5>
                        <p>Your email address will not be published.</p>
                        <div class="ratings">
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="fas fa-star text-primary"></i>
                            <i class="far fa-star text-primary"></i>

                        </div>
                        <form class="mt-3" id="addreview">
                            <div class="form-group text-muted">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Your Review"></textarea>
                            </div>
                            <div class="form-group text-muted">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group text-muted">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Add a Review</button>
                            </div>
                        </form>

                    </div>
                </div>
                <br><br>
                <hr>
                <br>
                <br>
                <br>
            </div>
        </div>
    </div>
    <br>
    <br>
    {{-- footer --}}
    @include('home.layouts.footer')
</body>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
<script src="js/script.js"></script>

</html>
