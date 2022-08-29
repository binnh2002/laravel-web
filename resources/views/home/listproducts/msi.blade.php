<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAPTOP MSI</title>
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
                        <li><a href="index.html">Home</a></li>
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

                <a href="#">
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
                        src="https://phucanhcdn.com/media/lib/02-07-2022/laptop-msi-gaming-stealth-gs66-12ugs-227vn-ha2.jpg"
                        alt="Second slide" class="img-fluid">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://i.ytimg.com/vi/UyD9vA93P-w/maxresdefault.jpg"
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
                            src="https://lh3.googleusercontent.com/CBjCnqXoK4sOkZIRV3uB7M4eONzSZJF7Q0AzxiWqqIlLX0fh6qR2tEF5TixeafK2Z8xoD3UyeZodGn7m2vZAnyi9CfMMOs2I=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop MSI Thin GF65 10UE 286VN</p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/roiOsTiqv2elSw_ZsoBuuXzPwlrjXMCDbyfwUSkxrnDebUQ4l2aRhq41qaBPyiHnSiPXHMWYni0RnL7EdUp3xe8Ik_wk-ho=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop MSI Modern 15 A10M 667VN</p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/wTh3PmARs_laU84NP1STw9IG8uiL68XzYopb4QA_ZeXmkrgv81vtN5XW5MQG1hvDtpjoGo0ag1f7l3t_UaAfqnvBK_Al5b7yEA=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop MSI Bravo 15 B5DD 264VN</p>
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
        <br>
        <div class="row">
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/nwfy6HMafryEkrxyp6tKXdyicj8aHrn6dK3IKWoJkJpBVFJqhp8UL3drx1FOxOItw2dbIZv2mU3SAvl8YZd3AunVDqdHgBg=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop MSI Alpha 15 B5EEK 205VN</p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/JWq7Iiz0C1H8Re9XAz_O_tiWVWj5uPB1pOFJdND8RTDCrz1KzqGQj1E3kmzcGYpzS2BWfU3NOqaWj0i1bUrTF2SMmkDPoJI=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop MSI Crosshair 15 B12UEZ 460VN </p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/-UmweR-8TD53iuXi4b1moaavCUpg9S3S-iW0Gteoq-EzOOotdDxuXoFdQ7O5_pWfZOgDu8uXnc75b_L9zXunXslSycc35B-SJA=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop MSI Raider GE66 12UGS 405VN</p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/gX9uhXTFL-XiYiW-l5DAz2tutiO9aGORtYuyQdYDBNXskQuy0ZyWlGCUFqCVKyK4QchMQaS3048CDQN58hB0QJsxLOq3E1Z9=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop MSI GP66 Leopard 11UE 643VN </p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <br>
    <br>

    <div class="container cardItem" id="recommend">
        <div id="heading">
        </div>
        <br>
        <div class="row">
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/5uVk9c_m5_fYWC5aTpgBTBJF7hS6bfmR63UXcCr7mSuIkeWqS8Gz8rYD3aSk9xUZsNMvLdQfWgcqUTlaCfo-2-jF8NkZgMRo=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop MSI Prestige 14 A11SC 203VN</p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/2WejeGNyIMZmtds0uPLgNDum5yPY-QbhO-g7STxG4gRPJQ4mHt0FgTBnGoqfc2q4TYAqp0B-6hsldTqx1jC3wecQ0W6okHzq=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop MSI Prestige 15 A11SC-037VN 037VN</p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/zv-LptUN4QTrDqaj4reDDNvQzB3vVeYcRWsfASlv2dOf0knKYbubS-JX6L4pxsPoJTL1DngCHi5zJCnauYHgO-r4MlUS1c4=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop MSI GF63 Thin 11SC 664VN</p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/bAL9hw6lSz45Sh2g_tsVA5wp7TVgmI-T94Q_rfApjwD_LJYZmZ8Rz2QX68LpdTlT4DAIzffzNxWqmxxK9um_RZYhL0HNRlt8=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop MSI GF63 Thin 11SC 662VN </p>
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
