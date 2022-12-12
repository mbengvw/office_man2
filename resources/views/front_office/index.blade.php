<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
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
                            <h1 class="text-uppercase text-white">SIPENDI</h1>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod temp <br>
                                or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                            <a href="#buku_tamu" class="text-uppercase header-btn">Isi Buku Tamu</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="item-slider relative"
            style="background: url({{ asset('landing_page/img/slider2.jpg') }});background-size: cover;">
            <div class="overlay" style="background: rgba(0,0,0,.3)"></div>
            <div class="container">
                <div class="row fullscreen justify-content-center align-items-center">
                    <div class="col-md-10 col-12">
                        <div class="banner-content text-center">
                            <h4 class="text-white mb-20 text-uppercase">Discover the Colorful World</h4>
                            <h1 class="text-uppercase text-white">New Trip</h1>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod temp <br>
                                or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                            <a href="#buku_tamu" class="text-uppercase header-btn">Isi Buku Tamu</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-slider relative"
            style="background: url({{ asset('landing_page/img/slider3.jpg') }});background-size: cover;">
            <div class="overlay" style="background: rgba(0,0,0,.3)"></div>
            <div class="container">
                <div class="row fullscreen justify-content-center align-items-center">
                    <div class="col-md-10 col-12">
                        <div class="banner-content text-center">
                            <h4 class="text-white mb-20 text-uppercase">Discover the Colorful World</h4>
                            <h1 class="text-uppercase text-white">New Experience</h1>
                            <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod temp <br>
                                or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                            <a href="#buku_tamu" class="text-uppercase header-btn">Isi Buku Tamu</a>
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
                        <h1 class="mb-10">Why Choose Us Your Fitness Builder</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="single-info row mt-40">
                <div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
                    <div class="info-thumb">
                        <img src="{{ asset('landing_page/img/about-img.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 no-padding info-rigth">
                    <div class="info-content">
                        <h2 class="pb-30">We Realize that <br>
                            there are reduced <br>
                            Wastege Stand out</h2>
                        <p>
                            inappropriate behavior is often laughed off as “boys will be boys,” women face higher
                            conduct standards – especially in the workplace. That’s why it’s crucial that, as women.
                        </p>
                        <br>
                        <p>
                            inappropriate behavior is often laughed off as “boys will be boys,” women face higher
                            conduct standards – especially in the workplace. That’s why it’s crucial that, as women.
                            inappropriate behavior is often laughed off as “boys will be boys,” women face higher
                            conduct standards – especially in the workplace. That’s why it’s crucial that, as women.
                        </p>
                        <br>
                        <p>
                            inappropriate behavior is often laughed off as “boys will be boys,” women face higher
                            conduct standards – especially in the workplace. That’s why it’s crucial that, as women.
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
            <form class="form-area " id="myForm" action="#" method="post" class="contact-form text-right">
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <input placeholder="Nama Lengkap" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Nama Lengkap'" class="common-input mb-20 form-control"
                            required="" type="text">

                        <input name="email" placeholder="Enter email address"
                            pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                            class="common-input mb-20 form-control" required="" type="email">

                        <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control"
                            required="" type="text">
                    </div>
                    <div class="col-lg-6 form-group">
                        <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                        <button class="primary-btn mt-20">Send Message<span
                                class="lnr lnr-arrow-right"></span></button>
                        <div class="alert-msg">
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </section>
    <!-- End Form Buku Tamu -->


    <!-- Start feature Area -->
    <section class="feature-area section-gap" id="secvice">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-60 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Fitur Keunikan Kami</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-feature mb-30">
                        <div class="title d-flex flex-row pb-20">
                            <span class="lnr lnr-user"></span>
                            <h4><a href="#">Expert Technicians</a></h4>
                        </div>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-feature mb-30">
                        <div class="title d-flex flex-row pb-20">
                            <span class="lnr lnr-license"></span>
                            <h4><a href="#">Professional Service</a></h4>
                        </div>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-feature mb-30">
                        <div class="title d-flex flex-row pb-20">
                            <span class="lnr lnr-phone"></span>
                            <h4><a href="#">Great Support</a></h4>
                        </div>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-feature">
                        <div class="title d-flex flex-row pb-20">
                            <span class="lnr lnr-rocket"></span>
                            <h4><a href="#">Technical Skills</a></h4>
                        </div>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-feature">
                        <div class="title d-flex flex-row pb-20">
                            <span class="lnr lnr-diamond"></span>
                            <h4><a href="#">Highly Recomended</a></h4>
                        </div>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 ">
                    <div class="single-feature">
                        <div class="title d-flex flex-row pb-20">
                            <span class="lnr lnr-bubble"></span>
                            <h4><a href="#">Positive Reviews</a></h4>
                        </div>
                        <p>
                            Usage of the Internet is becoming more common due to rapid advancement of technology and
                            power.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature Area -->

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
            <form class="form-area " id="myForm" action="mail.php" method="post"
                class="contact-form text-right">
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control"
                            required="" type="text">

                        <input name="email" placeholder="Enter email address"
                            pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"
                            class="common-input mb-20 form-control" required="" type="email">

                        <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control"
                            required="" type="text">
                    </div>
                    <div class="col-lg-6 form-group">
                        <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                        <button class="primary-btn mt-20">Send Message<span
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
                        <h6>About Us</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore dolore magna aliqua.
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p class="footer-text">Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
                <div class="col-lg-5  col-md-6 col-sm-6">
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
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
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
                </div>
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
</body>

</html>
