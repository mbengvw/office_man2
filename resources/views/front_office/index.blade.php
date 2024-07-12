<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PTSP | MAN 2 KUNINGAN</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('landing_page/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('landing_page/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('landing_page/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">

            {{-- <h1 class="logo"><a href="index.html">PTSP</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo"><img src="{{ asset('landing_page/img/logo.png') }}" alt=""
                    class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#buku_tamu">Buku Tamu</a></li>
                    <li><a class="nav-link scrollto " href="#feedback">Feedback</a></li>
                    {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a href="blog.html">Blog</a></li> --}}
                    {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li> --}}
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <h3>Wilujeng <strong>Sumping</strong></h3>
            <h1>PTSP MAN 2 KUNINGAN</h1>
            <h2>Siap melayani anda sepenuh hati</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                    <h3>PTSP <span> MAN 2 Kuningan</span></h3>
                    <p>Pelayanan Terpadu Satu Pintu Madrasah Aliyah Negeri 2 Ciawigebang</p>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            MAN 2 Kuningan merupakan lembaga pendidikan di bawah naungan Kementerian Agama yang
                            menerapkan perpaduan antara kurikulum kementerian Pendidikan dan Kebudayaan serta kurikulum
                            Kementerian Agama. Selain menerapkan kurikulum dari Kementerian Pendidikan dan Kebudayaan
                            seperti SMA umum lainnya, MAN 2 Kuningan juga menggunakan kurikulum dari Kementerian Agama
                            untuk penguatan dalam bidang keagamaan.
                        </p>

                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Dengan penerapan dua kurikulum ini, pelajaran di MAN
                            2 Kuningan meliputi dua rumpun mata pelajaran umum dan rumpun pelajaran agama. Rumpun
                            pelajaran umum meliputi pelajaran yang sama dengan pelajaran di SMA lainnya. Rumpun
                            pelajaran agama meliputi Alquran Hadits, Fiqih, Aqidah Akhlak, SKI, dan Bahasa Arab. Dengan
                            penggunaan kurikulum dari kementerian agama ini, MAN 2 Kuningan memiliki kelebihan
                            dibandingkan dengan sekolah umum lainnya terutama dalam bidang keagamaan.
                        </p>
                        <a href="https://man2kuningan.sch.id/" class="btn-learn-more" target="_blank">Learn More</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Tamu Section ======= -->
        <section id="buku_tamu" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Buku Tamu</h2>
                    <h3>Form Isian <span>Buku Tamu</span></h3>
                    <p>Silahkan Bapak/Ibu pengunjung untuk mengisi data pengunjung pada form berikut.
                        Partisipasi Bapak/Ibu akan sangat berharga bagi kami.
                    </p>
                </div>

                <div class="row">
                    <form id="bukuTamuForm" action="javascript:void(0)" id="form_tambah_sltp"
                        enctype="multipart/form-data" method="POST" class="contact-form text-right">

                        @csrf

                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <input placeholder="Nama Lengkap" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Nama Lengkap'" class="common-input mb-20 form-control"
                                    required="" type="text" id="nama" name="nama">

                                <input placeholder="Nomor HP" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Nomor HP'" class="common-input mb-20 form-control"
                                    required="" type="text" id="hp" name="hp">
                                <input placeholder="Alamat Lengkap" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Alamat Lengkap'" class="common-input mb-20 form-control"
                                    required="" type="text" id="alamat" name="alamat">
                                <select class="form-control" id="struktural" name="struktural"
                                    class="common-input mb-20 form-control">
                                    <option value="">Pilih Orang Tujuan</option>
                                    @foreach ($list_struktural as $struktural)
                                        <option value="{{ $struktural['id'] }}">{{ $struktural['jabatan'] }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="col-lg-6 form-group">
                                <textarea class="common-textarea mb-20 form-control" id="keperluan" name="keperluan" placeholder="Keperluan"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Keperluan'" required=""></textarea>

                                <button class="btn-send mt-20 " id="btn_simpan_buku_tamu" name="btn_simpan_buku_tamu"
                                    type="submit">Simpan<span class="lnr lnr-arrow-right"></span>
                                </button>

                                <div class="alert-msg">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="feedback" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>Questioner</h2>
                    <h3>Form Kuesioner <span>Pelayanan MAN 2 Kuningan</span></h3>
                    <p>Silahakan Bapak/Ibu untuk mengisi kuesioner terkait pelayanan yang telah kami berikan.
                        Masukan dari Bapak/Ibu akan sangan berharga bagi kami untuk melakukan evaluasi terhadap
                        layanan-layanan kami.
                    </p>
                </div>

                <div class="row">
                    <form class="form-area " id="kuisionerForm" action="#" method="post"
                        class="contact-form text-right">
                        @csrf
                        <div class="row">
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Nama Lengkap" required="" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Nama Lengkap'">
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="usia" id="usia"
                                    placeholder="Usia" required="" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Usia'">
                            </div>

                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="pendidikan" id="pendidikan"
                                    placeholder="Pendidikan Terakhir" required="" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Pendidikan Terakhir'">
                            </div>

                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="pekerjaan" id="pekerjaan"
                                    placeholder="Pekerjaan" required="" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Pekerjaan'">
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;margin-left: 0px;">
                            <div class="col-lg-12 form-group">

                                <p class="question">Bagaimana menurut saudara tentang prosedur pelayanan di MAN 2
                                    Kuningan ?
                                </p>
                                <input type="radio" id="1a" name="no_1" value="4"><label
                                    for="1a" class="option">Sangat Mudah</label><br>
                                <input type="radio" id="1b" name="no_1" value="3"><label
                                    for="1b" class="option">Mudah</label><br>
                                <input type="radio" id="1c" name="no_1" value="2"><label
                                    for="1c" class="option">Cukup Mudah</label><br>
                                <input type="radio" id="1d" name="no_1" value="1"><label
                                    for="1d" class="option">Tidak Mudah</label><br>
                                <hr>

                                <p class="question">Bagaimana menurut saudara tentang persyaratan yang harus dipenuhi
                                    dalam
                                    pelayanan di MAN 2
                                    Kuningan ?</p>
                                <input type="radio" id="2a" name="no_2" value="4"><label
                                    for="2a" class="option">Sangat Mudah</label><br>
                                <input type="radio" id="2b" name="no_2" value="3"><label
                                    for="2b" class="option">Mudah</label><br>
                                <input type="radio" id="2c" name="no_2" value="2"><label
                                    for="2c" class="option">Cukup Mudah</label><br>
                                <input type="radio" id="2d" name="no_2" value="1"><label
                                    for="2d" class="option">Tidak Mudah</label><br>
                                <hr>

                                <p class="question">Bagaimana pendapat saudara tentang waktu pelayanan di MAN 2
                                    Kuningan ?</p>
                                <input type="radio" id="3a" name="no_3" value="4"><label
                                    class="option" for="3a" class="option">Sangat Cepat</label><br>
                                <input type="radio" id="3b" name="no_3" value="3"><label
                                    for="3b" class="option">Cepat</label><br>
                                <input type="radio" id="3c" name="no_3" value="2"><label
                                    for="3c" class="option">Cukup Cepat</label><br>
                                <input type="radio" id="3d" name="no_3" value="1"><label
                                    for="3d" class="option">Lambat</label><br>
                                <hr>

                                <p class="question">Bagaimana hasil pelayanan yang diberikan di MAN 2 Kuningan ?</p>
                                <input type="radio" id="5a" name="no_5" value="4"><label
                                    for="5a" class="option">Sangat Memuaskan</label><br>
                                <input type="radio" id="5b" name="no_5" value="3"><label
                                    for="5b" class="option">Memuaskan</label><br>
                                <input type="radio" id="5c" name="no_5" value="2"><label
                                    for="5c" class="option">Cukup Memuaskan</label><br>
                                <input type="radio" id="5d" name="no_5" value="1"><label
                                    for="5d" class="option">Tidak Memuaskan</label><br>
                                <hr>

                                <p class="question">Bagaimana pendapat saudara tentang kedisiplinan petugas dalam
                                    memberikan
                                    pelayanan ?</p>
                                <input type="radio" id="6a" name="no_6" value="4"><label
                                    for="6a" class="option">Sangat Disiplin</label><br>
                                <input type="radio" id="6b" name="no_6" value="3"><label
                                    for="6b" class="option">Disiplin</label><br>
                                <input type="radio" id="6c" name="no_6" value="2"><label
                                    for="6c" class="option">Cukup Disiplin</label><br>
                                <input type="radio" id="6d" name="no_6" value="1"><label
                                    for="6d" class="option">Tidak Disiplin</label><br>
                                <hr>

                                <p class="question">Bagaimana pendapat saudara tentang kemampuan (pengetahuan) petugas
                                    dalam
                                    memberikan pelayanan ?</p>
                                <input type="radio" id="7a" name="no_7" value="4"><label
                                    for="7a" class="option">Sangat Mampu</label><br>
                                <input type="radio" id="7b" name="no_7" value="3"><label
                                    for="7b" class="option">Mampu</label><br>
                                <input type="radio" id="7c" name="no_7" value="2"><label
                                    for="7c" class="option">Cukup Mampu</label><br>
                                <input type="radio" id="7d" name="no_7" value="1"><label
                                    for="7d" class="option">Tidak Mampu</label><br>
                                <hr>

                                <p class="question">Bagaimana pendapat saudara tentang kenyamanan dan kebersihan di
                                    lingkungan
                                    MAN 2 Kuningan ?</p>
                                <input type="radio" id="8a" name="no_8" value="4"><label
                                    for="8a" class="option">Sangat Nyaman</label><br>
                                <input type="radio" id="8b" name="no_8" value="3"><label
                                    for="8b" class="option">Nyaman</label><br>
                                <input type="radio" id="8c" name="no_8" value="2"><label
                                    for="8c" class="option">Cukup Nyaman</label><br>
                                <input type="radio" id="8d" name="no_8" value="1"><label
                                    for="8d" class="option">Tidak Nyaman</label><br>
                                <hr>

                                <p class="question">Bagaimana pendapat saudara tentang pernyataan kesanggupan dan
                                    kewajiban
                                    dari pegawai di MAN 2 Kuningan dalam memberikan pelayanan sesuai dengan standar
                                    pelayanan ?
                                </p>
                                <input type="radio" id="9a" name="no_9" value="4"><label
                                    for="9a" class="option">Sangat Memuaskan</label><br>
                                <input type="radio" id="9b" name="no_9" value="3"><label
                                    for="9b" class="option">Memuaskan</label><br>
                                <input type="radio" id="9c" name="no_9" value="2"><label
                                    for="9c" class="option">Cukup Memuaskan</label><br>
                                <input type="radio" id="9d" name="no_9" value="1"><label
                                    for="9d" class="option">Tidak Memuaskan</label><br>
                                <hr>

                                <p class="question">Bagaimana pendapat saudara tentang kemudahan menyampaikan
                                    pengaduan, sran
                                    dan masukan di MAN 2 Kuningan ?
                                </p>
                                <input type="radio" id="10a" name="no_10" value="4"><label
                                    for="10a" class="option">Sangat Mudah</label><br>
                                <input type="radio" id="10b" name="no_10" value="3"><label
                                    for="10b" class="option">Mudah</label><br>
                                <input type="radio" id="10c" name="no_10" value="2"><label
                                    for="10c" class="option">Cukup Mudah</label><br>
                                <input type="radio" id="10d" name="no_10" value="1"><label
                                    for="10d" class="option">Tidak Mudah</label><br>
                                <hr>

                            </div>
                            <div class="col-lg-12 form-group">

                                <div>
                                    <p>Berikan saran dan masukan anda</p>
                                </div>
                                <textarea class="form-control saran-text" name="saran" rows="5" style="margin-bottom: 30px;" required>
                                </textarea>
                                <div class="text-center">
                                    <button class="btn-send" type="submit" id="saveBtn">Kirim</button>
                                </div>
                                <div class="alert-msg">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; {{ date('Y') }} Copyright <strong><span>MAN 2 Kuningan</span></strong>. All Rights
                    Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('landing_page/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('landing_page/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('landing_page/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('landing_page/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('landing_page/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('landing_page/js/main.js') }}"></script>

    <script>
        const app_path = {
            base_path: "{{ route('pelayanan.index') }}",
        };
    </script>
    <script src="{{ asset('js/kuisioner.js') }}" defer></script>
    <script src="{{ asset('js/buku_tamu.js') }}" defer></script>
</body>

</html>
