<footer class="site-footer">
    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__about">
                            <div class="footer-widget__about-logo">
                                <a href="{{route('home')}}"><img src="{{asset('assets/images/empower-logo/logo_footer_v2-transparent.png') }}" alt=""></a>
                            </div>
                            <p class="footer-widget__about-text">Our vision is to see a flourishing Tanzania, where individuals and communities thrive in health and development. </p>
                            <div class="site-footer__social">
                                {{-- <a href="#"><i class="icon-facebook"></i></a>
                                <a href="#"><i class="icon-twitter"></i></a> --}}
                                <a href="https://www.linkedin.com/company/105256332/admin/dashboard/?anchor=organization-website-field&editPage=true&editPageActiveTab=details"><i class="icon-link-in"></i></a>
                                <a href="https://www.youtube.com/channel/UCS0OVJU-7Eu_iEVRF8gYIDQ"><i class="icon-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__services">
                            <h4 class="footer-widget__title">Updates</h4>
                            <ul class="footer-widget__services-list list-unstyled">
                                <li><a href="{{route('articles')}}">Articles</a></li>
                                <li><a href="{{route('events')}}">Events</a></li>
                                <li><a href="{{route('album')}}">Album</a></li>
                                <li><a href="{{route('videos')}}">Video</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__links">
                            <h4 class="footer-widget__title">Links</h4>
                            <ul class="footer-widget__services-list list-unstyled">
                                <li><a href="{{route('about')}}">About Us</a></li>
                                <li><a href="{{route('programs')}}">Our Programs</a></li>
                                <li><a href="{{route('causes')}}">Our Cause</a></li>                                        
                                <li><a href="{{route('team')}}">Our Team</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget__contact">
                            <h3 class="footer-widget__title">Contact Info</h3>
                            <ul class="footer-widget__contact-list list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="icon-call"></span>
                                    </div>
                                    <p><a href="tel:255757448534">+(255) 757 448 534</a></p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-envelope"></span>
                                    </div>
                                    <p><a href="mailto:info@empowercarefoundation.or.tz">info@empowercarefoundation.or.tz </a></p>
                                </li>
                                <li>
                                    <div class="icon">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <p>Uyole, Mbeya</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="site-footer__bottom-inner">
                        <div class="site-footer__copyright">
                            <p class="site-footer__copyright-text">Copyright {{date('Y')}} by <a href="#">EmpowerCare</a>.   All
                                Rights Reserved. <a href="https://ufanisiafrica.com/" >Developed by Ufanisi Africa</a>
                               </p>
                        </div>
                        <div class="site-footer__bottom-menu-box">
                            <ul class="list-unstyled site-footer__bottom-menu">
                                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                <li><a href="javascript:void(0)">Terms of Service</a></li>
                                {{-- <li><a href="about.html">Cookies Settings</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>