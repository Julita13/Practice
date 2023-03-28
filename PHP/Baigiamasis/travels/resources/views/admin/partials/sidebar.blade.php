<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('adminlte/index3.html') }}" class="brand-link">
        <img src="{{asset('adminlte/dist/img/detailed-travel-logo_23-2148616611.avif')}} " alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light" style="color:pink">Best Travel Agency</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <p style="color:white; margin-top: 1.5rem">Your travel manager:</p>
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('adminlte/dist/img/112574073.jpg') }}"  class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="https://github.com/Julita13?tab=repositories" class="d-block">Julita Mažuolytė-Mečkovska</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-header" style="color:pink;">Data tables</li>
                <li class="nav-item">
                    <a href="{{route('admin.destinations.index')}}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Destinations
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.capitals.index')}}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Capitals
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.languages.index')}}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Languages
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.operators.index')}}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Tour Operators
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>