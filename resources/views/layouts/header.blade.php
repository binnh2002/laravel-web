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
                <button
                    class="btn btn-secondary inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white"
                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                href="{{ url('/admin/profile/edit/' . Auth::user()->id) }}">Profile</a>
                        </a>
                    </a>

                </div>
            </div>
        </li>

    </ul>
</nav>
