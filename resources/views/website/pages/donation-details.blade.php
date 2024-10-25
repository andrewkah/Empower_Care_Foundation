@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__shape-1 float-bob-y">
            <img src="{{ asset('assets/images/shapes/page-header-shape-1.png') }}" alt="">
        </div>
        <div class="page-header__shape-2 float-bob-x">
            <img src="{{ asset('assets/images/shapes/page-header-shape-2.png') }}" alt="">
        </div>
        <div class="page-header__bg" style="background-image: url('{{asset('assets/images/backgrounds/page-header-bg.jpg') }}');">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>Donation details</h2>
                <div class="thm-breadcrumb__box">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index.html">Home</a></li>
                        <li><span class="fas fa-angle-right"></span></li>
                        <li>Donation details</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Donation Details Start -->
    <section class="donation-details">
        <div class="container">
            <div class="donation-details__inner">
                <div class="donation-details__payment-method-box">
                    <h3 class="donation-details__payment-method-title">Select Payment Method</h3>
                    <div class="donation-details__quote-radio">
                        <label class="custom-radio">
                            <input type="radio" name="myRadios" value="1" checked>
                            <span class="radio-dot"></span>
                            <span class="radio-text">Visa</span>
                        </label>
                        <label class="custom-radio">
                            <input type="radio" name="myRadios" value="2">
                            <span class="radio-dot"></span>
                            <span class="radio-text">Paypal</span>
                        </label>
                    </div>
                </div>
                <div class="donation-details__personal-info">
                    <h3 class="donation-details__personal-info-title">Personal Information</h3>
                    <form class="contact-form-validated donation-details__form" action="{{asset('assets/inc/sendemail.php') }}"
                        method="post" novalidate="novalidate">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="donation-details__input-box">
                                    <p class="donation-details__input-box-title">Your First Name*</p>
                                    <input type="text" name="name" placeholder="First Name..." required="">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="donation-details__input-box">
                                    <p class="donation-details__input-box-title">Your Last Name*</p>
                                    <input type="text" name="Last Name" placeholder="Last Name..." required="">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="donation-details__input-box">
                                    <p class="donation-details__input-box-title">Your E-mail Address*</p>
                                    <input type="email" name="Email" placeholder="E-mail Address..." required="">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="donation-details__donate-box-outer">
                                    <div class="donation-details__donate-box">
                                        <div class="donate-now">
                                            <p class="donation-details__input-box-title">Enter Donation Amount*</p>
                                            <input type="text" class="addAmount-value"
                                                placeholder="$ Costume Amount">
                                        </div>
                                        <h4 class="donation-details__donate-box-divider">Or</h4>
                                        <div class="donate-amount">
                                            <p class="donation-details__input-box-title">Select Amount*</p>
                                            <button class="active amount-btn">$5,000</button>
                                            <button class="amount-btn">$3,000</button>
                                            <button class="amount-btn">$1,000</button>
                                        </div>
                                    </div>
                                    <h3 class="donation-details__donate-amout"><span>Total Amount: </span>$587987
                                    </h3>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="donation-details__btn-box">
                                    <button type="submit" class="thm-btn donation-details__btn">Donate Now<span><i
                                                class="icon-arrow-right"></i></span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Donation Details End -->

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