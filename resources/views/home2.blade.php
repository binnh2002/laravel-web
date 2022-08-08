<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laptop Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
                        <img src="https://bootstrap-ecommerce.com/bootstrap-ecommerce-html/images/logo.png">

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
                <div style="cursor: pointer;" class="circle float-right" data-toggle="modal" data-target="#loginModal"
                    data-toggle="tooltip" data-placement="top" title="LOGIN & SIGNUP"><i
                        class="fas fa-user text-primary"></i></div>

                <a href="cart.html">
                    <div class="circle float-right mr-2"><i class="fas fa-shopping-cart text-primary"></i><sup><span
                                class="badge badge-danger" style="width: 23px;">0</span></sup></div>
                </a>
            </div>
        </div>
    </div>
    <hr>
    <div class="container" style="height: 30px;">
        <nav class="navbar navbar-expand-lg navbar-light" style="height: 30px;">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse pl-4" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false"> <span> ≡ All Category</span></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Laptop </a>
                            <a class="dropdown-item" href="#">Laptop Gaming</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> MSI Laptop <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> HP Laptop </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">ASUS Laptop</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">LENOVO Laptop</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">ACER Laptop</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">DELL Laptop</a>
                    </li>
                </ul>
            </div>
        </nav>

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


    <div class="container">
        <div class="row mt-4" id="border-line">
            <div class="col-md-4">
                <div class="box">
                    <i class="fas fa-truck fa-2x mb-3 mt-4 text-primary"></i>
                    <h5>Fast delivery</h5>
                    <p>123456</p>
                </div>

            </div>

            <div class="col-md-4">
                <div class="box">
                    <i class="fas fa-truck fa-2x mb-3 mt-4 text-primary"></i>
                    <h5>Fast delivery</h5>
                    <p>56756666666</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box">
                    <i class="fas fa-truck fa-2x mb-3 mt-4 text-primary"></i>
                    <h5>Fast delivery</h5>
                    <p>ABCXYZ</p>
                </div>
            </div>
        </div>
    </div>

    <br> <br>

    <div class="container cardItem" id="products">
        <h2>Popular Products</h2>
        <br>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top img-fluid"
                        src="https://th.bing.com/th/id/OIP.GYCJmpErSScVE7MFiesXCAHaE8?pid=ImgDet&rs=1"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><a href="inner-productpage.html" class="text-dark">Just another item
                                name</a></p>

                        <div class="ratings">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <label class="text-secondary ml-3">34 reviews</label>
                        </div>
                        <p class="card-cost">$179.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top img-fluid"
                        src="https://th.bing.com/th/id/R.0bcbfd4e61eeebc0fc19f5f6125b3fbf?rik=V1z552w%2fFJ5rjw&pid=ImgRaw&r=0"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><a href="inner-productpage.html" class="text-dark">Some item name
                                here</a></p>
                        <div class="ratings">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <label class="text-secondary ml-3">34 reviews</label>
                        </div>
                        <p class="card-cost">$280.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top img-fluid"
                        src="https://thewiredshopper.com/wp-content/uploads/2022/08/Gaming-Laptops-with-Best-GPUs.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><a href="inner-productpage.html" class="text-dark">Great item name
                                here</a></p>
                        <div class="ratings">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <label class="text-secondary ml-3">34 reviews</label>
                        </div>
                        <p class="card-cost">$56.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top img-fluid"
                        src="https://th.bing.com/th/id/R.f0761f2ae48b65c61c2d9eff3358aaa4?rik=pJ4eKWBIUQ0aBg&pid=ImgRaw&r=0"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><a href="inner-productpage.html" class="text-dark">Just another item
                                name</a></p>
                        <div class="ratings">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <label class="text-secondary ml-3">34 reviews</label>
                        </div>
                        <p class="card-cost">$179.00</p>
                    </div>
                </div>
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
                <div class="card">
                    <img class="card-img-top img-fluid"
                        src="https://techrechard.com/wp-content/uploads/2020/08/Redmi-G-gaming-laptop-introduced-144Hz-display-NVIDIA-GeForce-GTX.png"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><a href="inner-productpage.html" class="text-dark">Just another item
                                name</a></p>
                        <div class="ratings">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <label class="text-secondary ml-3">34 reviews</label>
                        </div>
                        <p class="card-cost">$179.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <a href="inner-productpage.html" class="text-dark">
                    <div class="card">
                        <img class="card-img-top img-fluid"
                            src="https://thegadgetflow.com/wp-content/uploads/2020/06/Razer-Blade-15-Studio-Edition-8-Core-Laptop-07-1200x900.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">some new item here</p>
                            <div class="ratings">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-secondary"></i>
                                <label class="text-secondary ml-3">34 reviews</label>
                            </div>
                            <p class="card-cost">$280.00</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top img-fluid"
                        src="https://th.bing.com/th/id/R.3decdbdb0b4c76375845885b04ab4b1b?rik=S4k5DcbNjB6Xlg&pid=ImgRaw&r=0"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><a href="inner-productpage.html" class="text-dark">Great item name
                                here</a></p>
                        <div class="ratings">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <label class="text-secondary ml-3">34 reviews</label>
                        </div>
                        <p class="card-cost">$56.00</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top img-fluid"
                        src="https://th.bing.com/th/id/R.a2872d19b5c6b92e0b565fbdd02e6e4f?rik=8PyDK0sDZigsmw&pid=ImgRaw&r=0 "
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><a href="inner-productpage.html" class="text-dark">Just another item
                                name</a></p>
                        <div class="ratings">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <label class="text-secondary ml-3">34 reviews</label>
                        </div>
                        <p class="card-cost">$179.00</p>
                    </div>
                </div>
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


    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-light" id="exampleModalCenterTitle">Login</h5>
                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-light">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Your Email">
                            <small id="emailHelp" class="form-text text-danger">We'll never share your email with
                                anyone else!</small>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Keep me Logined</label>
                        </div>
                        <button type="submit" class="btn btn-secondary btn-sm"><a href="profile.html"
                                class="text-light">Login</a></button>
                        <a href="register.html" class="float-right text-muted">Not a Member? Register</a>
                    </form>
                </div>

            </div>
        </div>
    </div>
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
