<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="/lte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->email ?? 'Admin1'; }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="/dashboard" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/" target="_blank" class="nav-link">
                    <i class="nav-icon fas fa-link"></i>
                    <p>
                        Lihat Website
                    </p>
                </a>
            </li>
            <li class="nav-item menu-open">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Data Master
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/sliders" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Sliders</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/services" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Data Services</p>
                        </a>
                    </li>
            </li>
            <li class="nav-item">
                <a href="/features" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Features</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/portofolios" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Portofolios</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/clients" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Clients</p>
                </a>
            </li>
        </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Tentang
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-phone"></i>
                <p>
                    Kontak
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-arrow-left"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
