@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Album" bgImage="assets/images/backgrounds/page-header-bg.jpg" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Projects Page Start-->
    <section class="projects-page">
        <div class="container">
            <div class="row">
                <!--Projects Page Single Start-->
                <div class="col-xl-7 col-lg-6 col-md-6">
                    <div class="projects-page__single">
                        <div class="projects-page__img">
                            <img src="{{asset('assets/images/project/projects-page-1-1.jpg') }}" alt="">
                            <div class="projects-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/project/projects-page-1-1.jpg') }}"><span
                                        class="fas fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Page Single Start-->
                <!--Projects Page Single Start-->
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="projects-page__single">
                        <div class="projects-page__img">
                            <img src="{{asset('assets/images/project/projects-page-1-2.jpg') }}" alt="">
                            <div class="projects-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/project/projects-page-1-2.jpg') }}"><span
                                        class="fas fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Page Single Start-->
                <!--Projects Page Single Start-->
                <div class="col-xl-5 col-lg-6 col-md-6">
                    <div class="projects-page__single">
                        <div class="projects-page__img">
                            <img src="{{asset('assets/images/project/projects-page-1-3.jpg') }}" alt="">
                            <div class="projects-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/project/projects-page-1-3.jpg') }}"><span
                                        class="fas fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Page Single Start-->
                <!--Projects Page Single Start-->
                <div class="col-xl-7 col-lg-6 col-md-6">
                    <div class="projects-page__single">
                        <div class="projects-page__img">
                            <img src="{{asset('assets/images/project/projects-page-1-4.jpg') }}" alt="">
                            <div class="projects-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/project/projects-page-1-4.jpg') }}"><span
                                        class="fas fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Page Single Start-->
                <!--Projects Page Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="projects-page__single">
                        <div class="projects-page__img">
                            <img src="{{asset('assets/images/project/projects-page-1-5.jpg') }}" alt="">
                            <div class="projects-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/project/projects-page-1-5.jpg') }}"><span
                                        class="fas fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Page Single Start-->
                <!--Projects Page Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="projects-page__single">
                        <div class="projects-page__img">
                            <img src="{{asset('assets/images/project/projects-page-1-6.jpg') }}" alt="">
                            <div class="projects-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/project/projects-page-1-6.jpg') }}"><span
                                        class="fas fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Page Single Start-->
                <!--Projects Page Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="projects-page__single">
                        <div class="projects-page__img">
                            <img src="{{asset('assets/images/project/projects-page-1-7.jpg') }}" alt="">
                            <div class="projects-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/project/projects-page-1-7.jpg') }}"><span
                                        class="fas fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Page Single Start-->
            </div>
        </div>
    </section>
    <!--Projects Page End-->

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
                                    <a href="{{route('home')}}#donate" class="footer-widget-two__btn thm-btn">Donate
                                        Now<span><i class="icon-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget-two__services">
                                <h4 class="footer-widget-two__title">Services</h4>
                                <ul class="footer-widget-two__services-list list-unstyled">
                                    <li><a href="about.html">Incident Responder</a></li>
                                    <li><a href="about.html">Secure Managed Fund</a></li>
                                    <li><a href="about.html">Clean Water All</a></li>
                                    <li><a href="about.html">Give Education</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget-two__links">
                                <h4 class="footer-widget-two__title">Links</h4>
                                <ul class="footer-widget-two__services-list list-unstyled">
                                    <li><a href="about.html">Food to individuals</a></li>
                                    <li><a href="about.html">Temporary housing</a></li>
                                    <li><a href="about.html">Local shelters</a></li>
                                    <li><a href="about.html">Natural disasters</a></li>
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
                                        <li><a href="about.html">Privacy Policy</a></li>
                                        <li><a href="about.html">Terms of Service</a></li>
                                        <li><a href="about.html">Cookies Settings</a></li>
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