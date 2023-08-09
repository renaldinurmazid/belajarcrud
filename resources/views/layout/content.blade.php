@include('layout.header')

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <div class="mr-auto"></div>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Renaldi Nurmazid</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="fas fa-lock"></i> Change Password
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="index.html">SMKN 1 SUBANG</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">NESAS</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">Menu Utama</li>
                        <li><a class="nav-link" href="{{ url('dashboard') }}"><i class="fa fa-home"></i>
                                <span>Dashboard</span></a></li>
                        <li><a class="nav-link" href="{{ url('peserta') }}"><i class="fa fa-user"></i>
                                <span>Peserta Didik</span></a></li>

                        {{-- layout menu utama    --}}
                        {{-- <li class="menu-header">Menu Utama</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link has-dropdown"><i
                                    class="fas fa-fire"></i><span>Dashboard</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                                <li><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                            </ul>
                        </li>
                        <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i><span>Blank Page</span></a></li>
                    </ul> --}}

                        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                            <a href="{{ url('logout') }}" class="btn btn-danger btn-lg btn-block btn-icon-split">
                                <i class="fa fa-sign-out-alt"></i> Logout
                            </a>
                        </div>

                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>
        </div>
    </div>
    @include('layout.footer')
</body>
