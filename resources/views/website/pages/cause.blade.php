@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Our Cause" bgImage="assets/images/backgrounds/page-header-bg.jpg" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Cause Details Start-->
    <section class="cause-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="cause-details__left">
                        <div class="cause-details__img-box">
                            <div class="cause-details__img">
                                <img src="{{ asset('assets/images/project/cause-details-img-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="cause-details__meta list-unstyled">
                            <a href="#"><span class="fas fa-heart"></span>water</a>
                        </div>
                        <h2 class="cause-details__title">African People Need Pure Water</h2>
                        <div class="cause-details__progress-box">
                            <div class="cause-details__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                            <div class="cause-details__goals">
                                <div class="cause-details__raised">
                                    <p><i class="fal fa-donate"></i>70% <span>Raised</span></p>
                                </div>
                                <div class="cause-details__raised">
                                    <p><i class="far fa-analytics"></i> 100,000$<span>Goal</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="cause-details__donation-amout-list">
                            <span>5</span>
                            <span>10</span>
                            <span>20</span>
                            <span>50</span>
                            <span>10</span>
                            <span>custom</span>
                        </div>
                        <div class="cause-details__pament-box">
                            <h2 class="cause-details__pament-title">Select Payment Method</h2>
                            <div class="cause-details__quote-radio">
                                <label class="custom-radio">
                                    <input type="radio" name="myRadios" value="1" checked>
                                    <span class="radio-dot"></span>
                                    <span class="radio-text">Test Donation
                                    </span>
                                </label>
                                <label class="custom-radio">
                                    <input type="radio" name="myRadios" value="2">
                                    <span class="radio-dot"></span>
                                    <span class="radio-text">Offline Donation
                                    </span>
                                </label>
                                <label class="custom-radio">
                                    <input type="radio" name="myRadios" value="2">
                                    <span class="radio-dot"></span>
                                    <span class="radio-text">Credit Card</span>
                                </label>
                            </div>
                        </div>
                        <div class="cause-details__form-box">
                            <form class="contact-form-validated cause-details__form"
                                action="{{asset('assets/inc/sendemail.php') }}" method="post" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <h4 class="cause-details__input-title">First Name</h4>
                                        <div class="cause-details__input-box">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <h4 class="cause-details__input-title">Last Name</h4>
                                        <div class="cause-details__input-box">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <h4 class="cause-details__input-title">Email Address</h4>
                                        <div class="cause-details__input-box">
                                            <input type="email" name="email" placeholder="Email Address"
                                                required="">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="result"></div>
                        </div>
                        <div class="cause-details__donate-and-btn">
                            <h4 class="cause-details__donate-title">Donation Total:</h4>
                            <div class="cause-details__donate-box">
                                <div class="cause-details__donate">
                                    <p>$10</p>
                                </div>
                                <div class="cause-details__donate-btn">
                                    <button type="submit"><span class="fas fa-heart"></span>Donate Now</button>
                                </div>
                            </div>
                        </div>
                        <p class="cause-details__text-1">Web designing in a powerful way of just not an only
                            professions, however, in a passion for our Company. We have to a tendency to believe the
                            idea that smart looking of any website is the first impression on visitors.Web designing
                            in a powerful way of just not an only professions, however, in a passion for our
                            Company. We have</p>
                        <p class="cause-details__text-2">ut many people around the world don’t have that luxury.
                            Every day, about 1,400 children die from diseases caused by unsafe water and poor
                            sanitation. But it doesn’t have to be that way.</p>
                        <p class="cause-details__text-3">Web designing in a powerful way of just not an only
                            professions, however, in a passion for our Company. We have to a tendency to believe the
                            idea that smart looking of any website is the first impression on visitors.Web designing
                            in a powerful way of just not an only professions, however, in a passion for our
                            Company.We have to a tendency to believe the idea that smart looking of any website is
                            the first impression on visitors</p>
                        <div class="cause-details__img-box-2">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="cause-details__img-box-img">
                                        <img src="{{ asset('assets/images/project/cause-details-img-box-img-1.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="cause-details__img-box-img">
                                        <img src="{{ asset('assets/images/project/cause-details-img-box-img-2.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h2 class="cause-details__title-1">Our Causes</h2>
                        <p class="cause-details__text-4">Surely access to clean water should be a basic human right
                            in the <span class="color-black">19th century.</span> If you can only give <span
                                class="color-base">£10</span> just this one time, it will still make a difference.
                        </p>
                        <div class="cause-details__points-box">
                            <ul class="cause-details__points-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <p>Substance abuse prevention including mental health</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <p>Sexual Reproductive Health Rights including family planning</p>
                                </li>
                            </ul>
                            <ul class="cause-details__points-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <p>HIV, Hepatitis and Malaria</p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <p>Communicable and emerging diseases </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <p>Non-Communicable Diseases </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <p>Gender Equality and Equity </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <p>Gender-Based Violence </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <p>Economic Empowerment </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <p>Climate Change </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <p>Advocacy </p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-check"></span>
                                    </div>
                                    <p>Research, Monitoring and Evaluation</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__category">
                            <div class="sidebar__title-box">
                                <h3 class="sidebar__title">Categories</h3>
                            </div>
                            <ul class="sidebar__category-list list-unstyled">
                                <li>
                                    <a href="blog-details.html">Donation Drive<span>59</span></a>
                                </li>
                                <li>
                                    <a href="blog-details.html">Community Outreach<span>35</span></a>
                                </li>
                                <li>
                                    <a href="blog-details.html">Volunteer Assistance<span>12</span></a>
                                </li>
                                <li>
                                    <a href="blog-details.html">Fundraising Event<span>46</span></a>
                                </li>
                                <li>
                                    <a href="blog-details.html">Support Network<span>78</span></a>
                                </li>
                                <li>
                                    <a href="blog-details.html">Philanthropic Initiative<span>89</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar__single sidebar__gallery">
                            <div class="sidebar__title-box">
                                <h3 class="sidebar__title">Gallery</h3>
                            </div>
                            <div class="sidebar__gallery-img">
                                <img src="{{ asset('assets/images/project/sidebar-gallery-img-1.jpg') }}" alt="">
                            </div>
                            <div class="sidebar__gallery-img">
                                <img src="{{ asset('assets/images/project/sidebar-gallery-img-2.jpg') }}" alt="">
                            </div>
                            <div class="sidebar__gallery-img">
                                <img src="{{ asset('assets/images/project/sidebar-gallery-img-3.jpg') }}" alt="">
                            </div>
                            <div class="sidebar__gallery-img">
                                <img src="{{ asset('assets/images/project/sidebar-gallery-img-4.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="sidebar__single sidebar__call-to-action">
                            <div class="sidebar__call-to-action-bg"
                                style="background-image: url('{{asset('assets/images/project/sidebar-call-to-action-bg.jpg') }}')';">
                            </div>
                            <span class="sidebar__call-to-action-sub-title">Call To Action</span>
                            <h3 class="sidebar__call-to-action-title">There are no secrets to success</h3>
                            <div class="sidebar__call-to-action-btn-box">
                                <a href="#" class="sidebar__call-to-action-btn thm-btn">Get in touch<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Cause Details End-->


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