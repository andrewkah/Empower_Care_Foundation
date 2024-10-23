@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Event Details" bgImage="assets/images/backgrounds/page-header-bg.jpg" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Event Details Start-->
    <section class="event-details">
        <div class="container">
            <div class="event-details__inner">
                <div class="event-details__img">
                    <img src="{{ asset('assets/images/event/event-details-img-1.jpg') }}" alt="">
                </div>
                <p class="event-details__text-1">Southern grayling trout-perch. Sharksucker sea toad candiru rocket
                    danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata.</p>
                <p class="event-details__text-2">Minnow snoek icefish velvet-belly shark, California halibut round
                    stingray northern sea robin. Southern grayling trout-perch. Sharksucker sea toad candiru rocket
                    danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata.
                    Midshipman dartfish Modoc sucker, yellowtail kingfish basslet. Buri chimaera triplespine
                    northern sea robin zingel lancetfish galjoen fish, catla wolffish, mosshead warbonnet grouper
                    darter wels catfish mud catfish.</p>
                <div class="event-details__text-box">
                    <p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere vive rra
                        .Aliquam eros justo, posuere lobortis, viverra laoreet augue mattis fermentu m ul amcorper
                        viverra laoreet.flounder European minnow black dragonfish orbicular batfish stingray
                        tenpounder. Sucker lionfish garibaldi surgeonfish</p>
                </div>
                <p class="event-details__text-3">Web designing in a powerful way of just not an only professions,
                    however, in a passion for our Company. We have to a tendency to believe the idea that smart
                    looking of any website is the first impression on visitors.Web designing in a powerful way of
                    just not an only professions, however, in a passion for our Company. We have</p>
                <p class="event-details__text-4">Web designing in a powerful way of just not an only professions,
                    however, in a passion for our Company. We have to a tendency to believe the idea that smart</p>
                <ul class="event-details__points list-unstyled">
                    <li>
                        <div class="event-details__points-shape"></div>
                        <p class="event-details__points-text">Grayling Mexican golden trout; Chinook salmon bramble
                            shark</p>
                    </li>
                    <li>
                        <div class="event-details__points-shape"></div>
                        <p class="event-details__points-text">Scat zebra pleco graveldiver river shark tripod fish;
                            flagtail bala</p>
                    </li>
                    <li>
                        <div class="event-details__points-shape"></div>
                        <p class="event-details__points-text">Hatchetfish pricklefish sixgill ray sawfish scaly
                            dragonfish! Grayling Mexican</p>
                    </li>
                    <li>
                        <div class="event-details__points-shape"></div>
                        <p class="event-details__points-text">Grayling Mexican golden trout; Chinook salmon bramble
                            shark sand stargazer Steve fish</p>
                    </li>
                    <li>
                        <div class="event-details__points-shape"></div>
                        <p class="event-details__points-text">Scat zebra pleco graveldiver river shark tripod fish;
                            flagtail bala shark</p>
                    </li>
                    <li>
                        <div class="event-details__points-shape"></div>
                        <p class="event-details__points-text">Burma danio black bass straptail southern Dolly Varden
                            orbicular velvetfish</p>
                    </li>
                </ul>
                <p class="event-details__text-5">Web designing in a powerful way of just not an only professions,
                    however, in a passion for our Company. We have to a tendency to believe the idea that smart
                    looking of any website is the first impression on visitors.Web designing in a powerful way of
                    just not an only professions, however, in a passion for our Company. We have Burma danio black
                    bass straptail southern Dolly Varden orbicular velvetfish trumpetfish; bluntnose minnow.
                    Hatchetfish pricklefish sixgill ray sawfish scaly dragonfish! Grayling Mexican golden trout;
                    Chinook salmon bramble shark sand stargazer Steve fish</p>
            </div>
            <div class="event-details__events-box">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="event-details__event-single">
                            <h3>Details</h3>
                            <ul class="event-details__event-list list-unstyled">
                                <li>
                                    <p><span>Start:</span>September 11’ 24</p>
                                </li>
                                <li>
                                    <p><span>Finish:</span>October 03’ 24</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="event-details__event-single">
                            <h3>Organizer</h3>
                            <ul class="event-details__event-list list-unstyled">
                                <li>
                                    <p><span>Phone:</span><a href="tel:31859644725">+31 85 964 47 25</a></p>
                                </li>
                                <li>
                                    <p><span>E-mail:</span><a href="mailto:helpo@gmail.com">helpo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="event-details__event-single">
                            <h3>Venue</h3>
                            <ul class="event-details__event-list list-unstyled">
                                <li>
                                    <p><span>Location:</span>Dark Spurt,</p>
                                </li>
                                <li>
                                    <p>San Francisco, CA 94528</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Event Details End-->

    <!--Two Section Start-->
    <section class="additional-event">
        <div class="additional-event__wrapper">
            <div class="additional-event__left">
                <div class="additional-event__bg"
                    style="background-image: url('{{ asset('assets/images/backgrounds/additional-event-left-bg.jpg')}}');"></div>
                <div class="additional-event__content-box">
                    <p class="additional-event__sub-title">The Culture of</p>
                    <h2 class="additional-event__title">USA Volunteer</h2>
                </div>
            </div>
            <div class="additional-event__right">
                <div class="additional-event__bg"
                    style="background-image: url('{{ asset('assets/images/backgrounds/additional-event-right-bg.jpg')}}');"></div>
                <div class="additional-event__content-box">
                    <p class="additional-event__sub-title">Trinity</p>
                    <h2 class="additional-event__title">trash Bash</h2>
                </div>
            </div>
        </div>
    </section>
    <!--Two Section Start-->

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