<header class="main-header">
    <div class="main-menu__top">
        <div class="container">
            <div class="main-menu__top-inner">
                <ul class="list-unstyled main-menu__contact-list">
                    <li>
                        <div class="icon">
                            <i class="icon-envelope"></i>
                        </div>
                        <div class="text">
                            <p><a href="mailto:example@gamil.com">example@gamil.com</a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="icon-pin-two"></i>
                        </div>
                        <div class="text">
                            <p>12 Green Road, 05 New York</p>
                        </div>
                    </li>
                </ul>
                <div class="main-menu__top-right">
                    <div class="main-menu__social-box">
                        <p class="main-menu__social-title">Follow Us On:</p>
                        <div class="main-menu__social">
                            <a href="#"><i class="icon-facebook"></i></a>
                            <a href="#"><i class="icon-twitter"></i></a>
                            <a href="#"><i class="icon-link-in"></i></a>
                            <a href="#"><i class="icon-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="container">
                <div class="main-menu__wrapper-inner">
                    <div class="main-menu__left">
                        <div class="main-menu__logo">
                            <a href="{{route('home')}}"><img src="assets/images/resources/logo-1.png" alt=""></a>
                        </div>
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li>
                                    <a href="{{route('home')}}">Home </a>
                                    
                                </li>
                                <li class="dropdown">
                                    <a href="#">What we Offer</a>
                                    <ul class="shadow-box">
                                        <li><a href="{{route('events')}}">Events</a></li>
                                        <li><a href="{{route('news')}}">Testimonials(News)</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">People</a>
                                    <ul class="shadow-box">
                                        <li><a href="{{route('team')}}">Team</a></li>
                                        <li><a href="{{route('sponsors')}}">Sponsors</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">About Us</a>
                                    <ul class="shadow-box">
                                        <li><a href="{{route('about')}}">About</a></li>
                                        <li><a href="{{route('causes')}}">Our Cause</a></li>
                                    </ul>
                                </li>
                                
                                <li class="dropdown">
                                    <a href="#">Gallery</a>
                                    <ul class="shadow-box">
                                        <li><a href="#">Album</a></li>
                                        <li><a href="#">Videos</a></li>
                                        <li><a href="#">Downloads</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{route('contact-us')}}">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="main-menu__right">
                        {{-- <div class="main-menu__call">
                            <div class="main-menu__call-icon">
                                <i class="icon-call"></i>
                            </div>
                            <div class="main-menu__call-content">
                                <p class="main-menu__call-sub-title">Call Anytime</p>
                                <h5 class="main-menu__call-number"><a href="tel:9288006780">+92 ( 8800 ) -
                                        6780</a></h5>
                            </div>
                        </div> --}}
                        <div class="main-menu__search-box">
                            <a href="#" class="main-menu__search search-toggler icon-search"></a>
                        </div>
                        <div class="main-menu__btn-box">
                            <a href="donation-details.html" class="main-menu__btn thm-btn">Donate Now<span><i
                                        class="icon-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
</div><!-- /.stricky-header -->