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
                            <p><a href="mailto:info@empowercarefoundation.or.tz">info@empowercarefoundation.or.tz </a>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="icon-pin-two"></i>
                        </div>
                        <div class="text">
                            <p>Uyole, Mbeya</p>
                        </div>
                    </li>
                </ul>
                <div class="main-menu__top-right">
                    <div class="main-menu__social-box">
                        <p class="main-menu__social-title">Follow Us On:</p>
                        <div class="main-menu__social">
                            {{-- <a href="#"><i class="icon-facebook"></i></a>
                            <a href="#"><i class="icon-twitter"></i></a> --}}
                            <a href="https://www.linkedin.com/company/105256332/admin/dashboard/?anchor=organization-website-field&editPage=true&editPageActiveTab=details"><i class="icon-link-in"></i></a>
                            <a href="https://www.youtube.com/channel/UCS0OVJU-7Eu_iEVRF8gYIDQ"><i class="icon-play"></i></a>
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
                            <a href="{{route('home')}}"><img src="{{asset('assets/images/empower-logo/logo.jpg') }}"  alt=""></a>
                        </div>
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li>
                                    <a href="{{route('home')}}">Home </a>
                                    
                                </li>
                                <li class="dropdown">
                                    <a href="#">About Us</a>
                                    <ul class="shadow-box">
                                        <li><a href="{{route('about')}}">Who are we</a></li>
                                        <li><a href="{{route('team')}}">Our Team</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">What we Do</a>
                                    <ul class="shadow-box">
                                        <li><a href="{{route('causes')}}">Our Cause</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                <a href="#">Departments</a>
                                    <ul class="shadow-box">
                                        <li><a href="#">Procurements</a></li>
                                        <li><a href="{{route('programs')}}">Our Programs</a></li>
                                        <li><a href="#">Monitoring</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Updates</a>
                                    <ul class="shadow-box">
                                        <li><a href="{{route('articles')}}">Articles</a></li>
                                        <li><a href="{{route('events')}}">Events</a></li>
                                        <li><a href="{{route('album')}}">Album</a></li>
                                        <li><a href="{{route('videos')}}">Video</a></li>
                                        <li><a href="{{route('policies')}}">Policies</a></li>
                                    </ul>
                                </li>
                                
                                
                                <li class="dropdown">
                                    <a href="#">Contact Us</a>
                                    <ul class="shadow-box">
                                        <li>
                                            <a href="{{route('contact-us')}}">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="{{route('faqs')}}">FAQ</a>
                                        </li>
                                        
                                    </ul>
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
                            {{-- <a href="#" class="main-menu__search search-toggler icon-search"></a> --}}
                        </div>
                        <div class="main-menu__btn-box">
                            <a href="{{route('donate')}}" class="main-menu__btn thm-btn">Donate Now<span><i
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