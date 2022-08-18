<nav class="navbar navbar-expand-lg navbar-light" style="height: 30px;">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse pl-4" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                    aria-expanded="false"> <span> ≡ All Category</span></a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Laptop </a>
                    <a class="dropdown-item" href="#">Laptop Gaming</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('product/msi') }}"> MSI Laptop <span
                        class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('product/hp') }}"> HP Laptop </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('product/asus') }}">ASUS Laptop</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('product/lenovo') }}">LENOVO Laptop</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('product/acer') }}">ACER Laptop</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#{{ url('product/dell') }}">DELL Laptop</a>
            </li>
        </ul>
    </div>
</nav>
