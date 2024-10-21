<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> {{ config('app.name', '') }} </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{asset('assets/images/favicons/site.webmanifest')}}" />
    <meta name="description" content="Anity HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome-all.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/fancybox.min.css')}}" />


    <link rel="stylesheet" href="{{asset('assets/css/module-css/slider.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/footer.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/about.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/found.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/donate.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/who-we-are.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/event.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/blog.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/country.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/cta.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/testimonial.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/module-css/contact.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}" />
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->

    <div class="page-wrapper">
        <!-- top navbar start -->
        @include('website.layout.top')
        <!-- top navbar end -->

        <x-flash/>
        @yield('content')


        <!--Site Footer Start-->
        {{-- @include('website.layout.footer') --}}
        <!--Site Footer End-->




    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="{{route('home')}}" aria-label="logo image"><img src="{{asset('assets/images/resources/logo-2.png')}}" width="130"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@anity</a>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        <span class="scroll-to-top__text"> Go Back Top</span>
    </a>


    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/jarallax.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>
    <script src="{{asset('assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/odometer.min.js')}}"></script>
    <script src="{{asset('assets/js/wNumb.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.js')}}"></script>
    <script src="{{asset('assets/js/isotope.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/gsap/gsap.js')}}"></script>
    <script src="{{asset('assets/js/gsap/ScrollTrigger.js')}}"></script>
    <script src="{{asset('assets/js/gsap/SplitText.js')}}"></script>

    <script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>




    <!-- template js -->
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>