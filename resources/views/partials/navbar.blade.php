<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <img src="assets/img/logo_white.png" width="300" height="60" />
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ url('landing') }}">Beranda</a></li>
                <li><a class="nav-link scrollto" href="{{ url('about') }}">Profil</a></li>
                <li><a class="nav-link scrollto" href="#services">Pengumuman</a></li>
                <li><a class="nav-link scrollto " href="#portfolio">Foto</a></li>
                <li><a class="nav-link scrollto" href="posts">Pengumuman Informasi</a></li>
                <!-- <li><a class="nav-link scrollto" href="#team">Team</a></li> -->
                <li class="dropdown"><a href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li class="dropdown"><a href="#"><span>Pilihan</span> <i
                                    class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="posts">Pengumuman Informasi</a></li>
                                <li><a href="#">Modul PJJ </a></li>
                                <li><a href="#">PPDB 2023</a></li>
                                <li><a href="#">Digital Library</a></li>
                                <li><a href="#">CBT</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('layanan') }}">Layanan Ligalisir</a></li>
                        <li><a href="#">Layanan Surat Izin</a></li>
                        <li><a href="#">Layanan Surat Keterangan Aktif</a></li>
                        <li><a href="#">Layanan Surat Rekomendasi</a></li>
                        <li><a href="#">NISN</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
