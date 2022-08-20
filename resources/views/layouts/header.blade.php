<nav x-data="{ open: false }" class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="ion-navicon-round"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('index') }}" class="nav-link">Home</a>
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
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" name="query" type="search"
                            placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
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
        <x-dropdown class="text-gray-500">
            <x-slot name="trigger">
                <button>{{ Auth::user()->name }}</button>
            </x-slot>
            <a href="{{ route('logout') }}">Logout</a>
        </x-dropdown>
    </ul>
</nav>
