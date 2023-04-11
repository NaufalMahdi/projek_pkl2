@extends('layouts.main')
@section('banner')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
            <h1>Selamat Datang di Website Smpn 1 Jember</h1>
            <h2></h2>
            <a href="#about" class="btn-get-started scrollto">Lanjut</a>
        </div>
    </section><!-- End Hero -->
@endsection
@section('content')
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                    <img src="assets/img/5.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                    <h3>{{ $name }}</h3>
                    <p>
                        Assalamu'alaikum Warahmatullahi Wabarakatuh,
                        Saya ucapkan Selamat Datang di Official Website resmi SMPN 1 Jember.
                    </p>
                    <!-- <p class="fst-italic">
                                                              Data adalah catatan atas kumpulan fakta atau deskripsi dari sesuatu/ kejadian/ kenyataan yang diahadapi berupa angka, karakter,
                                                              simbol, gambar, peta, tanda, isyarat, tulisan suara, dan bunyi yang mempresentasikan keadaan sebenarnya atau menunjukan suatu ide,
                                                              objek, kondisi atau situasi.
                                                              </p> -->
                    <!-- <ul>
                                                                <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                                                <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                                                <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                                              </ul> -->
                    <p>
                        Salah satu indikator untuk mengukur keberhasilan suatu pembangunan dapat dilihat dari
                        kondisi data statistik sektoral karena pada dasarnya
                        data sangat diperlukan sebagai acuan dalam pengambilan suatu kebijakan guna mencapai tujuan
                        pembangunan yaitu meningkatkan kesejahteraan masyarakat.
                        Oleh karena itu data statistik sektoral harus berkualitas karena memiliki peran yang sangat
                        penting dalam pengambilan keputusan sehingga kebijakan
                        yang diambil tepat sasaran.
                    </p>
                    <p>
                        Selain itu, untuk mewujudkan keterpaduan perencanaan, pelaksanaan, evaluasi serta
                        pengendalian pembangunan antara Pemerintah Pusat dengan Daerah, perlu didukung
                        dengan data yang dikelola secara seksama dan berkelanjutan. Untuk memberikan arah, landasan
                        dan kepastian hukum kepada semua pihak yang terkait dengan penyelengaraan
                        data diperlukan kemudahan dalam memperoleh data dari dan antar instansi di Lingkungan
                        Pemerintah Kabupaten Lumajang, Pemerintah Provinsi Jawa Timur maupun Pemerintah Pusat.
                    </p>
                    <p>
                        Satu Data Kabupaten Lumajang adalah kebijakan yang bertujuan untuk mewujudkan data yang
                        akurat, mutakhir, terpadu, terintegrasi, dan dapat diakses oleh pengguna data.
                        Sebagai dasar perencanaan, pelaksanaan, evaluasi, dan pengendalian pembangunan melalui
                        perbaikan tata kelola data Pemerintah sesuai dengan Peraturan Bupati Lumajang
                        Nomor 2 Tahun 2019 tentang Satu Data Kabupaten Lumajang.
                    </p>
                    <p>
                        Portal Satu Data Lumajang merupakan Portal Resmi Data Sektoral Kabupaten Lumajang yang
                        berisi data semua instansi yang menghasilkan data terkait Lumajang.
                        Data tersedia dalam format terbuka dan mudah digunakan kembali dengan harapan bahwa pengguna
                        portal ini dapat memanfaatkan data yang tersedia untuk mewujudkan
                        dan mendukung pembangunan Kabupaten Lumajang.
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container">

            <div class="row">

                <div class="col-lg-4" data-aos="fade-up">
                    <div class="box">
                        <span>01</span>
                        <h4>Jadwal UTS</h4>
                        <p>27 - 31 Maret 2023</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
                    <div class="box">
                        <span>02</span>
                        <h4>Jadwal UAS</h4>
                        <p>24-28 April 2023</p>
                    </div>
                </div>

                <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <div class="box">
                        <span>03</span>
                        <h4> Jadwal Buka Bersama</h4>
                        <p>7 April 2023</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
        <div class="container" data-aos="zoom-in">

            <div class="row d-flex align-items-center">

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-2 col-md-4 col-6">
                    <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                </div>

            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <span>Pengumuman</span>
                <h2>Pengumuman</h2>
                <p>Seluruh Pengumuman Ada di Bawah ini</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="">JUDUL</a></h4>
                        <p>ISI</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                    data-aos-delay="150">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4><a href="">JUDUL</a></h4>
                        <p>ISI</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up"
                    data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4><a href="">JUDUL</a></h4>
                        <p>ISI</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4><a href="">JUDUL</a></h4>
                        <p>ISI</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-slideshow"></i></div>
                        <h4><a href="">JUDUL</a></h4>
                        <p>ISI</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-arch"></i></div>
                        <h4><a href="">JUDUL</a></h4>
                        <p>ISI</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="text-center">
                <h3>Call To Action</h3>
                <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum.</p>
                <a class="cta-btn" href="#">Call To Action</a>
            </div>

        </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <span>Dokumentasi</span>
                <h2>Dokumentasi</h2>
                <p>Dokumentasi dari kegiatan di SMPN 1 JEMBER</p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Basket</li>
                        <li data-filter=".filter-card">Volly</li>
                        <li data-filter=".filter-web">Sepak Bola</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/portfolio/tani1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Basket</h4>
                        <p>App</p>
                        <a href="assets/img/portfolio/tani1.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                        <a href="data" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/img/portfolio/dagang1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Volly 1</h4>
                        <p>Web</p>
                        <a href="assets/img/portfolio/dagang1.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/portfolio/tani2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Basket 2</h4>
                        <p>App</p>
                        <a href="assets/img/portfolio/tani2.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/portfolio/bangun1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Sepak Bola 1</h4>
                        <p>Card</p>
                        <a href="assets/img/portfolio/bangun1.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/img/portfolio/dagang2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Volly 2</h4>
                        <p>Web</p>
                        <a href="assets/img/portfolio/dagang2.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="assets/img/portfolio/tani3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Basket 3</h4>
                        <p>App</p>
                        <a href="assets/img/portfolio/tani3.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/portfolio/bangun2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Sepak Bola 2</h4>
                        <p>Card</p>
                        <a href="assets/img/portfolio/bangun2.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <img src="assets/img/portfolio/bangun3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Sepak Bola 3</h4>
                        <p>Card</p>
                        <a href="assets/img/portfolio/bangun3.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <img src="assets/img/portfolio/dagang3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>Volly 3</h4>
                        <p>Web</p>
                        <a href="assets/img/portfolio/dagang3.jpg" data-gallery="portfolioGallery"
                            class="portfolio-lightbox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                        <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                class="bx bx-link"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <!--<section id="pricing" class="pricing">
                                                        <div class="container">

                                                          <div class="section-title">
                                                            <span>Pricing</span>
                                                            <h2>Pricing</h2>
                                                            <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
                                                          </div>

                                                          <div class="row">

                                                            <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="150">
                                                              <div class="box">
                                                                <h3>Free</h3>
                                                                <h4><sup>$</sup>0<span> / month</span></h4>
                                                                <ul>
                                                                  <li>Aida dere</li>
                                                                  <li>Nec feugiat nisl</li>
                                                                  <li>Nulla at volutpat dola</li>
                                                                  <li class="na">Pharetra massa</li>
                                                                  <li class="na">Massa ultricies mi</li>
                                                                </ul>
                                                                <div class="btn-wrap">
                                                                  <a href="#" class="btn-buy">Buy Now</a>
                                                                </div>
                                                              </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in">
                                                              <div class="box featured">
                                                                <h3>Business</h3>
                                                                <h4><sup>$</sup>19<span> / month</span></h4>
                                                                <ul>
                                                                  <li>Aida dere</li>
                                                                  <li>Nec feugiat nisl</li>
                                                                  <li>Nulla at volutpat dola</li>
                                                                  <li>Pharetra massa</li>
                                                                  <li class="na">Massa ultricies mi</li>
                                                                </ul>
                                                                <div class="btn-wrap">
                                                                  <a href="#" class="btn-buy">Buy Now</a>
                                                                </div>
                                                              </div>
                                                            </div>

                                                            <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                                                              <div class="box">
                                                                <h3>Developer</h3>
                                                                <h4><sup>$</sup>29<span> / month</span></h4>
                                                                <ul>
                                                                  <li>Aida dere</li>
                                                                  <li>Nec feugiat nisl</li>
                                                                  <li>Nulla at volutpat dola</li>
                                                                  <li>Pharetra massa</li>
                                                                  <li>Massa ultricies mi</li>
                                                                </ul>
                                                                <div class="btn-wrap">
                                                                  <a href="#" class="btn-buy">Buy Now</a>
                                                                </div>
                                                              </div>
                                                            </div>

                                                          </div>

                                                        </div>
                                                      </section>-->
    <!-- End Pricing Section -->

    <!-- ======= Team Section ======= -->
    {{-- <section id="team" class="team">
        <div class="container">

            <div class="section-title">
                <span>Team</span>
                <h2>Team</h2>
                <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                    <div class="member">
                        <img src="assets/img/team/team-1.jpg" alt="">
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                        <p>
                            Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui
                            aut aut aut
                        </p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                    <div class="member">
                        <img src="assets/img/team/team-2.jpg" alt="">
                        <h4>Sarah Jhinson</h4>
                        <span>Product Manager</span>
                        <p>
                            Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum
                            temporibus
                        </p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                    <div class="member">
                        <img src="assets/img/team/team-3.jpg" alt="">
                        <h4>William Anderson</h4>
                        <span>CTO</span>
                        <p>
                            Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des
                            clara
                        </p>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section> --}}
    <!-- End Team Section -->
@endsection
@section('contact')
    @include('partials.contact')
@endsection
