<header class="header-area">
    <!-- Navbar Area -->
    <div class="newsbox-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container-fluid">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="newsboxNav">

                    <!-- Nav brand -->
                    <a href="{{route('landing.home')}}" class="nav-brand"><img src="{{asset('landing/assets/img/logo-img/logo-core.png')}}" alt="Logo {{env('APP_NAME')}}"></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul style="width: 100%;">
                                <li><a href="{{route('landing.home')}}">Beranda</a></li>
                                <li><a href="#">Profile</a>
                                    <ul class="dropdown">
                                        {{-- <li><a href="{{route('landing.profile')}}">Fungsi & Tugas</a></li> --}}
                                        <li><a href="{{route('landing.about')}}">Tentang LPM</a></li>
                                        <li><a href="{{route('landing.purpose')}}">Visi Misi</a></li>
                                        <li><a href="{{route('landing.structure')}}">Struktur Organisasi</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">SPMI</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('landing.spmi.university')}}">Universitas</a></li>
                                        <li><a href="#">Fakultas</a>
                                            <ul class="dropdown" style="width: max-content;">
                                                <li><a href="{{route('landing.spmi.academics.feb')}}">Fakultas Ekonomi & Bisnis</a></li>
                                                <li><a href="{{route('landing.spmi.academics.fh')}}">Fakultas Hukum</a></li>
                                                <li><a href="{{route('landing.spmi.academics.fisk')}}">Fakultas Ilmu Sosial & Kependidikan</a></li>
                                                <li><a href="{{route('landing.spmi.academics.fpsi')}}">Fakultas Psikologi</a></li>
                                                <li><a href="{{route('landing.spmi.academics.fsd')}}">Fakultas Seni & Desain</a></li>
                                                <li><a href="{{route('landing.spmi.academics.ftik')}}">Fakultas Teknik & Ilmu Komputer</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Informasi</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('landing.news.index')}}">Berita</a></li>
                                        <li><a href="{{route('landing.announcement.index')}}">Pengumuman</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('landing.policy')}}">Kebijakan</a></li>
                                <li><a href="{{route('landing.accreditation')}}">Akreditasi</a></li>
                                <li><a href="{{route('landing.report')}}">Laporan Monev</a></li>
                            </ul>

                            <!-- Header Add Area -->
                            <div class="header-add-area">
                                <a href="https://pendaftaran.potensi-utama.ac.id/">
                                    <img src="{{asset('landing/assets/img/ads-img/banner-top-header.jpg')}}" style="width: 320px; height:80px; object-fit:contain;" alt="Penerimaan Mahasiswa Baru 2024/2025 Universitas Potensi Utama">
                                </a>
                            </div>
                        </div>
                        <!-- Nav End -->

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
