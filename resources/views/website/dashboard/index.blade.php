@extends('website.layout.main')
@section('content')
    <!-- Main Sllider Start -->
    <section class="main-slider">
        <div class="swiper-container banner-slider">
            <div class="swiper-wrapper">

                <!--Start Single Swiper Slide-->
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/slider/slider-v1-img-1.jpg);">
                    </div>
                    <div class="image-layer__left-gradient"
                        style="background-image: url(assets/images/shapes/slider-bg1.jpg);"></div>
                    <div class="container">
                        <div class="main-slider-content">
                            <div class="main-slider-content__inner">
                                <div class="sub-title">
                                    <h4>We help companies</h4>
                                </div>
                                <div class="big-title">
                                    <h2>
                                        Together, we can<br> make the world<br> better
                                    </h2>
                                </div>
                                {{-- <div class="btn-box">
                                    <a href="{{route('home')}}#donate" class="thm-btn">
                                        Donate Now
                                        <span>
                                            <i class="icon-arrow-right"></i>
                                        </span>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Swiper Slide-->

                <!--Start Single Swiper Slide-->
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/slider/slider-v1-img-2.jpg);">
                    </div>
                    <div class="image-layer__left-gradient"
                        style="background-image: url(assets/images/shapes/slider-bg1.jpg);"></div>
                    <div class="container">
                        <div class="main-slider-content">
                            <div class="main-slider-content__inner">
                                <div class="sub-title">
                                    <h4>We help companies</h4>
                                </div>
                                <div class="big-title">
                                    <h2>
                                        Give a little<br> change you <br>a lot
                                    </h2>
                                </div>
                                {{-- <div class="btn-box">
                                    <a href="{{route('home')}}#donate" class="thm-btn">
                                        Donate Now
                                        <span>
                                            <i class="icon-arrow-right"></i>
                                        </span>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Swiper Slide-->

                <!--Start Single Swiper Slide-->
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/slider/slider-v1-img-3.jpg);">
                    </div>
                    <div class="image-layer__left-gradient"
                        style="background-image: url(assets/images/shapes/slider-bg1.jpg);"></div>
                    <div class="container">
                        <div class="main-slider-content">
                            <div class="main-slider-content__inner">
                                <div class="sub-title">
                                    <h4>We help companies</h4>
                                </div>
                                <div class="big-title">
                                    <h2>
                                        Every gift counts<br> your Every life<br> matters
                                    </h2>
                                </div>
                                {{-- <div class="btn-box">
                                    <a href="{{route('home')}}#donate" class="thm-btn">
                                        Donate Now
                                        <span>
                                            <i class="icon-arrow-right"></i>
                                        </span>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Single Swiper Slide-->

            </div>
        </div>

        <ul class="banner-slider-nav-four">
            <li class="banner-slider-control-four banner-slider-button-prev" tabindex="0" aria-label="Previous slide">
                <span><i class="icon-arrow-right-two" aria-hidden="true"></i></span>
            </li>
            <li class="banner-slider-control-four banner-slider-button-next" tabindex="0" aria-label="Next slide">
                <span><i class="icon-arrow-right-two" aria-hidden="true"></i></span>
            </li>
        </ul>

    </section>
    <!--Main Sllider Start -->


    <!--Start Welcome one-->
    <section class="welcome-one" id="donate">
        <div class="container">
            <div class="welcome-one__inner">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="welcome-one__content">
                            <div class="section-title text-left sec-title-animation animation-style2">
                                <div class="section-title__tagline-box">
                                    <span class="section-title__tagline">Welcome To EmpowerCare Foundation</span>
                                </div>
                                <h2 class="section-title__title title-animation">
                                    Every Dollar Makes <br>a Difference.
                                </h2>
                            </div>
                            <div class="text">
                                <p>
                                    In a world where many face challenges, your generosity can bring hope. At
                                    [Charity Name], we’re dedicated to [insert cause or mission], but we can’t do it
                                    alone. We need the support of kind-hearted individuals like you to continue our
                                    work.
                                </p>
                            </div>

                            <ul class="list-item row clearfix">
                                <li class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="icon">
                                        <i class="icon-help"></i>
                                    </div>
                                    <div class="title">
                                        <h4>1200</h4>
                                        <h3>Volunteers</h3>
                                    </div>
                                </li>
                                <li class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="icon">
                                        <i class="icon-support"></i>
                                    </div>
                                    <div class="title">
                                        <h4>2200</h4>
                                        <h3>Trusted Funds
                                        </h3>
                                    </div>
                                </li>
                            </ul>

                            <div class="btn-box">
                                <a href="#" class="thm-btn">
                                    Become A Volunteer
                                    <span>
                                        <i class="icon-arrow-right"></i>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-6">
                        <div class="donation-form-one">
                            <div class="inner-title">
                                <h3>Easy Donation</h3>
                            </div>
                            <form id="donation-form-one" name="donation_form-one" class="default-form2" action="#"
                                method="post">
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="form_name" id="formName" placeholder="Name...."
                                            required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="email" name="form_email" id="formEmail" placeholder="Email...."
                                            required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="select-box clearfix">
                                        <select class="wide">
                                            <option data-display="Select Sauses">Select Sauses</option>
                                            <option value="Charity For Food">Charity For Food</option>
                                            <option value="Charity For Education">Charity For Education</option>
                                            <option value="Charity For Water">Charity For Water</option>
                                            <option value="Charity For Natural Disaster">Charity For Natural
                                                Disaster</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="dallor1">Amount</label>
                                    <ul>
                                        <li>
                                            <input type="radio" id="dallor1" name="dallor" checked="checked">
                                            <label for="dallor1">
                                                <i></i>
                                                <span>$10</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="dallor2" name="dallor">
                                            <label for="dallor2">
                                                <i></i>
                                                <span>$20</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="dallor3" name="dallor">
                                            <label for="dallor3">
                                                <i></i>
                                                <span>$30</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="dallor4" name="dallor">
                                            <label for="dallor4">
                                                <i></i>
                                                <span>$40</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="dallor5" name="dallor">
                                            <label for="dallor5">
                                                <i></i>
                                                <span>$50</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="dallor6" name="dallor">
                                            <label for="dallor6">
                                                <i></i>
                                                <span>$100</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="dallor7" name="dallor">
                                            <label for="dallor7">
                                                <i></i>
                                                <span>$500</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>

                                <div class="form-group">
                                    <div class="input-box">
                                        <input type="text" name="form_amount" id="formAmount"
                                            placeholder="Custom Amount...." required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="donation1">Payment Method</label>
                                    <ul>
                                        <li>
                                            <input type="radio" id="donation1" name="donation" checked="checked">
                                            <label for="donation1">
                                                <i></i>
                                                <span>Test Donation</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="donation2" name="donation">
                                            <label for="donation2">
                                                <i></i>
                                                <span>Offline Donation</span>
                                            </label>
                                        </li>
                                        <li>
                                            <input type="radio" id="donation3" name="donation">
                                            <label for="donation3">
                                                <i></i>
                                                <span>Credit Card</span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-box">
                                    <button type="submit" class="thm-btn">
                                        Donate Now
                                        <span><i class="icon-arrow-right"></i></span>
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Welcome one-->

    <!--Donation One Start -->
    <section class="donation-one">
        <div class="donation-one__wrapper">
            <div class="donation-one__left">
                <div class="donation-one__left-bg"
                    style="background-image: url(assets/images/backgrounds/donation-one-left-bg.jpg);"></div>
            </div>
            <div class="donation-one__right">
                <div class="donation-one__content-box">
                    <div class="section-title-two text-left sec-title-animation animation-style2">
                        <div class="section-title-two__tagline-box">
                            <span class="section-title-two__tagline">Join Us Now</span>
                        </div>
                        <h2 class="section-title-two__title title-animation">Helping To Make Our <br> World
                            <span>Better</span> Living
                        </h2>
                    </div>
                    <div class="donation-one__donate-box">
                        <div class="donate-amount wow fadeInUp" data-wow-delay=".5s">
                            <button class="active amount-btn">$10</button>
                            <button class="amount-btn">$30</button>
                            <button class="amount-btn">$50</button>
                            <button class="amount-btn">$100</button>
                            <button class="amount-btn">$200</button>
                        </div>
                        <div class="donate-now wow fadeInUp" data-wow-delay=".7s">
                            <input type="text" class="addAmount-value" placeholder="$ Costume Amount">
                            {{-- <div class="donation-one__btn-box">
                                <a href="#" class="donation-one__btn thm-btn">Donate Now<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Donation One End -->

    <!--Donate One Start -->
    <section class="donate-one pdt">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="donate-one__single">
                        <div class="donate-one__single-bg"
                            style="background-image: url(assets/images/backgrounds/donate-one-single-bg.jpg);">
                        </div>
                        <h3 class="donate-one__title"><a href="#">Help Them With Donation</a>
                        </h3>
                        <p class="donate-one__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem<br> quia
                            voluptas
                            sit aspernaturaut odit aut fugit, sed<br> quia consequuntur. Dicta sunt explicabo. Nemo
                        </p>
                        {{-- <div class="donate-one__btn-box">
                            <a href="{{route('home')}}#donate" class="donate-one__btn thm-btn">Donate Now<span><i
                                        class="icon-arrow-right"></i></span></a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="donate-one__single donate-one__single-2">
                        <div class="donate-one__single-bg"
                            style="background-image: url(assets/images/backgrounds/donate-one-single-bg-two.jpg);">
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

    
    <!--Event One Start -->
    <section class="event-one">
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
                                <img src="assets/images/event/event-1-1.jpg" alt="">
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
                            {{-- <div class="event-one__btn-box">
                                <a href="{{route('home')}}#donate" class="event-one__btn thm-btn">Donate Now<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!--Event One Single End-->
                <!--Event One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="event-one__single">
                        <div class="event-one__img-box">
                            <div class="event-one__img">
                                <img src="assets/images/event/event-1-2.jpg" alt="">
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
                            {{-- <div class="event-one__btn-box">
                                <a href="{{route('home')}}#donate" class="event-one__btn thm-btn">Donate Now<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!--Event One Single End-->
                <!--Event One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="100ms">
                    <div class="event-one__single">
                        <div class="event-one__img-box">
                            <div class="event-one__img">
                                <img src="assets/images/event/event-1-3.jpg" alt="">
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
                            {{-- <div class="event-one__btn-box">
                                <a href="{{route('home')}}#donate" class="event-one__btn thm-btn">Donate Now<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!--Event One Single End-->
            </div>
        </div>
    </section>
    <!--Event One End -->

    <!--Country One Start -->
    <section class="country-one">
        <div class="container">
            <div class="country-one__top-title-box sec-title-animation animation-style1">
                <h1 class="country-one__top-title title-animation">Our   <span>Partners </span></h1>
            </div>
            <div class="row">
                <!--Country One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="country-one__single">
                        <div class="country-one__img">
                            <img src="assets/images/country/country-1-1.jpg" alt="">
                        </div>
                        <h4 class="country-one__title"><a href="#">South Africa</a></h4>
                    </div>
                </div>
                <!--Country One Single End-->
                <!--Country One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="country-one__single">
                        <div class="country-one__img">
                            <img src="assets/images/country/country-1-2.jpg" alt="">
                        </div>
                        <h4 class="country-one__title"><a href="#">Germany</a></h4>
                    </div>
                </div>
                <!--Country One Single End-->
                <!--Country One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="country-one__single">
                        <div class="country-one__img">
                            <img src="assets/images/country/country-1-3.jpg" alt="">
                        </div>
                        <h4 class="country-one__title"><a href="#">South Korea</a></h4>
                    </div>
                </div>
                <!--Country One Single End-->
                <!--Country One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="country-one__single">
                        <div class="country-one__img">
                            <img src="assets/images/country/country-1-4.jpg" alt="">
                        </div>
                        <h4 class="country-one__title"><a href="#">Japan</a></h4>
                    </div>
                </div>
                <!--Country One Single End-->
                <div class="col-xl-3"></div>
                <!--Country One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="country-one__single">
                        <div class="country-one__img">
                            <img src="assets/images/country/country-1-5.jpg" alt="">
                        </div>
                        <h4 class="country-one__title"><a href="#">Turkey</a></h4>
                    </div>
                </div>
                <!--Country One Single End-->
                <!--Country One Single Start-->
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                    <div class="country-one__single">
                        <div class="country-one__img">
                            <img src="assets/images/country/country-1-6.jpg" alt="">
                        </div>
                        <h4 class="country-one__title"><a href="#">Indonesia</a></h4>
                    </div>
                </div>
                <!--Country One Single End-->
                <div class="col-xl-3"></div>
            </div>
        </div>
    </section>
    <!--Country One End -->

    <!--Stat Project Style1-->
    <section class="project-style1">
        <div class="container">
            <div class="project-style1__inner">
                <div class="project-style1__carousel owl-theme owl-carousel">

                    <!--Start Single Project Style1-->
                    <div class="item">
                        <div class="single-project-style1">
                            <div class="img-box">
                                <img src="assets/images/gallery/gallery-v1-1.jpg" alt="Image">
                                <div class="overlay-icon">
                                    <a class="lightbox-image" data-fancybox="gallery"
                                        href="{{ asset('assets/images/gallery/gallery-v1-1.jpg') }}">
                                        <i class="fa fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Project Style1-->
                    <!--Start Single Project Style1-->
                    <div class="item">
                        <div class="single-project-style1">
                            <div class="img-box">
                                <img src="assets/images/gallery/gallery-v1-2.jpg" alt="Image">
                                <div class="overlay-icon">
                                    <a class="lightbox-image" data-fancybox="gallery"
                                        href="{{ asset('assets/images/gallery/gallery-v1-2.jpg') }}">
                                        <i class="fa fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Project Style1-->
                    <!--Start Single Project Style1-->
                    <div class="item">
                        <div class="single-project-style1">
                            <div class="img-box">
                                <img src="assets/images/gallery/gallery-v1-3.jpg" alt="Image">
                                <div class="overlay-icon">
                                    <a class="lightbox-image" data-fancybox="gallery"
                                        href="{{ asset('assets/images/gallery/gallery-v1-3.jpg') }}">
                                        <i class="fa fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Project Style1-->
                    <!--Start Single Project Style1-->
                    <div class="item">
                        <div class="single-project-style1">
                            <div class="img-box">
                                <img src="assets/images/gallery/gallery-v1-4.jpg" alt="Image">
                                <div class="overlay-icon">
                                    <a class="lightbox-image" data-fancybox="gallery"
                                        href="{{ asset('assets/images/gallery/gallery-v1-4.jpg') }}">
                                        <i class="fa fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Project Style1-->
                    <!--Start Single Project Style1-->
                    <div class="item">
                        <div class="single-project-style1">
                            <div class="img-box">
                                <img src="assets/images/gallery/gallery-v1-5.jpg" alt="Image">
                                <div class="overlay-icon">
                                    <a class="lightbox-image" data-fancybox="gallery"
                                        href="{{ asset('assets/images/gallery/gallery-v1-5.jpg') }}">
                                        <i class="fa fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Project Style1-->
                </div>
            </div>
        </div>
    </section>
    <!--End Project Style1-->


    <!--Blog One Start -->
    <section class="blog-one">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">News And Blogs</span>
                </div>
                <h2 class="section-title__title title-animation">Lending a Hand<br> Spreading Hope</h2>
            </div>
            <div class="row">
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-1.jpg" alt="">
                            </div>
                            <div class="blog-one__date">
                                <p>20<span><br>feb</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <h4 class="blog-one__title"><a href="blog-details.html">Caring for the Elderly and
                                    Vulnerable Strategy </a></h4>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.html" class="blog-one__btn thm-btn">rEAD mORe<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-2.jpg" alt="">
                            </div>
                            <div class="blog-one__date">
                                <p>15<span><br>Nov</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <h4 class="blog-one__title"><a href="blog-details.html">Our Goal Is Help The Poor Child
                                    Around The World</a></h4>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.html" class="blog-one__btn thm-btn">rEAD mORe<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-3.jpg" alt="">
                            </div>
                            <div class="blog-one__date">
                                <p>25<span><br>Jun</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <h4 class="blog-one__title"><a href="blog-details.html">Education For Poor Children Is A
                                    Must Now</a></h4>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.html" class="blog-one__btn thm-btn">rEAD mORe<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
            </div>
        </div>
    </section>
    <!--Blog One End -->






    <!--CTA One Start -->
    <section class="cta-one">
        <div class="cta-one__bg" style="background-image: url(assets/images/backgrounds/cta-one-bg.jpg);"></div>
        <div class="container">
            <div class="cta-one__inner">
                <div class="cta-one__title-box sec-title-animation animation-style1">
                    <h2 class="cta-one__title title-animation">Creating Lasting Change in <br>Communities Worldwide
                    </h2>
                </div>
                <div class="cta-one__btn-box">
                    <a href="{{route('home')}}#donate" class="cta-one__btn-1 thm-btn">Donate Now<span><i
                                class="icon-arrow-right"></i></span></a>
                    <a href="become-volunteer.html" class="cta-one__btn-2 thm-btn">Become A volunteer<span><i
                                class="icon-arrow-right"></i></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--CTA One End -->

    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection
