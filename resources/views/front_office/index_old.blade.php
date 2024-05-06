<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>E-Office MAn 2 Kuningan</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
        CSS
        ============================================= -->
    <link rel="stylesheet" href="{{ asset('landing_page/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('lannding_page/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing_page/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('landing_page/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('landing_page/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('landing_page/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('landing_page/css/main.css') }}">

    <style>
        .question {
            color: rgb(29, 27, 27);
            font-size: 1.3em;
        }

        .option {
            color: rgb(29, 27, 27);
            font-size: 1.3em;
            margin-left: 10px;
        }
    </style>

</head>

<body>
    <!-- start banner Area -->
    <section class="banner-area" id="home">
        <!-- Start Header Area -->
        <header class="default-header">
            <nav class="navbar navbar-expand-lg  navbar-light">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img src="img/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="text-white lnr lnr-menu"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end align-items-center"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#buku_tamu">Buku Tamu</a></li>
                            <li><a href="#feedback">Feedback</a></li>
                            <!-- Dropdown -->
                            {{-- <li class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Pages
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="generic.html">Generic</a>
                                    <a class="dropdown-item" href="elements.html">Elements</a>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- End Header Area -->
    </section>

    <section class="default-banner active-blog-slider">
        <div class="item-slider relative"
            style="background: url({{ asset('landing_page/img/slider1.jpg') }});background-size: cover;">
            <div class="overlay" style="background: rgba(0,0,0,.3)"></div>
            <div class="container">
                <div class="row fullscreen justify-content-center align-items-center">
                    <div class="col-md-10 col-12">
                        <div class="banner-content text-center">
                            <h4 class="text-white mb-20 text-uppercase">Sistem Informasi Penerimaan Tamu Digital</h4>
                            <h1 class="text-uppercase text-white">S I P E N D I</h1>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod temp <br>
                                or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                            <a href="#buku_tamu" class="text-uppercase header-btn">Isi Buku Tamu</a>
                            <a href="#feedback" class="text-uppercase header-btn">Isi Survey Kepasan</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- <div class="item-slider relative"
            style="background: url({{ asset('landing_page/img/slider2.jpg') }});background-size: cover;">
            <div class="overlay" style="background: rgba(0,0,0,.3)"></div>
            <div class="container">
                <div class="row fullscreen justify-content-center align-items-center">
                    <div class="col-md-10 col-12">
                        <div class="banner-content text-center">
                            <h4 class="text-white mb-20 text-uppercase">Madrasah Aliyah Negeri 2 Kuningan</h4>
                            <h1 class="text-uppercase text-white">GREEN SCHOOL</h1>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod temp <br>
                                or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                            <a href="#buku_tamu" class="text-uppercase header-btn">Isi Buku Tamu</a>
                            <a href="#feedback" class="text-uppercase header-btn">Isi Survey Kepasan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="item-slider relative"
            style="background: url({{ asset('landing_page/img/slider3.jpg') }});background-size: cover;">
            <div class="overlay" style="background: rgba(0,0,0,.3)"></div>
            <div class="container">
                <div class="row fullscreen justify-content-center align-items-center">
                    <div class="col-md-10 col-12">
                        <div class="banner-content text-center">
                            <h4 class="text-white mb-20 text-uppercase">Madrasah Aliyah Negeri 2 Kuningan</h4>
                            <h1 class="text-uppercase text-white">ISLAMIC BOARDING SCHOOL</h1>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod temp <br>
                                or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                            <a href="#buku_tamu" class="text-uppercase header-btn">Isi Buku Tamu</a>
                            <a href="#feedback" class="text-uppercase header-btn">Isi Survey Kepasan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start about Area -->
    <section class="section-gap info-area" id="about">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-40 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">MAN 2 Kuningan : Islamic High School</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="single-info row mt-40">
                <div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
                    <div class="info-thumb">
                        <img src="{{ asset('landing_page/img/about-img.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 no-padding info-rigth">
                    <div class="info-content">
                        <h2 class="pb-30">Innovative <br>
                            Methods <br>
                            of Teaching</h2>
                        <br>
                        <p>
                            MAN 2 Kuningan merupakan lembaga pendidikan di bawah naungan Kementerian Agama yang
                            menerapkan perpaduan antara kurikulum kementerian Pendidikan dan Kebudayaan serta kurikulum
                            Kementerian Agama. Selain menerapkan kurikulum dari Kementerian Pendidikan dan Kebudayaan
                            seperti SMA umum lainnya, MAN 2 Kuningan juga menggunakan kurikulum dari Kementerian Agama
                            untuk penguatan dalam bidang keagamaan.
                        </p>
                        <br>
                        <p>
                            Dengan penerapan dua kurikulum ini, pelajaran di MAN
                            2 Kuningan meliputi dua rumpun mata pelajaran umum dan rumpun pelajaran agama. Rumpun
                            pelajaran umum meliputi pelajaran yang sama dengan pelajaran di SMA lainnya. Rumpun
                            pelajaran agama meliputi Alquran Hadits, Fiqih, Aqidah Akhlak, SKI, dan Bahasa Arab. Dengan
                            penggunaan kurikulum dari kementerian agama ini, MAN 2 Kuningan memiliki kelebihan
                            dibandingkan dengan sekolah umum lainnya terutama dalam bidang keagamaan.
                        </p>
                        <p>
                            Selain itu, MAN 2
                            Kuningan pun berupaya untuk menjadi lembaga yang religius sebagai pencetak lulusan yang
                            bertaqwa dan berakhlakul karimah. MAN 2 Kuningan selalu berusaha untuk menjadi lembaga yang
                            memiliki keunggulan dan menjadi dambaan serta pilihan pertama masyarakat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about Area -->


    <!-- Form Buku Tamu -->
    <section class="project-area section-gap" id="buku_tamu">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Buku Tamu</h1>
                        <p>Silahkan mengisi data sesuai keperluan anda</p>
                    </div>
                </div>
            </div>
            <form class="form-area " id="bukuTamuForm" action="#" method="post"
                class="contact-form text-right">
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
                        <textarea class="common-textarea mt-10 form-control" id="keperluan" name="keperluan" placeholder="Keperluan"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Keperluan'" required=""></textarea>
                        <button class="primary-btn mt-20" id="btn_simpan_buku_tamu"
                            name="btn_simpan_buku_tamu">Simpan<span class="lnr lnr-arrow-right"></span></button>
                        <div class="alert-msg">
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </section>
    <!-- End Form Buku Tamu -->

    <!-- Start logo Area -->
    <section class="logo-area">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>
    <!-- End logo Area -->


    <!-- start feedback Area -->
    <section class="contact-area section-gap" id="feedback">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Survey Kepuasan Pelayanan</h1>
                        <p>Silahkan memberikan masukan dengan menjawab dafatar pertanyaan berikut</p>
                    </div>
                </div>
            </div>
            <form class="form-area " id="kuisionerForm" action="#" method="post"
                class="contact-form text-right">
                @csrf
                <div class="row">
                    <div class="col-lg-12 form-group">
                        <input placeholder="Nama Lengkap" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Nama Lengkap'" class="common-input mb-20 form-control"
                            value="" type="text" id="nama" name="nama"
                            style="color: rgb(29, 27, 27);font-size: 1.3em;">

                        <input placeholder="Usia" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Usia'"
                            class="common-input mb-20 form-control" value="" type="number" id="usia"
                            name="usia" style="color: rgb(29, 27, 27);font-size: 1.3em;" required>

                        <input placeholder="Pendidikan Terakhir" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Pendidikan Terakhir'" class="common-input mb-20 form-control"
                            value="" type="text" id="pendidikan" name="pendidikan"
                            style="color: rgb(29, 27, 27);font-size: 1.3em;" required>

                        <input placeholder="Pekerjaan" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Pekerjaan'" class="common-input mb-20 form-control"
                            value="" type="text" id="pekerjaan" name="pekerjaan"
                            style="padding-bottom: ;margin-bottom: 70px;color: rgb(29, 27, 27);font-size: 1.3em;"
                            required>


                        <p class="question">Bagaimana menurut saudara tentang prosedur pelayanan di MAN 2 Kuningan ?
                        </p>
                        <input type="radio" id="1a" name="no_1" value="4"><label for="1a"
                            class="option">Sangat Mudah</label><br>
                        <input type="radio" id="1b" name="no_1" value="3"><label for="1b"
                            class="option">Mudah</label><br>
                        <input type="radio" id="1c" name="no_1" value="2"><label for="1c"
                            class="option">Cukup Mudah</label><br>
                        <input type="radio" id="1d" name="no_1" value="1"><label for="1d"
                            class="option">Tidak Mudah</label><br>
                        <hr>

                        <p class="question">Bagaimana menurut saudara tentang persyaratan yang harus dipenuhi dalam
                            pelayanan di MAN 2
                            Kuningan ?</p>
                        <input type="radio" id="2a" name="no_2" value="4"><label for="2a"
                            class="option">Sangat Mudah</label><br>
                        <input type="radio" id="2b" name="no_2" value="3"><label for="2b"
                            class="option">Mudah</label><br>
                        <input type="radio" id="2c" name="no_2" value="2"><label for="2c"
                            class="option">Cukup Mudah</label><br>
                        <input type="radio" id="2d" name="no_2" value="1"><label for="2d"
                            class="option">Tidak Mudah</label><br>
                        <hr>

                        <p class="question">Bagaimana pendapat saudara tentang waktu pelayanan di MAN 2 Kuningan ?</p>
                        <input type="radio" id="3a" name="no_3" value="4"><label class="option"
                            for="3a" class="option">Sangat Cepat</label><br>
                        <input type="radio" id="3b" name="no_3" value="3"><label for="3b"
                            class="option">Cepat</label><br>
                        <input type="radio" id="3c" name="no_3" value="2"><label for="3c"
                            class="option">Cukup Cepat</label><br>
                        <input type="radio" id="3d" name="no_3" value="1"><label for="3d"
                            class="option">Lambat</label><br>
                        <hr>

                        <p class="question">Bagaimana pendapat saudara tentang biaya yang dikenakan penerima pelayanan
                            di MAN 2 Kuningan
                            ?</p>
                        <input type="radio" id="4a" name="no_4" value="4"><label for="4a"
                            class="option">Sangat Murah</label><br>
                        <input type="radio" id="4b" name="no_4" value="3"><label for="4b"
                            class="option">Murah</label><br>
                        <input type="radio" id="4c" name="no_4" value="2"><label for="4c"
                            class="option">Cukup Murah</label><br>
                        <input type="radio" id="4d" name="no_4" value="1"><label for="4d"
                            class="option">Mahal</label><br>
                        <hr>

                        <p class="question">Bagaimana hasil pelayanan yang diberikan di MAN 2 Kuningan ?</p>
                        <input type="radio" id="5a" name="no_5" value="4"><label for="5a"
                            class="option">Sangat Memuaskan</label><br>
                        <input type="radio" id="5b" name="no_5" value="3"><label for="5b"
                            class="option">Memuaskan</label><br>
                        <input type="radio" id="5c" name="no_5" value="2"><label for="5c"
                            class="option">Cukup Memuaskan</label><br>
                        <input type="radio" id="5d" name="no_5" value="1"><label for="5d"
                            class="option">Tidak Memuaskan</label><br>
                        <hr>

                        <p class="question">Bagaimana pendapat saudara tentang kedisiplinan petugas dalam memberikan
                            pelayanan ?</p>
                        <input type="radio" id="6a" name="no_6" value="4"><label for="6a"
                            class="option">Sangat Disiplin</label><br>
                        <input type="radio" id="6b" name="no_6" value="3"><label for="6b"
                            class="option">Disiplin</label><br>
                        <input type="radio" id="6c" name="no_6" value="2"><label for="6c"
                            class="option">Cukup Disiplin</label><br>
                        <input type="radio" id="6d" name="no_6" value="1"><label for="6d"
                            class="option">Tidak Disiplin</label><br>
                        <hr>

                        <p class="question">Bagaimana pendapat saudara tentang kemampuan (pengetahuan) petugas dalam
                            memberikan pelayanan ?</p>
                        <input type="radio" id="7a" name="no_7" value="4"><label for="7a"
                            class="option">Sangat Mampu</label><br>
                        <input type="radio" id="7b" name="no_7" value="3"><label for="7b"
                            class="option">Mampu</label><br>
                        <input type="radio" id="7c" name="no_7" value="2"><label for="7c"
                            class="option">Cukup Mampu</label><br>
                        <input type="radio" id="7d" name="no_7" value="1"><label for="7d"
                            class="option">Tidak Mampu</label><br>
                        <hr>

                        <p class="question">Bagaimana pendapat saudara tentang kenyamanan dan kebersihan di lingkungan
                            MAN 2 Kuningan ?</p>
                        <input type="radio" id="8a" name="no_8" value="4"><label for="8a"
                            class="option">Sangat Nyaman</label><br>
                        <input type="radio" id="8b" name="no_8" value="3"><label for="8b"
                            class="option">Nyaman</label><br>
                        <input type="radio" id="8c" name="no_8" value="2"><label for="8c"
                            class="option">Cukup Nyaman</label><br>
                        <input type="radio" id="8d" name="no_8" value="1"><label for="8d"
                            class="option">Tidak Nyaman</label><br>
                        <hr>

                        <p class="question">Bagaimana pendapat saudara tentang pernyataan kesanggupan dan kewajiban
                            dari pegawai di MAN 2 Kuningan dalam memberikan pelayanan sesuai dengan standar pelayanan ?
                        </p>
                        <input type="radio" id="9a" name="no_9" value="4"><label for="9a"
                            class="option">Sangat Memuaskan</label><br>
                        <input type="radio" id="9b" name="no_9" value="3"><label for="9b"
                            class="option">Memuaskan</label><br>
                        <input type="radio" id="9c" name="no_9" value="2"><label for="9c"
                            class="option">Cukup Memuaskan</label><br>
                        <input type="radio" id="9d" name="no_9" value="1"><label for="9d"
                            class="option">Tidak Memuaskan</label><br>
                        <hr>

                        <p class="question">Bagaimana pendapat saudara tentang kemudahan menyampaikan pengaduan, sran
                            dan masukan di MAN 2 Kuningan ?
                        </p>
                        <input type="radio" id="10a" name="no_10" value="4"><label for="10a"
                            class="option">Sangat Mudah</label><br>
                        <input type="radio" id="10b" name="no_10" value="3"><label for="10b"
                            class="option">Mudah</label><br>
                        <input type="radio" id="10c" name="no_10" value="2"><label for="10c"
                            class="option">Cukup Mudah</label><br>
                        <input type="radio" id="10d" name="no_10" value="1"><label for="10d"
                            class="option">Tidak Mudah</label><br>
                        <hr>

                    </div>
                    <div class="col-lg-12 form-group">
                        <p class="question">Saran dan Masukan :
                        </p>
                        <textarea class="common-textarea mt-10 form-control" style="color: rgb(29, 27, 27);font-size: 1.3em;" id="saran"
                            name="saran" placeholder="Saran dan Masukan" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Saran dan masukan'" required=""></textarea>
                        <button class="primary-btn mt-20" id="saveBtn" name="saveBtn">Kirim<span
                                class="lnr lnr-arrow-right"></span></button>
                        <div class="alert-msg">
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </section>
    <!-- end feedback Area -->

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        {{-- <h6>About Us</h6> --}}

                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="footer-text">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | E-Office MAN 2<i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="http://man2kuningan.sch.id/" target="_blank">MAN
                                2 Kuningan</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
                {{-- <div class="col-lg-5  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Newsletter</h6>
                        <p>Stay update with our latest</p>
                        <div class="" id="mc_embed_signup">

                            <form target="_blank" novalidate="true"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">

                                <div class="d-flex flex-row">

                                    <input class="form-control" name="EMAIL" placeholder="Enter Email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                                        required="" type="email">


                                    <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                            aria-hidden="true"></i></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1"
                                            value="" type="text">
                                    </div>

                                    <!-- <div class="col-lg-4 col-md-4">
                                            <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                        </div>  -->
                                </div>
                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="{{ asset('landing_page/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('landing_page/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js') }}"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>
    <script src="{{ asset('landing_page/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('landing_page/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('landing_page/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('landing_page/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('landing_page/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('landing_page/js/slick.js') }}"></script>
    <script src="{{ asset('landing_page/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('landing_page/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('landing_page/js/main.js') }}"></script>

    <script>
        var inp = document.getElementsByTagName('input');
        for (var i = inp.length - 1; i >= 0; i--) {
            if ('radio' === inp[i].type) inp[i].checked = false;
        }
    </script>
    <script>
        const app_path = {
            base_path: "{{ route('pelayanan.index') }}",
        };
    </script>
    <script src="{{ asset('js/kuisioner.js') }}" defer></script>
    <script src="{{ asset('js/buku_tamu.js') }}" defer></script>
</body>

</html>
