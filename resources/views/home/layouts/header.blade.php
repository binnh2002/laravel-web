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
        <div class="col-md-3 mt-2">

            <a href="#">
                <div class="circle float-right mr-2"><i class="fas fa-shopping-cart text-primary"></i><sup><span
                            class="badge badge-danger" style="width: 23px;">0</span></sup></div>
            </a>

            @if (Auth::check())
                <div class="dropdown">
                    <button class="btn btn-secondary inline-flex justify-center" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>

                    <div href="#" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a href="#" class="dropdown-item">
                            <form action="{{ url('logout') }}" method="post">
                                @csrf
                                <button class="inline-flex justify-center w-full border border-0 bg-white"
                                    type="submit">Logout</button>
                            </form>
                            <a href="#" class="dropdown-item">
                                <a class="inline-flex justify-center w-full border border-0 bg-white"
                                    href="{{ url('/user/profile/edit/' . Auth::user()->id) }}">Profile</a>
                            </a>
                        </a>
                    </div>
                </div>
            @else
                <a class="nav-link" id="tab-login" data-mdb-toggle="pill" href="{{ url('/login') }}" role="tab"
                    aria-controls="pills-login" aria-selected="true">Login</a>
                <a class="nav-link" id="tab-register" href="{{ url('/register') }}">Register</a>
            @endif
        </div>
    </div>
</div>
<hr>
