@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Contact Us" bgImage="assets/images/backgrounds/page-header-bg.jpg"
        homeLink="{{ url('/') }}" />
    <!--Page Header End-->
    <!--Contact One Start-->
    <section class="contact-one">
        <div class="container">
            <div class="contact-one__inner">
                <div class="section-title text-left sec-title-animation animation-style2">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Contact Us</span>
                    </div>
                    <h2 class="section-title__title title-animation">Empowering Communities<br> through Donations
                    </h2>
                </div>
                <form class="contact-form-validated contact-one__form" action="{{asset('assets/inc/sendemail.php') }}" method="post"
                    novalidate="novalidate">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <h4 class="contact-one__input-title">Your Name</h4>
                            <div class="contact-one__input-box">
                                <div class="contact-one__input-icon">
                                    <span class="icon-user"></span>
                                </div>
                                <input type="text" name="name" placeholder="Name" required="">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <h4 class="contact-one__input-title">Email Address</h4>
                            <div class="contact-one__input-box">
                                <div class="contact-one__input-icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <input type="email" name="email" placeholder="someone@example.com" required="">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <h4 class="contact-one__input-title">Your phone</h4>
                            <div class="contact-one__input-box">
                                <div class="contact-one__input-icon">
                                    <span class="icon-call"></span>
                                </div>
                                <input type="text" name="Phone" placeholder="your phone..." required="">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <h4 class="contact-one__input-title">Message</h4>
                            <div class="contact-one__input-box text-message-box">
                                <div class="contact-one__input-icon">
                                    <span class="icon-envelope"></span>
                                </div>
                                <textarea name="message" placeholder="write message.."></textarea>
                            </div>
                            <div class="contact-one__btn-box">
                                <button type="submit" class="thm-btn contact-one__btn">Send Messege<span><i
                                            class="icon-arrow-right"></i></span></button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="result"></div>
            </div>
        </div>
    </section>
    <!--Contact One End-->

    <!--Contact Two Start-->
    <section class="contact-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-two__left">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                            class="contact-two__google-map" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-two__right">
                        <ul class="contact-two__contact-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-pin-two"></span>
                                </div>
                                <div class="content">
                                    <h4>Address</h4>
                                    <p>2972 Westheimer Rd. Santa </p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-envelope"></span>
                                </div>
                                <div class="content">
                                    <h4>Email Address</h4>
                                    <p><a href="mailto:nevaeh.sons@example.com">nevaeh.sons@example.com</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-call"></span>
                                </div>
                                <div class="content">
                                    <h4>Phone number</h4>
                                    <p><a href="tel:7045550127">(704) 555-0127</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Two End-->

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
