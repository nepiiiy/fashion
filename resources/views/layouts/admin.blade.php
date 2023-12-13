<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>NEPIIY | Fashion & Style</title>
    <link
        href="https://i.postimg.cc/13c2WhpQ/Black-White-Elegant-Feminine-Fashion-Clothing-Logo-1-removebg-preview.png rel="shortcut
        icon" type="image/png">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
    <style>
        .active-icon {
            color: #fff;
        }
    </style>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{ asset('template/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor"
                            class="bi bi-person" viewBox="0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                        </svg>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">{{ Auth::user()->name }}</span>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button href="#" class="dropdown-item" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                    <path fill-rule="evenodd"
                                        d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                </svg> Logout
                            </button>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('img/footer.png') }}" alt="AdminLTE Logo" class="brand-image elevation-3"
                    style="opacity: .8">
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="/dashboard_admin" class="nav-link {{ request()->is('dashboard_admin') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    DASHBOARD
                                </p>
                            </a>
                        </li>
                        <li class="nav-item ms-auto">
                            <a href="/berita" class="nav-link {{ request()->is('berita') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-regular fa-newspaper"></i>
                                <p class="ms-3">
                                    BERITA
                                </p>
                            </a>
                        </li>
                        <li class="nav-item ms-auto">
                            <a href="/event" class="nav-link {{ request()->is('event') ? 'active' : '' }}">
                                <i class="nav-icon far fa-regular fa-calendar"></i>
                                <p class="ms-3">
                                    EVENTS
                                </p>
                            </a>
                        </li>
                        <li class="nav-item ms-auto">
                            <a href="/lifestyle" class="nav-link {{ request()->is('lifestyle') ? 'active' : '' }}">
                                <svg class="nav-icon" xmlns="http://www.w3.org/2000/svg" height="20" width="14"
                                    viewBox="0 0 320 512" fill="#fff">
                                    <path
                                        d="M160 0a48 48 0 1 1 0 96 48 48 0 1 1 0-96zM88 384H70.2c-10.9 0-18.6-10.7-15.2-21.1L93.3 248.1 59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l53.6-89.2c20.3-33.7 56.7-54.3 96-54.3h11.6c39.3 0 75.7 20.6 96 54.3l53.6 89.2c9.1 15.1 4.2 34.8-10.9 43.9s-34.8 4.2-43.9-10.9l-33.9-56.3L265 362.9c3.5 10.4-4.3 21.1-15.2 21.1H232v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V384H152v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V384z" />
                                </svg>
                                <p class="ms-3">
                                    LIFESTYLE
                                </p>
                            </a>
                        </li>
                        <li class="nav-item  {{ request()->is('baju*', 'celana*', 'topi*', 'tas*', 'sepatu*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link">
                                <span class="material-symbols-outlined">
                                </span>
                                <p>
                                    OUTFIT
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/baju" class="nav-link {{ request()->is('baju') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>BAJU</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/celana" class="nav-link {{ request()->is('celana') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>CELANA</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/topi" class="nav-link {{ request()->is('topi') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>TOPI</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/tas" class="nav-link {{ request()->is('tas') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>TAS</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/sepatu" class="nav-link {{ request()->is('sepatu') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>SEPATU</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            @yield('content')
            @yield('editor')

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2023 <a href="dashboard_admin" style="color: #fff">Nepiiy | Fashion &
                    Style</a>.</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/dist/js/adminlte.js') }}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ asset('template/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('template/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('template/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('template/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('template/plugins/chart.js/Chart.min.js') }}"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('template/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('template/dist/js/pages/dashboard2.js') }}"></script>
    @yield('script')
    @yield('hapus')
</body>

</html>
