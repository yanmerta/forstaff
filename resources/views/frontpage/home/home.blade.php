@extends('frontpage.general.main')
@section('content')
    <section class="banner banner-one">
        <div class="circle-shape" data-parallax='{"y" : 230}'>
            <img src="https://www.forstaff.id/assets/media/banner/circle-shape.png" alt="circle" width="800"
                height="800" />
        </div>
        <div class="container">
            <div class="banner-content-wrap">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <h1 class="banner-title wow pixFadeUp font-banner-title" data-wow-delay="0.3s">
                                <span>{{ $data->home_title }}
                            </h1>
                            <p class="description wow pixFadeUp" data-wow-delay="0.5s">
                                {{ $data->home_description }}
                            </p>
                            <a href="https://www.forstaff.id/tentang" class="pxs-btn banner-btn wow pixFadeUp"
                                data-wow-delay="0.6s">{{ $data->button_teks }}</a>
                            <div class="margin-top20" data-wow-delay="0.8s">
                                <img src="https://www.forstaff.id/assets/assets/img/google-play-badge.png"
                                    alt="Desktop dan mobile view" title="Desktop dan mobile view" class="padding-store-3"
                                    width="140" height="44" />
                                <img src="https://www.forstaff.id/assets/assets/img/app-store-badge.png"
                                    alt="Desktop dan mobile view" title="Desktop dan mobile view" class="padding-store-3"
                                    width="140" height="44" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="promo-mockup wow pixFadeLeft">
                            <img src="{{ asset('/storage/public/' . $data->home_image) }}" alt="Desktop dan mobile view"
                                title="Desktop dan mobile view" width="1000" height="539" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-shape">
            <img src="https://www.forstaff.id/assets/media/banner/shape-bg.png" alt="shape-bg" title="shape-bg"
                width="1903" height="495" />
        </div>
    </section>
    <section class="featured">
        <div class="container">
            <div class="section-title text-center wow pixFade">
                <h2 class="title">Kenapa harus Forstaff ?</h2>
            </div>
            <div class="row">
                <div class="col-md-4 padding-left-right-25">
                    <div class="pixsass-icon-box-wrapper style-one wow pixFadeLeft" data-wow-delay="0.3s">
                        <div class="iapp-icon-box-icon text-center">
                            <img src="https://www.forstaff.id/assets/media/feature/sistem-terintegrasi.png"
                                alt="Sistem Terintegrasi" title="Sistem Terintegrasi" width="140" height="139" />
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title text-center margin-bottom30">
                                <a href="#">Sistem Terintegrasi</a>
                            </h3>
                            <p align="justify">
                                Awasi segala jenis aktivitas perusahaan dari mana saja.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 padding-left-right-25">
                    <div class="pixsass-icon-box-wrapper style-one wow pixFadeLeft" data-wow-delay="0.5s">
                        <div class="iapp-icon-box-icon text-center">
                            <img src="https://www.forstaff.id/assets/media/feature/mobile-apps.png" alt="Mobile Apps"
                                title="Mobile Apps" width="140" height="139" />
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title text-center margin-bottom30">
                                <a href="#">Mobile Apps</a>
                            </h3>
                            <p align="justify">
                                Aplikasi Android dan IOS Forstaff membuat anda tak akan
                                pernah melewatkan tugas penting perusahaan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 padding-left-right-25">
                    <div class="pixsass-icon-box-wrapper style-one wow pixFadeLeft" data-wow-delay="0.7s">
                        <div class="iapp-icon-box-icon text-center">
                            <img src="https://www.forstaff.id/assets/media/feature/request-approval.png"
                                alt="Request and Approval" title="Request and Approval" width="140" height="139" />
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title text-center margin-bottom30">
                                <a href="#">Request and Approval</a>
                            </h3>
                            <p align="justify">
                                Forstaff adalah aplikasi yang dapat melakukan manajemen
                                request dan approval. Staff dapat melakukan request tugas
                                untuk selanjutnya dapat di setujui oleh staff yang dituju.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="editor-design margin-bottom30">
        <div class="container">
            <div class="row">
                <div class="editure-feature-image wow pixFadeRight">
                    <div class="image-one" data-parallax='{"x" : 30}'>
                        <img src="https://www.forstaff.id/assets/media/feature/view-mobile.png" class="wow pixFadeRight"
                            data-wow-delay="0.3s" alt="Mobile View" title="Mobile View" width="720" height="594" />
                    </div>
                    <div class="image-two">
                        <div class="image-two-inner" data-parallax='{"x" : -30}'>
                            <img src="https://www.forstaff.id/assets/media/feature/popup-sign-in.png"
                                class="wow pixFadeLeft margin-bottom15" data-wow-delay="0.5s" alt="Popup Sign In"
                                title="Popup Sign In" width="259" height="203" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-6">
                    <div class="editor-content">
                        <div class="section-title style-two">
                            <h2 class="title wow pixFadeUp" data-wow-delay="0.3s">
                                Aplikasi Forstaff
                            </h2>
                            <p class="wow pixFadeUp" data-wow-delay="0.5s">
                                Aplikasi absensi, notifikasi berita dan informasi.
                            </p>
                        </div>
                        <div class="description wow pixFadeUp" data-wow-delay="0.7s">
                            <p align="justify">
                                Dibantu dengan aplikasi forstaff yang dapat digunakan untuk
                                melakukan absensi karyawan dengan tingkat keamanan yang
                                tinggi.
                            </p>
                            <a href="https://www.forstaff.id/tentang" class="pix-btn wow pixFadeUp"
                                data-wow-delay="0.9s">Pelajari lebih lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-bg">
            <img src="https://www.forstaff.id/assets/media/background/shape_bg.png" class="wow fadeInLeft" alt="shape-bg"
                title="shape-bg" width="1448" height="1137" />
        </div>
    </section>
    <section class="revolutionize">
        <div class="bg-angle"></div>
        <div class="container">
            <div class="section-title dark-title text-center">
                <h2 class="title wow pixFadeUp">Mudah Dioperasikan</h2>
                <h3 class="sub-title wow pixFadeUp sub-title-transform" data-wow-delay="0.3s">
                    Dengan tampilan yang simpel dan powerful membuat sistem akan
                    dengan sangat mudah dioperasikan sehingga tidak mengurangi
                    fungsionalitas sistem sedikitpun
                </h3>
            </div>
            <div id="pix-tabs" class="wow pixFadeUp" data-wow-delay="0.5s">
                <ul id="pix-tabs-nav">
                    <li><a href="#tab1">Dashboard HRD </a></li>
                    <li><a href="#tab2">Dashboard Staff </a></li>
                    <li><a href="#tab3">Absensi</a></li>
                    <li><a href="#tab4">Manajemen Staff</a></li>
                </ul>
                <div id="pix-tabs-content">
                    <div id="tab1" class="content">
                        <img src="https://www.forstaff.id/assets/media/revolutionize/dashboard-hrd.png"
                            alt="Dashboard HRD" title="Dashboard HRD" width="1170" height="731" />
                        <div class="shape-shadow"></div>
                    </div>
                    <div id="tab2" class="content">
                        <img src="https://www.forstaff.id/assets/media/revolutionize/dashboard-staff.png"
                            alt="Dashboard Staff" title="Dashboard Staff" width="1170" height="731" />
                        <div class="shape-shadow"></div>
                    </div>
                    <div id="tab3" class="content">
                        <img src="https://www.forstaff.id/assets/media/revolutionize/absensi.png" alt="Absensi"
                            title="Absensi" width="1170" height="731" />
                        <div class="shape-shadow"></div>
                    </div>
                    <div id="tab4" class="content">
                        <img src="https://www.forstaff.id/assets/media/revolutionize/manajemen-staff.png"
                            alt="Manajemen Staff" title="Manajemen Staff" width="1170" height="731" />
                        <div class="shape-shadow"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="featured-two">
        <div class="container">
            <div class="section-title text-center">
                <h3 class="sub-title wow pixFadeUp">Fitur Kami</h3>
                <h2 class="title wow pixFadeUp" data-wow-delay="0.2s">
                    Kenapa harus ForStaff ?
                </h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 padding-left-right-25">
                    <div class="pixsass-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.4s">
                        <div class="iapp-icon-box-icon text-center">
                            <img src="https://www.forstaff.id/assets/media/feature/hrd-apss.png" alt="HRD Apps"
                                title="HRD Apps" width="100" height="100" />
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title text-center">
                                <a href="#">HRD Apps</a>
                            </h3>
                            <p align="justify">
                                Melakukan manajemen data Staff oleh HRD yang berisikan data
                                karyawan, kontrak, tugas, permintaan, persetujuan dan
                                sebagainya
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-left-right-25">
                    <div class="pixsass-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.5s">
                        <div class="iapp-icon-box-icon text-center">
                            <img src="https://www.forstaff.id/assets/media/feature/staff-apps.png" alt="Staff Apps"
                                title="Staff Apps" width="100" height="100" />
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title text-center">
                                <a href="#">Staff Apps</a>
                            </h3>
                            <p align="justify">
                                Staff dapat melakukan update data diri dengan menggunakan
                                Aplikasi Staff. Selain itu, staff juga akan melihat hal hal
                                yang harus dilakukan lewat list permintaan yang ada pada
                                aplikasi
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-left-right-25">
                    <div class="pixsass-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.6s">
                        <div class="iapp-icon-box-icon text-center">
                            <img src="https://www.forstaff.id/assets/media/feature/request-n-approval.png"
                                alt="Request and Approval" title="Request and Approval" width="100" height="100" />
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title text-center">
                                <a href="#">Request and Approval</a>
                            </h3>
                            <p align="justify">
                                Forstaff adalah aplikasi yang dapat melakukan manajemen
                                request dan approval. Staff dapat melakukan request tugas
                                untuk selanjutnya dapat di setujui oleh staff yang dituju
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-left-right-25">
                    <div class="pixsass-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.7s">
                        <div class="iapp-icon-box-icon text-center">
                            <img src="https://www.forstaff.id/assets/media/feature/kpi.png" alt="KPI" title="KPI"
                                width="100" height="100" />
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title text-center">
                                <a href="#">KPI</a>
                            </h3>
                            <p align="justify">
                                KPI (Key Performance Indicator) adalah gambaran penilaian
                                performa dari staff. Hal ini sangat penting untuk mengetahui
                                penyebab penyebab terjadinya penurunan performa yang
                                mempengaruhi omset perusahaan anda. Forstaff hadir sebagai
                                solusi untuk mengetahui secara sistematis KPI dari karyawan
                                anda
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-left-right-25">
                    <div class="pixsass-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.8s">
                        <div class="iapp-icon-box-icon text-center">
                            <img src="https://www.forstaff.id/assets/media/feature/statistic.png" alt="Statistic"
                                title="Statistic" width="100" height="100" />
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title text-center">
                                <a href="#">Statistic</a>
                            </h3>
                            <p align="justify">
                                Laporan statistic yang akan sangat berguna untuk memudahkan
                                membaca data yang dihasilkan oleh aktifitas HRD
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 padding-left-right-25">
                    <div class="pixsass-icon-box-wrapper style-two wow pixFadeRight" data-wow-delay="0.9s">
                        <div class="iapp-icon-box-icon text-center">
                            <img src="https://www.forstaff.id/assets/media/feature/data-report.png" alt="Report"
                                title="Report" width="100" height="100" />
                        </div>
                        <div class="pixsass-icon-box-content">
                            <h3 class="pixsass-icon-box-title text-center">
                                <a href="#">Data Report</a>
                            </h3>
                            <p align="justify">
                                Berbagai macam laporan tersedia di aplikasi Forstaff, mulai
                                dari laporan data staff, absensi, kontrak, KPI, payroll,
                                sampai cuti dan resignation
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="featured-two">
        <div class="container">
            <div class="section-title text-center">
                <h3 class="sub-title wow pixFadeUp">Blog</h3>
                <h2 class="title wow pixFadeUp" data-wow-delay="0.2s">
                    Blog Terbaru
                </h2>
            </div>
            <p align="center">Maaf, untuk saat ini blog belum tersedia.</p>
        </div>
    </section>
    <section class="call-to-action">
        <div class="overlay-bg">
            <img src="https://www.forstaff.id/assets/media/background/ellipse.png" alt="ellipse" title="ellipse"
                width="1903" height="545" />
        </div>
        <div class="container">
            <div class="action-content text-center wow pixFadeUp">
                <h2 class="title">Langkah Menuju Autopilot</h2>
                <p>
                    Ciptakan lingkungan kerja yang bisa anda awasi hanya dengan satu
                    aplikasi
                </p>
                <a href="https://www.forstaff.id/harga" class="pix-btn btn-light">Dapatkan Sekarang
                </a>
            </div>
        </div>
        <div class="scroll-circle">
            <img src="https://www.forstaff.id/assets/media/background/circle13.png" data-parallax='{"y" : -130}'
                alt="circle" title="circle" width="645" height="800" />
        </div>
    </section>
@endsection
