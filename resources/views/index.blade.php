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

    <div class="top-header bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mt-2">
                    <ul>
                        <li><a href="{{ url('index') }}">Home</a></li>
                        <li><a href="">Delivery</a></li>
                        <li><a href="">Payment</a></li>

                    </ul>
                </div>
                <div class="col-md-5 mt-2 ">
                    <h6><i class="fas fa-phone-alt mr-1"></i> 0373688265 </h6>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4" id="top-logo">
        <div class="row">
            <div class="col-md-2" style="right: 5%;">
                <!-- Just an image -->
                <nav class="navbar navbar-light">
                    <a class="navbar-brand" href="#">
                        <img src="">

                    </a>
                </nav>
            </div>
            <div class="col-md-7" id="searchbar">
                <div class="input-group mt-3">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                        aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="button-addon2"><i
                                class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-2" id="icons">
                <a href="{{ url('login') }}">
                    <div style="cursor: pointer;" class="circle float-right" data-toggle="modal"
                        data-target="#loginModal" data-toggle="tooltip" data-placement="top" title="LOGIN & SIGNUP"><i
                            class="fas fa-user text-primary"></i></div>
                </a>

                <a href="cart.html">
                    <div class="circle float-right mr-2"><i class="fas fa-shopping-cart text-primary"></i><sup><span
                                class="badge badge-danger" style="width: 23px;">0</span></sup></div>
                </a>
            </div>
        </div>
    </div>
    <hr>
    <div class="container" style="height: 30px;">
        @include('home.layouts.navbar')
    </div>
    <hr>

    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://static.techspot.com/articles-info/1862/images/F-9.jpg"
                        alt="First slide" class="img-fluid">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="https://img-cdn.tnwcdn.com/image?fit=1152%2C648&url=https:%2F%2Fcdn0.tnwcdn.com%2Fwp-content%2Fblogs.dir%2F1%2Ffiles%2F2014%2F03%2F162273686.jpg&signature=7619f240a27c7a9fc3082a347dc44d94"
                        alt="Second slide" class="img-fluid">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="https://i.pinimg.com/originals/22/ec/53/22ec5362f9263eed2a66c1b302dfce25.jpg"
                        alt="Third slide" class="img-fluid">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>


    <br> <br>

    <div class="container cardItem" id="products">
        <h2>Popular Products</h2>
        <br>
        <div class="row">
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/LARe4PhjNSgJMEqTDOKDIOLdu4E_ACQmeiHlQ3AW-dmzY6XL69ODSIzMacRqp9x703x4tAPJA1SlSMWN2KcwvRP6bZRgpQyS=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><a href="inner-productpage.html" class="text-dark">Laptop MSI Katana
                                    GF76 11UC 096VN </a></p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/expSJkTXwT0KcVGoDaLkak9WwoFwX-APF1EzCCNQApI1Rz5rsotXwenJUifzNl0mPhrxAeFLtx5Jg811naUeIULEEXZiqJ9r=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><a href="inner-productpage.html" class="text-dark">Laptop ASUS ROG
                                    Zephyrus G14 GA401QE-K2097T </a></p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/5TZpvkbYzNhDDDt1CDNkXnnVuQr2-pL6Yamwm24z9Lo10SUxmoZO4xaiDOsVOQug2N1QhN-qcaCn-9qDu95nmcqdmbq7BYM=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><a href="inner-productpage.html" class="text-dark">Laptop ASUS
                                    G513IH-HN015T 90NR07P2-M00390 </a></p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/XgCVhlV8lFvGAMHO5bpNc8BsVW8wXQJfOb6x96QKqjqNWoaLWtOhOJ2NTujSYrDT7oo_yHHDZyRuzLC9dKR_xEW_UxnAvO-w=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><a href="inner-productpage.html" class="text-dark">Laptop Dell
                                    Gaming G15 5515 5515-P105F004DGR </a></p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <br>
    <br>
    <div class="container cardItem" id="newarrive">
        <h2>New Arrived</h2>
        <br>
        <div class="row">
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/wQP8wlXt_Sd0UJzgGDj01q7-aqtTFIFph65HwEMDNq2FUmic1Q3dvA12KXL4Jn2HC88VJByKpZMw-Y_tG-IWTkm-30Rqg_Co=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop Huawei Matebook D 14 Nbl- WAP9R</p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/Av5fesJ5QLbNvdND0iiD51vFX6fX3KOQt42aH_Ms-JnO1WIhKvHyRLG15q7MMibDOK8yLpve3EnYNF9QAk_-oubjsDXoy9Uhcw=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop Lenovo Legion S7 15ACH6 82K800DPVN</p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/K8-muTXgikgPTktDZSNcTziWvLay4e5b5eS_O2ACcNY4REDQTocX1HCbGK56R_sgIFjO2OA97c5T00fYmyfmdGB24g8JREHe4A=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop GIGABYTE G5 KD 52VN123SO</p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/ZcU0XZ9h_OI29gScUnZRT08HkLvjLnjXbdT4-wbcZG5neeFXBTjYePIVfDtVLQ1OEujWL5wE2rYGTKNVB1nkT3wSHMq_3KQ=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop Lenovo IdeaPad Gaming 3 15ACH6 </p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <br>
    <br>
    <footer>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>LaptopShop Company</h5>
                    <ul>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <h5>Get in touch</h5>
                    <ul>
                        <li><a href="">Call us at Go Vap 01903 200 222
                                laptopshop@gmail.com</a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                        <li><a href=""></a></li>
                    </ul>
                </div>



                <div class="col-md-3">
                    <h5>Follow us on</h5>
                    <ul>
                        <li><a href=""><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a href=""><i class="fab fa-youtube"></i> Youtube</a></li>
                        <li><a href=""><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href=""><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <footer class="footer pt-5 pb-5" id="footer">
        <div class="container">
            <span class="text-muted float-left">
                <p id="copyright">&copy; 2022 Laptop Shop</p>
            </span>
            <span class="float-right">
                <p id="footerInfo"> laptopshop@gmail.com | 0304567896 | 123 Quan Go Vap, TP.HCM </p>
            </span>
        </div>
    </footer>
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