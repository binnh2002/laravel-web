<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LAPTOP HP</title>
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
                    <img class="d-block w-100"
                        src="https://bizweb.dktcdn.net/100/409/321/files/laptop-hp-spectre.jpg?v=1617692492108"
                        alt="First slide" class="img-fluid">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="https://laptophainam.com/wp-content/uploads/2021/12/laptop-cu-hp-elitebook-840-g3-7.jpg"
                        alt="Second slide" class="img-fluid">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"
                        src="https://cdn.tgdd.vn/Files/2021/09/14/1382693/conenmualaptophp_1280x720-800-resize.png"
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
                            src="https://lh3.googleusercontent.com/pNS0xg3s-4WyIJA8OFwJ-HTKW4kiE99okHdt2hv7uNeOpEutD8z4B_V8jfJOxTXJ4ipuJdsEtOR12wBuzq4=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop HP 340s G7 224L0PA (14" HD/Intel Core i3)</p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/1T_GR9qGlU7v4_RA4gZIHiDg7c3pwXldLbJUZJRjgxzEuLOO-4mSM02A1anCTS3bxvH6CjK4c0_jQtlQDts=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop HP Envy 13-ba1028TU 2K0B2PA</p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/_HFuKjRt5qovjNkA880a6i8bL0ytOY8PGq7sCKiPVw-les6kLK9KV918EnBsTD7P4t0qpMm455lI6puu1HLsZi521YCL1bicEg=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop HP 14s-fq1080AU 4K0Z7PA </p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/IaenqFnWrJyXICaOqUPeswNvl1jXYhR5Aejs3Jwwzs2l0fLFksAFdYg5nPSGdY68z90o5wJJwyyo4lwHjCUQHgqWq61in98=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop HP VICTUS 16-d0204TX 4R0U5PA</p>
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
                            src="https://lh3.googleusercontent.com/faxQ6ixPdQ9yP_my02fO5XXovk2HPhVRC_hSoCz4W5vVXwPO7W5Z47gOU39Gr8csbV-wfOUA2WJBsYyY8m9tSkdXpO71iLQ=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop HP ProBook 450 G9 6M0Z5PA</p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/uC6sn_dwq7thX2Xg1fgZTnN7gA72dyJx9aSZTZ9Mld6c8wPOmMKrAwxre5_rU7GAXhp1k4LQaY9oFTiE5csQpNBsW500WF0e=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop HP 15s-fq2660TU 6K793PA</p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/GT-gDqGBo0cIp1deTPf9OyLndTPgfqZM-cDqtUZvpZotbto5OAUAKoHL07olRc1DnDjInLjVk8HrrNTvrIrNb8SB3IE_W7_F=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop HP OMEN 16-b0177TX 5Z9Q8PA</p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/XG0pDK6bLDAn9h-lKsrT0gOh_VmjSh14Dwk6gFCFIhZ74JNqU7Aab70w2QaFbO7voQgNi4Do2CSIl0LqRWPvvBlaqOxS2Z8=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop HP ProBook 440 G8 614F2PA</p>
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
                            src="https://lh3.googleusercontent.com/J_rIDWU9QX9TT4VxwQz7EhtgVv23VYp340pdzKKDI-QwKIbS5AyJFcSIY9JlCjJzzD_IvLHhXC0mU94STb7BhJlT2Fttyaym=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop HP 240 G8 3D0E8PA (14" /Intel Core i7)</p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/v39eTiCN0BBrLd8vOOcIXx8RLoRMtiPWVqjnm7AfAzbJGQwcGG_AnVJqLpjeN4-5gMYZ5QWpU5pQOWz_TokT0iZJjUHv9OMS=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop HP ProBook 450 G8 614K4PA</p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/dXUwHKzuUXLLmjPw2ql_tyj7jY52Two9LRp2mjLzQ6jm9l2s8zdhpjgzfh4gquDckVyB7ffVAD5h19IQp1jfzfGI2p6tvWLV=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop HP ProBook 440 G9 6M0X8PA </p>
                            <p class="card-cost">$1500</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://lh3.googleusercontent.com/D2e5B-fKGzOiHYuYsShiGdNL8kaq0fNCYes9LItvZuRjZ9XapPvvr-K4zocS5mkrPbHgO_OkMJ5j75M4_2kZj5UWq1lA_1Q=w500-rw"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Laptop HP Spectre X360 13-aw2101TU</p>
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
