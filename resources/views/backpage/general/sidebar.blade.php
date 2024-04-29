<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/template_admin/dist/img/forstaff.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">
            <h3>Forstaff</h3>
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image pt-3">
                {{-- <img src="{{ asset('storage/public/assets/template_admin/dist/img/blank.png') }}"
                    class="img-circle elevation-2" alt="User Image"> --}}
                @if (Auth::check())
                    @if (Auth::user()->photo)
                        <img src="{{ asset('public/' . Auth::user()->photo) }}" class="img-circle elevation-2"
                            style="border-radius: 50%; object-fit: cover; object-position: center; width: 40px; height: 42px;"
                            alt="User Image">
                    @else
                        <img src="{{ asset('assets/template_admin/dist/img/blank.png') }}"
                            class="img-circle elevation-2" alt="User Image">
                    @endif
                @endif
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                <div class="float-left">
                    <a href="{{ route('admin.profile.index') }}" class="btn-modal-general" data-route="#">
                        <small><i class="far fa-edit"></i> edit profile</small>
                    </a>
                </div>
                <div class="float-right px-2">
                    <a href="{{ route('admin.logoutProcess') }}">
                        <small><i class="fas fa-sign-out-alt"></i> logout</small>
                    </a>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-header">INTRO</li>
                <li class="nav-item {{ request()->routeIs('admin.admin.dashboard') ? 'menu-open active' : '' }}">
                    <a href="{{ route('admin.admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('index') ? 'menu-open active' : '' }}">
                    <a href="{{ route('index') }}" class="nav-link">
                        <i class="nav-icon fas fa-globe"></i>
                        <p>
                            See Website
                        </p>
                    </a>
                </li>
                <li class="nav-header">MANAGE PAGE</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/profile.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/e-commerce.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>E-commerce</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/projects.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Projects</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-add.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-edit.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Edit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/project-detail.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Detail</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/contacts.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contacts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/faq.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>FAQ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/examples/contact-us.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact us</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">MASTER DATA</li>
                <li class="nav-item {{ request()->routeIs('admin.admin.users') ? 'menu-open active' : '' }}">
                    <a href="{{ route('admin.admin.users') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Data Admin
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Dapatkan path URL saat ini
            var path = window.location.pathname;

            // Dapatkan semua item menu dengan class 'nav-link'
            var menuItems = document.querySelectorAll('.nav-link');

            // Loop melalui setiap item menu
            menuItems.forEach(function(item) {
                // Dapatkan atribut href dari item menu
                var href = item.getAttribute('href');

                // Periksa apakah path saat ini dimulai dengan atribut href
                if (path.startsWith(href)) {
                    // Hapus class 'active' dari semua item menu
                    document.querySelectorAll('.nav-item').forEach(function(navItem) {
                        navItem.classList.remove('menu-open', 'active');
                    });

                    // Tambahkan class 'active' ke 'nav-item' parent
                    item.closest('.nav-item').classList.add('menu-open', 'active');
                }
            });
        });
    </script>
