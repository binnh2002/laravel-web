<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        @include('components.application-logo')
        <span class="brand-text font-weight-light">Shop admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="overflow-y: auto;">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="ion-navicon-round"></i>
                        <p>Menu</p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('list') }}" class="nav-link">
                                <p>Manage products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('producers') }}" class="nav-link">
                                <p>Manage Producers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/users') }}" class="nav-link">
                                <p>Manage Customer accounts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin') }}" class="nav-link">
                                <p>Manage Administrators</p>
                            </a>
                        </li>

                    </ul>
                </li>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
