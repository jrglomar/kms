<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>KMS | Home</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('landing_page_assets/images/favicon.png') }}" type="image/png">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing_page_assets/css/slick.css') }}">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing_page_assets/css/font-awesome.min.css') }}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing_page_assets/css/LineIcons.css') }}">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing_page_assets/css/animate.css') }}">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing_page_assets/css/magnific-popup.css') }}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing_page_assets/css/bootstrap.min.css') }}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing_page_assets/css/default.css') }}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{ asset('landing_page_assets/css/style.css') }}">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area headroom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <h2>KMS</h2>
                                {{-- <img src="{{ asset('landing_page_assets/images/logo.png') }}" alt="Logo"> --}}
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav m-auto">
                                </ul>
                            </div> <!-- navbar collapse -->

                            <div class="navbar-btn d-none d-sm-inline-block">
                                <a class="main-btn" href="/login">Login</a>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->

        <div id="home" class="header-hero bg_cover d-lg-flex align-items-center"
            style="background-image: url(landing_page_assets/images/header-hero.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="header-hero-content">
                            <h1 class="hero-title wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                <b>KA-In</b> <span>Monitoring</span> System <b></b>
                            </h1>
                            <p class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">A system that
                                employs a monitoring system to store all data in a database for the purpose of
                                overseeing individuals' information, monitoring their records, and evaluating their
                                health.
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
            <div class="header-hero-image d-flex align-items-center wow fadeInRightBig" data-wow-duration="1s"
                data-wow-delay="1.1s">
                <div class="image">
                    <img src="{{ asset('landing_page_assets/images/hero-image.png') }}" alt="Hero Image">
                </div>
            </div> <!-- header hero image -->
        </div> <!-- header hero -->
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    <section id="about" class="about-area pt-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="about-title text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                        <h6 class="welcome">WELCOME</h6>
                        <h3 class="title"><span>Discover the convenience of real-time BMI monitoring</span>, empowering
                            you to take control of your health and fitness journey effortlessly.</h3>
                    </div>
                </div>
            </div> <!-- row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-image mt-60 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="{{ asset('landing_page_assets/images/about.png') }}" alt="about">
                    </div> <!-- about image -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="about-content pt-45">

                    </div> <!-- about content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section id="contact" class="contact-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="faq-container">
                        <h2>Frequently Asked Questions</h2>
                        <div id="faqContainer" class="accordion">
                            <div class="accordion-item">
                                <button id="accordion-button-1" aria-expanded="false"><span
                                        class="accordion-title">Why is the moon sometimes out during the
                                        day?</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                                        duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button id="accordion-button-2" aria-expanded="false"><span
                                        class="accordion-title">Why is the sky blue?</span><span class="icon"
                                        aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                                        duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button id="accordion-button-3" aria-expanded="false"><span
                                        class="accordion-title">Will we ever discover aliens?</span><span
                                        class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                                        duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button id="accordion-button-4" aria-expanded="false"><span
                                        class="accordion-title">How much does the Earth weigh?</span><span
                                        class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                                        duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <button id="accordion-button-5" aria-expanded="false"><span
                                        class="accordion-title">How do airplanes stay up?</span><span class="icon"
                                        aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo
                                        duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
            {{-- <div class="contact-info pt-30">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-1 mt-30 d-flex  wow fadeInUp"
                            data-wow-duration="1s" data-wow-delay="0.3s">
                            <div class="contact-info-icon">
                                <i class="lni-map-marker"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">21 King Street, Melbourne <br> Victoria, 1202 Australia.</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-2 mt-30 d-flex  wow fadeInUp"
                            data-wow-duration="1s" data-wow-delay="0.6s">
                            <div class="contact-info-icon">
                                <i class="lni-envelope"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">hello@uideck.com</p>
                                <p class="text">support@uideck.com</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-contact-info contact-color-3 mt-30 d-flex  wow fadeInUp"
                            data-wow-duration="1s" data-wow-delay="0.9s">
                            <div class="contact-info-icon">
                                <i class="lni-phone"></i>
                            </div>
                            <div class="contact-info-content media-body">
                                <p class="text">+99 000 1111 555</p>
                                <p class="text">+88 999 5555 444</p>
                            </div>
                        </div> <!-- single contact info -->
                    </div>
                </div> <!-- row -->
            </div> <!-- contact info --> --}}

        </div> <!-- container -->
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== FOOTER PART START ======-->

    {{-- <footer id="footer" class="footer-area bg_cover"
        style="background-image: url(landing_page_assets/images/footer-bg.jpg)">
        <div class="container">
            <div class="footer-widget pt-30 pb-70">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 order-sm-1 order-lg-1">
                        <div class="footer-about pt-40">
                            <a href="#">
                                <img src="landing_page_assets/images/logo.png" alt="Logo">
                            </a>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus,
                                repudiandae! Totam, nemo sed? Provident.</p>
                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus</p>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-sm-6 order-sm-3 order-lg-2">
                        <div class="footer-link pt-40">
                            <div class="footer-title">
                                <h5 class="title">Services</h5>
                            </div>
                            <ul>
                                <li><a href="#">Business Consultancy</a></li>
                                <li><a href="#">Digital Marketing</a></li>
                                <li><a href="#">Market Analysis</a></li>
                                <li><a href="#">Web Development</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-sm-6 order-sm-4 order-lg-3">
                        <div class="footer-link pt-40">
                            <div class="footer-title">
                                <h5 class="title">About Us</h5>
                            </div>
                            <ul>
                                <li><a href="#">Overview</a></li>
                                <li><a href="#">Why us</a></li>
                                <li><a href="#">Awards & Recognitions</a></li>
                                <li><a href="#">Team</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-sm-6 order-sm-2 order-lg-4">
                        <div class="footer-contact pt-40">
                            <div class="footer-title">
                                <h5 class="title">Contact Info</h5>
                            </div>
                            <div class="contact pt-10">
                                <p class="text">21 King Street, Melbourne <br>
                                    Victoria, 1202 Australia.</p>
                                <p class="text">support@uideck.com</p>
                                <p class="text">+99 000 555 66 22</p>

                                <ul class="social mt-40">
                                    <li><a href="#"><i class="lni-facebook"></i></a></li>
                                    <li><a href="#"><i class="lni-twitter"></i></a></li>
                                    <li><a href="#"><i class="lni-instagram"></i></a></li>
                                    <li><a href="#"><i class="lni-linkedin"></i></a></li>
                                </ul>
                            </div> <!-- contact -->
                        </div> <!-- footer contact -->
                    </div>
                </div> <!-- row -->
            </div>
        </div>
    </footer> --}}

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="landing_page_assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="landing_page_assets/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="landing_page_assets/js/popper.min.js"></script>
    <script src="landing_page_assets/js/bootstrap.min.js"></script>

    <!--====== Slick js ======-->
    <script src="landing_page_assets/js/slick.min.js"></script>

    <!--====== Isotope js ======-->
    <script src="landing_page_assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="landing_page_assets/js/isotope.pkgd.min.js"></script>

    <!--====== Counter Up js ======-->
    <script src="landing_page_assets/js/waypoints.min.js"></script>
    <script src="landing_page_assets/js/jquery.counterup.min.js"></script>

    <!--====== Circles js ======-->
    <script src="landing_page_assets/js/circles.min.js"></script>

    <!--====== Appear js ======-->
    <script src="landing_page_assets/js/jquery.appear.min.js"></script>

    <!--====== WOW js ======-->
    <script src="landing_page_assets/js/wow.min.js"></script>

    <!--====== Headroom js ======-->
    <script src="landing_page_assets/js/headroom.min.js"></script>

    <!--====== Jquery Nav js ======-->
    <script src="landing_page_assets/js/jquery.nav.js"></script>

    <!--====== Scroll It js ======-->
    <script src="landing_page_assets/js/scrollIt.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="landing_page_assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Main js ======-->
    <script src="landing_page_assets/js/main.js"></script>

    <script>
        $(document).ready(function() {
            // GLOBAL VARIABLE
            const APP_URL = "{{ env('APP_URL') }}"
            const API_URL = "{{ env('API_URL') }}"
            const API_TOKEN = localStorage.getItem("API_TOKEN")
            const BASE_API = API_URL + '/faqs'



            function fetchFaq() {
                let form_url = BASE_API;

                $.ajax({
                    url: form_url,
                    method: "GET",
                    headers: {
                        "Accept": "application/json",
                        "Content-Type": "application/json",
                        "Authorization": API_TOKEN,
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        let html_content = ``

                        console.log(data)

                        data.forEach((el) => {
                            html_content += `<div class="accordion-item">
                                <button class="btnView" id="${el.id}" aria-expanded="false"><span
                                        class="accordion-title">Q: ${el.question}</span><span class="icon" aria-hidden="true"></span></button>
                                <div class="accordion-content">
                                    <p>A: ${el.answer}</p>
                                </div>
                            </div>`
                        })

                        $('#faqContainer').html(html_content)
                    },
                    error: function(error) {
                        console.log(error)
                        if (error.responseJSON.errors == null) {
                            swalAlert('warning', error.responseJSON.message)
                        } else {
                            $.each(error.responseJSON.errors, function(key, value) {
                                swalAlert('warning', value)
                            });
                        }
                    }
                    // ajax closing tag
                })
            }

            fetchFaq();


            $(document).on('click', '.btnView', function() {
                if ($(this).attr("aria-expanded") === "true") {
                    $(this).attr("aria-expanded", "false");
                } else {
                    $(this).attr("aria-expanded", "true");
                }
            });


        })
    </script>

</body>

</html>
