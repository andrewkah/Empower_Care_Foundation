@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Donations" bgImage="assets/images/backgrounds/page-header-bg.jpg" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Donation Carousel Page Start-->
    <section class="donation-carousel-page">
        <div class="container">
            <div class="donation-carousel-style owl-carousel owl-theme carousel-dot-style">
                <!--Donate Three Single Start-->
                <div class="item">
                    <div class="donate-three__single">
                        <div class="donate-three__img-box">
                            <div class="donate-three__img">
                                <img src="{{asset('assets/images/donate/donate-3-1.jpg') }}" alt="">
                                <img src="{{asset('assets/images/donate/donate-3-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="donate-three__content">
                            <h3 class="donate-three__title"><a href="{{route('donation-details')}}">Children Cancer Help
                                    Fund</a></h3>
                            <p class="donate-three__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit asuraut</p>
                            <div class="donate-three__goals">
                                <div class="donate-three__raised">
                                    <p>Raised:</p>
                                    <span>$5,090</span>
                                </div>
                                <div class="donate-three__raised">
                                    <p>Goal:</p>
                                    <span>$9,090</span>
                                </div>
                            </div>
                            <div class="donate-three__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donate Three Single End-->
                <!--Donate Three Single Start-->
                <div class="item">
                    <div class="donate-three__single donate-three__single-2">
                        <div class="donate-three__img-box">
                            <div class="donate-three__img">
                                <img src="{{asset('assets/images/donate/donate-3-2.jpg') }}" alt="">
                                <img src="{{asset('assets/images/donate/donate-3-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="donate-three__content">
                            <h3 class="donate-three__title"><a href="{{route('donation-details')}}">Clean Water & Health
                                    Food</a></h3>
                            <p class="donate-three__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit asuraut</p>
                            <div class="donate-three__goals">
                                <div class="donate-three__raised">
                                    <p>Raised:</p>
                                    <span>$4,090</span>
                                </div>
                                <div class="donate-three__raised">
                                    <p>Goal:</p>
                                    <span>$6,090</span>
                                </div>
                            </div>
                            <div class="donate-three__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donate Three Single End-->
                <!--Donate Three Single Start-->
                <div class="item">
                    <div class="donate-three__single donate-three__single-3">
                        <div class="donate-three__img-box">
                            <div class="donate-three__img">
                                <img src="{{asset('assets/images/donate/donate-3-3.jpg') }}" alt="">
                                <img src="{{asset('assets/images/donate/donate-3-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="donate-three__content">
                            <h3 class="donate-three__title"><a href="{{route('donation-details')}}">Medicine For
                                    Africans</a></h3>
                            <p class="donate-three__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit asuraut</p>
                            <div class="donate-three__goals">
                                <div class="donate-three__raised">
                                    <p>Raised:</p>
                                    <span>$9,090</span>
                                </div>
                                <div class="donate-three__raised">
                                    <p>Goal:</p>
                                    <span>$11,090</span>
                                </div>
                            </div>
                            <div class="donate-three__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donate Three Single End-->
                <!--Donate Three Single Start-->
                <div class="item">
                    <div class="donate-three__single donate-three__single-1">
                        <div class="donate-three__img-box">
                            <div class="donate-three__img">
                                <img src="{{asset('assets/images/donate/donate-3-4.jpg') }}" alt="">
                                <img src="{{asset('assets/images/donate/donate-3-4.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="donate-three__content">
                            <h3 class="donate-three__title"><a href="{{route('donation-details')}}">Poverty Help Fund</a>
                            </h3>
                            <p class="donate-three__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit asuraut</p>
                            <div class="donate-three__goals">
                                <div class="donate-three__raised">
                                    <p>Raised:</p>
                                    <span>$9,090</span>
                                </div>
                                <div class="donate-three__raised">
                                    <p>Goal:</p>
                                    <span>$11,090</span>
                                </div>
                            </div>
                            <div class="donate-three__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donate Three Single End-->
                <!--Donate Three Single Start-->
                <div class="item">
                    <div class="donate-three__single donate-three__single-2">
                        <div class="donate-three__img-box">
                            <div class="donate-three__img">
                                <img src="{{asset('assets/images/donate/donate-3-5.jpg') }}" alt="">
                                <img src="{{asset('assets/images/donate/donate-3-5.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="donate-three__content">
                            <h3 class="donate-three__title"><a href="{{route('donation-details')}}">Rights Of Poor
                                    Children</a></h3>
                            <p class="donate-three__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit asuraut</p>
                            <div class="donate-three__goals">
                                <div class="donate-three__raised">
                                    <p>Raised:</p>
                                    <span>$9,090</span>
                                </div>
                                <div class="donate-three__raised">
                                    <p>Goal:</p>
                                    <span>$11,090</span>
                                </div>
                            </div>
                            <div class="donate-three__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donate Three Single End-->
                <!--Donate Three Single Start-->
                <div class="item">
                    <div class="donate-three__single donate-three__single-3">
                        <div class="donate-three__img-box">
                            <div class="donate-three__img">
                                <img src="{{asset('assets/images/donate/donate-3-6.jpg') }}" alt="">
                                <img src="{{asset('assets/images/donate/donate-3-6.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="donate-three__content">
                            <h3 class="donate-three__title"><a href="{{route('donation-details')}}">Africans Ecosystem</a>
                            </h3>
                            <p class="donate-three__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit asuraut</p>
                            <div class="donate-three__goals">
                                <div class="donate-three__raised">
                                    <p>Raised:</p>
                                    <span>$9,090</span>
                                </div>
                                <div class="donate-three__raised">
                                    <p>Goal:</p>
                                    <span>$11,090</span>
                                </div>
                            </div>
                            <div class="donate-three__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donate Three Single End-->
                <!--Donate Three Single Start-->
                <div class="item">
                    <div class="donate-three__single">
                        <div class="donate-three__img-box">
                            <div class="donate-three__img">
                                <img src="{{asset('assets/images/donate/donate-3-1.jpg') }}" alt="">
                                <img src="{{asset('assets/images/donate/donate-3-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="donate-three__content">
                            <h3 class="donate-three__title"><a href="{{route('donation-details')}}">Children Cancer Help
                                    Fund</a></h3>
                            <p class="donate-three__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit asuraut</p>
                            <div class="donate-three__goals">
                                <div class="donate-three__raised">
                                    <p>Raised:</p>
                                    <span>$5,090</span>
                                </div>
                                <div class="donate-three__raised">
                                    <p>Goal:</p>
                                    <span>$9,090</span>
                                </div>
                            </div>
                            <div class="donate-three__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donate Three Single End-->
                <!--Donate Three Single Start-->
                <div class="item">
                    <div class="donate-three__single donate-three__single-2">
                        <div class="donate-three__img-box">
                            <div class="donate-three__img">
                                <img src="{{asset('assets/images/donate/donate-3-2.jpg') }}" alt="">
                                <img src="{{asset('assets/images/donate/donate-3-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="donate-three__content">
                            <h3 class="donate-three__title"><a href="{{route('donation-details')}}">Clean Water & Health
                                    Food</a></h3>
                            <p class="donate-three__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit asuraut</p>
                            <div class="donate-three__goals">
                                <div class="donate-three__raised">
                                    <p>Raised:</p>
                                    <span>$4,090</span>
                                </div>
                                <div class="donate-three__raised">
                                    <p>Goal:</p>
                                    <span>$6,090</span>
                                </div>
                            </div>
                            <div class="donate-three__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donate Three Single End-->
                <!--Donate Three Single Start-->
                <div class="item">
                    <div class="donate-three__single donate-three__single-3">
                        <div class="donate-three__img-box">
                            <div class="donate-three__img">
                                <img src="{{asset('assets/images/donate/donate-3-3.jpg') }}" alt="">
                                <img src="{{asset('assets/images/donate/donate-3-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="donate-three__content">
                            <h3 class="donate-three__title"><a href="{{route('donation-details')}}">Medicine For
                                    Africans</a></h3>
                            <p class="donate-three__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit asuraut</p>
                            <div class="donate-three__goals">
                                <div class="donate-three__raised">
                                    <p>Raised:</p>
                                    <span>$9,090</span>
                                </div>
                                <div class="donate-three__raised">
                                    <p>Goal:</p>
                                    <span>$11,090</span>
                                </div>
                            </div>
                            <div class="donate-three__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donate Three Single End-->
            </div>
        </div>
    </section>
    <!--Donation Carousel Page End-->

    <!--Site Footer Two Start-->
    <footer class="site-footer-two">
        <div class="site-footer-two__shape-1 float-bob-y">
            <img src="{{asset('assets/images/shapes/site-footer-two-shape-1.png') }}" alt="">
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
                                    <a href="{{route('donation-details')}}" class="footer-widget-two__btn thm-btn">Donate
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
                                        <p><a href="tel:255784421959">+(255) 784421959</a></p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-envelope"></span>
                                        </div>
                                        <p><a href="mailto:mwirusima@gmail.com">mwirusima@gmail.com</a></p>
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
                                            href="#">EmpowerCare</a>. All
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