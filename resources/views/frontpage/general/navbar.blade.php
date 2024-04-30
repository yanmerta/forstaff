<nav class="site-nav">
    <div class="close-menu">
        <span>Close</span> <i class="ei ei-icon_close"></i>
    </div>
    <div class="site-logo">
        <a href="{{ route('index') }}" class="logo">
            <img src="https://www.forstaff.id/assets/assets/img/main-logo-forstaff.png" alt="Forstaff Logo"
                title="Forstaff Logo" class="main-logo" width="150" height="48" />
            <img src="https://www.forstaff.id/assets/assets/img/sticky-logo-forstaff.png" alt="Forstaff Logo"
                title="Forstaff Logo" class="sticky-logo" width="150" height="53" />
        </a>
    </div>
    <div class="menu-wrapper" data-top="992">
        <ul class="site-main-menu">
            <li>
                <a class="current_page" href="{{ route('index') }}">Beranda</a>
            </li>
            <li>
                <a class="" href="{{ route('frontpage.fitur') }}">Fitur</a>
            </li>
            <li>
                <a class="" href="{{ route('frontpage.about') }}">Tentang</a>
            </li>
            <li>
                <a class="" href="{{ route('frontpage.price') }}">Harga</a>
            </li>
            <li>
                <a class="" href="{{ route('frontpage.blogs') }}">Blog</a>
            </li>
            <li>
                <a class="" href="{{ route('frontpage.contact') }}">Kontak Kami</a>
            </li>
        </ul>
        <div class="nav-right">
            <a href="#" target="_blank" class="nav-btn">Daftar Sekarang</a>
        </div>
    </div>
</nav>
