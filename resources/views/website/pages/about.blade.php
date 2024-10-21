@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="About Us" bgImage="assets/images/backgrounds/page-header-bg.jpg" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--About One Start -->
    <section class="about-One">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-One__left  wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-One__img-box">
                            <div class="about-One__img">
                                <img src="{{ asset('assets/images/resources/about-one-img-1.jpg') }}" alt="">
                            </div>
                            <div class="about-One__img-2">
                                <img src="{{ asset('assets/images/resources/about-one-img-2.jpg') }}" alt="">
                            </div>
                            <div class="about-One__provide-box wow zoomIn animated animated" data-wow-delay="500ms"
                                data-wow-duration="2500ms">
                                <div class="about-One__provide-icon">
                                    <span class="icon-pet-care"></span>
                                </div>
                                <div class="about-One__provide-content">
                                    <div class="about-One__provide-count count-box">
                                        <h3 class="count-text" data-stop="250" data-speed="1500">00</h3>
                                        <span>+</span>
                                    </div>
                                    <p class="about-One__provide-count-text">Services we provide</p>
                                </div>
                            </div>
                            <div class="about-One__shape-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-One__right wow fadeInRight" data-wow-delay="300ms">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">About Us</span>
                            </div>
                            <h2 class="section-title__title title-animation">Unite for a Cause
                                <br> Change the World</h2>
                        </div>
                        <div class="about-One__vission-mission">
                            <div class="about-One__tab-box tabs-box">
                                <ul class="tab-buttons clearfix list-unstyled">
                                    <li data-tab="#vission" class="tab-btn active-btn"><span>Our Mission</span></li>
                                    <li data-tab="#mission" class="tab-btn"><span>Our Vision</span></li>
                                    <li data-tab="#goal" class="tab-btn"><span>Our Goal</span></li>
                                </ul>
                                <div class="tabs-content">
                                    <!--tab-->
                                    <div class="tab active-tab" id="vission">
                                        <div class="tabs-content__inner">
                                            <p>Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                                aspernaturaut odit aut fugit, sed quia consequuntur. Dicta sunt
                                                explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <!--tab-->
                                    <div class="tab" id="mission">
                                        <div class="tabs-content__inner">
                                            <p>Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                                aspernaturaut odit aut fugit, sed quia consequuntur. Dicta sunt
                                                explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <!--tab-->
                                    <div class="tab" id="goal">
                                        <div class="tabs-content__inner">
                                            <p>Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                                aspernaturaut odit aut fugit, sed quia consequuntur. Dicta sunt
                                                explicabo. Nemo enim ipsam voluptatem quia voluptas.</p>
                                        </div>
                                    </div>
                                    <!--tab-->
                                </div>
                            </div>
                        </div>
                        <div class="about-One__btn-and-need-help">
                            <div class="about-One__btn-box">
                                <a href="donation-details.html" class="about-One__btn thm-btn">Donate Now<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                            <div class="about-One__need-help">
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="content">
                                    <p>Need help?</p>
                                    <h4><a href="tel:3195550115">(319) 555-0115</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End -->

    <!--Found One Start -->
    <section class="found-one">
        <div class="found-one__bg">
            <div class="found-one__shape-1 float-bob-y">
                <img src="{{ asset('assets/images/shapes/found-one-shape-1.png') }}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Charity Fund</span>
                </div>
                <h2 class="section-title__title title-animation">Together We Can <br> <span>Make</span> a Difference
                </h2>
            </div>
            <div class="row">
                <!--Found One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="found-one__single">
                        <div class="found-one__img-box">
                            <div class="found-one__img">
                                <img src="{{ asset('assets/images/resources/found-1-1.jpg') }}" alt="">
                                <img src="{{ asset('assets/images/resources/found-1-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="found-one__content">
                            <h4 class="found-one__title"><a href="donation-details.html">Help For Ecosystem</a></h4>
                            <p class="found-one__text">Charity and Donation is a categorys that involves giving
                                financial </p>
                            <div class="found-one__goals">
                                <div class="found-one__raised">
                                    <p>Raised</p>
                                    <span>40,802$</span>
                                </div>
                                <div class="found-one__raised">
                                    <p>Goal</p>
                                    <span>100,000$</span>
                                </div>
                            </div>
                            <div class="found-one__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                            <div class="found-one__btn-box">
                                <a href="donation-details.html" class="found-one__btn thm-btn">Donate Now<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Found One Single End-->
                <!--Found One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="found-one__single">
                        <div class="found-one__img-box">
                            <div class="found-one__img">
                                <img src="{{ asset('assets/images/resources/found-1-2.jpg') }}" alt="">
                                <img src="{{ asset('assets/images/resources/found-1-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="found-one__content">
                            <h4 class="found-one__title"><a href="donation-details.html">Water For All</a></h4>
                            <p class="found-one__text">Charity and Donation is a categorys that involves giving
                                financial </p>
                            <div class="found-one__goals">
                                <div class="found-one__raised">
                                    <p>Raised</p>
                                    <span>40,802$</span>
                                </div>
                                <div class="found-one__raised">
                                    <p>Goal</p>
                                    <span>100,000$</span>
                                </div>
                            </div>
                            <div class="found-one__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                            <div class="found-one__btn-box">
                                <a href="donation-details.html" class="found-one__btn thm-btn">Donate Now<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Found One Single End-->
                <!--Found One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="found-one__single">
                        <div class="found-one__img-box">
                            <div class="found-one__img">
                                <img src="{{ asset('assets/images/resources/found-1-3.jpg') }}" alt="">
                                <img src="{{ asset('assets/images/resources/found-1-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="found-one__content">
                            <h4 class="found-one__title"><a href="donation-details.html">Vaccine Aid Camp</a></h4>
                            <p class="found-one__text">Charity and Donation is a categorys that involves giving
                                financial </p>
                            <div class="found-one__goals">
                                <div class="found-one__raised">
                                    <p>Raised</p>
                                    <span>40,802$</span>
                                </div>
                                <div class="found-one__raised">
                                    <p>Goal</p>
                                    <span>100,000$</span>
                                </div>
                            </div>
                            <div class="found-one__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                            <div class="found-one__btn-box">
                                <a href="donation-details.html" class="found-one__btn thm-btn">Donate Now<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Found One Single End-->
            </div>
        </div>
    </section>
    <!--Found One End -->

    <!--Donate One Start -->
    <section class="donate-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="donate-one__single">
                        <div class="donate-one__single-bg"
                            style="background-image: url(assets/images/backgrounds/donate-one-single-bg.jpg);">
                        </div>
                        <h3 class="donate-one__title"><a href="donation-details.html">Help Them With Donation</a>
                        </h3>
                        <p class="donate-one__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem<br> quia
                            voluptas
                            sit aspernaturaut odit aut fugit, sed<br> quia consequuntur. Dicta sunt explicabo. Nemo
                        </p>
                        <div class="donate-one__btn-box">
                            <a href="donation-details.html" class="donate-one__btn thm-btn">Donate Now<span><i
                                        class="icon-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="donate-one__single donate-one__single-2">
                        <div class="donate-one__single-bg"
                            style="background-image: url('{{ asset('assets/images/backgrounds/donate-one-single-bg-two.jpg') }}');">
                        </div>
                        <h3 class="donate-one__title"><a href="become-volunteer.html">Join With Us To Serve As
                                Volenteer</a></h3>
                        <p class="donate-one__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem<br> quia
                            voluptas
                            sit aspernaturaut odit aut fugit, sed<br> quia consequuntur. Dicta sunt explicabo. Nemo
                        </p>
                        <div class="donate-one__btn-box">
                            <a href="become-volunteer.html" class="donate-one__btn thm-btn">Join Now<span><i
                                        class="icon-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Donate One End -->

    <!--Who We Are Start -->
    <section class="who-we-are">
        <div class="who-we-are__shape-3 float-bob-y">
            <img src="{{ asset('assets/images/shapes/who-we-are-shape-3.png') }}" alt="">
        </div>
        <div class="who-we-are__shape-4 float-bob-x">
            <img src="{{ asset('assets/images/shapes/who-we-are-shape-4.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="who-we-are__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Who We Are</span>
                            </div>
                            <h2 class="section-title__title title-animation">Supporting Dreams Changing
                                Lives</h2>
                        </div>
                        <p class="who-we-are__text">Lorem Ipsum is simply dummy a of the printing and type setting
                            industry Loreaim Ipsum has been the industry's standard dummy</p>
                        <div class="who-we-are__progress-box">
                            <ul class="who-we-are__progress-list list-unstyled">
                                <li>
                                    <div class="who-we-are__progress-single">
                                        <p>Total Fund Worth: <span>450,896,070$</span></p>
                                        <div class="who-we-are__progress">
                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="75%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="who-we-are__progress-single">
                                        <p>Total Cases Helped: <span>200+</span></p>
                                        <div class="who-we-are__progress">
                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="80%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="who-we-are__btn-box">
                            <a href="donation-details.html" class="who-we-are__btn thm-btn">Donate Now<span><i
                                        class="icon-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="who-we-are__right">
                        <div class="who-we-are__img-box">
                            <div class="who-we-are__img">
                                <img src="{{ asset('assets/images/resources/who-we-are-img-1.jpg') }}" alt="">
                            </div>
                            <div class="who-we-are__img-2">
                                <img src="{{ asset('assets/images/resources/who-we-are-img-2.jpg') }}" alt="">
                            </div>
                            <div class="who-we-are__shape-1 img-bounce"></div>
                            <div class="who-we-are__shape-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Who We Are End -->

    <!--Event One Start -->
    <section class="event-one pdb">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Our Events</span>
                </div>
                <h2 class="section-title__title title-animation">Join Us in the Fight <br>Against Poverty</h2>
            </div>
            <div class="row">
                <!--Event One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="event-one__single">
                        <div class="event-one__img-box">
                            <div class="event-one__img">
                                <img src="{{ asset('assets/images/event/event-1-1.jpg') }}" alt="">
                            </div>
                            <div class="event-one__date">
                                <p><span class="icon-clock"></span>20th Dec, 2024</p>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <h4 class="event-one__title"><a href="event-details.html">Donation Drive</a></h4>
                            <p class="event-one__text">Lorem Ipsum is simply dummy a of the printing and type
                                setting industry Loreaim Ipsum has</p>
                            <p class="event-one__location"><span class="icon-pin"></span>6391 Elgin St. Celina,
                                10299</p>
                            <div class="event-one__btn-box">
                                <a href="donation-details.html" class="event-one__btn thm-btn">Donate Now<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Event One Single End-->
                <!--Event One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="event-one__single">
                        <div class="event-one__img-box">
                            <div class="event-one__img">
                                <img src="{{ asset('assets/images/event/event-1-2.jpg') }}" alt="">
                            </div>
                            <div class="event-one__date">
                                <p><span class="icon-clock"></span>15th nov, 2023</p>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <h4 class="event-one__title"><a href="event-details.html">win-win survival</a></h4>
                            <p class="event-one__text">Lorem Ipsum is simply dummy a of the printing and type
                                setting industry Loreaim Ipsum has</p>
                            <p class="event-one__location"><span class="icon-pin"></span>6391 Elgin St. Celina,
                                10299</p>
                            <div class="event-one__btn-box">
                                <a href="donation-details.html" class="event-one__btn thm-btn">Donate Now<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Event One Single End-->
                <!--Event One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="100ms">
                    <div class="event-one__single">
                        <div class="event-one__img-box">
                            <div class="event-one__img">
                                <img src="{{ asset('assets/images/event/event-1-3.jpg') }}" alt="">
                            </div>
                            <div class="event-one__date">
                                <p><span class="icon-clock"></span>19th Feb, 2024</p>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <h4 class="event-one__title"><a href="event-details.html">Children Education.</a></h4>
                            <p class="event-one__text">Lorem Ipsum is simply dummy a of the printing and type
                                setting industry Loreaim Ipsum has</p>
                            <p class="event-one__location"><span class="icon-pin"></span>6391 Elgin St. Celina,
                                10299</p>
                            <div class="event-one__btn-box">
                                <a href="donation-details.html" class="event-one__btn thm-btn">Donate Now<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Event One Single End-->
            </div>
        </div>
    </section>
    <!--Event One End -->

    <!--Site Footer Two Start-->
    <footer class="site-footer-two">
        <div class="site-footer-two__shape-1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/site-footer-two-shape-1.png') }}" alt="">
        </div>
        <div class="site-footer-two__top">
            <div class="container">
                <div class="site-footer-two__top-inner">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget-two__about">
                                <h2 class="footer-widget-two__about-title">Donate To Change The World</h2>
                                <p class="footer-widget-two__about-text">category that involves giving financial or
                                    to a
                                    materialt<br> support various causes organizations It allows not </p>
                                <div class="footer-widget-two__btn-box">
                                    <a href="donation-details.html" class="footer-widget-two__btn thm-btn">Donate
                                        Now<span><i class="icon-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget-two__services">
                                <h4 class="footer-widget-two__title">Services</h4>
                                <ul class="footer-widget-two__services-list list-unstyled">
                                    <li><a href="#">Incident Responder</a></li>
                                    <li><a href="#">Secure Managed Fund</a></li>
                                    <li><a href="#">Clean Water All</a></li>
                                    <li><a href="#">Give Education</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget-two__links">
                                <h4 class="footer-widget-two__title">Links</h4>
                                <ul class="footer-widget-two__services-list list-unstyled">
                                    <li><a href="#">Food to individuals</a></li>
                                    <li><a href="#">Temporary housing</a></li>
                                    <li><a href="#">Local shelters</a></li>
                                    <li><a href="#">Natural disasters</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget-two__contact">
                                <h3 class="footer-widget-two__title">Contact Info</h3>
                                <ul class="footer-widget-two__contact-list list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <span class="icon-call"></span>
                                        </div>
                                        <p><a href="tel:0882466422710">+088 (246) 642-27-10</a></p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-envelope"></span>
                                        </div>
                                        <p><a href="mailto:example@mail.com">example@mail.com</a></p>
                                    </li>
                                </ul>
                                <div class="site-footer-two__social">
                                    <a href="#"><i class="icon-facebook"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-instagram"></i></a>
                                    <a href="#"><i class="icon-pintarest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="site-footer-two__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer-two__bottom-inner">
                                <div class="site-footer-two__copyright">
                                    <p class="site-footer-two__copyright-text">Copywright 2024 by <a
                                            href="#">anity</a>. All
                                        Rights Reserved.</p>
                                </div>
                                <div class="site-footer-two__bottom-menu-box">
                                    <ul class="list-unstyled site-footer-two__bottom-menu">
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms of Service</a></li>
                                        <li><a href="#">Cookies Settings</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Site Footer Two End-->
@endsection