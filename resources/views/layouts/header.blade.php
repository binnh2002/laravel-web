<nav x-data="{ open: false }" class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="ion-navicon-round"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('/') }}" class="nav-link">Home</a>

        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                <i class="ion-search"></i>
            </a>
            <div class="navbar-search-block">
                <form class="form-control">
                    <div class="input-group">
                        <input class="form-control form-control-navbar" name="query" type="search"
                            placeholder="Search" aria-label="Search">
                        <div class="input-group">
                            <button class="btn btn-navbar" type="submit">
                                <i class="ion-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="ion-android-cancel"></i>
                            </button>
                        </div>
                    </div>
                </form>

            </div>


        </li>
        <li class="nav-item">
            <div class="dropdown">
                <button class="btn btn-secondary" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="true">
                    {{ Auth::user()->name }}
                </button>

                {{-- <a class="dropdown-item">
                        <form action="{{ 'logout' }}" method="post">
                            @csrf
                            <a type="submit"></a>
                        </form>
                    </a> --}}
                <a href="" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <form class="" action="{{ url('logout') }}" method="post">
                        @csrf
                        <input class="" type="submit" value="Logout">
                    </form>
                </a>

            </div>
        </li>

    </ul>
</nav>
