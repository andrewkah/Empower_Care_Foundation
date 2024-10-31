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
                                    <span class="section-title__tagline">Welcome To EmpowerCare</span>
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














    <!--About One Start -->
    <section class="about-One">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-One__left  wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-One__img-box">
                            <div class="about-One__img">
                                <img src="assets/images/resources/about-one-img-1.jpg" alt="">
                            </div>
                            <div class="about-One__img-2">
                                <img src="assets/images/resources/about-one-img-2.jpg" alt="">
                            </div>
                            <div class="about-One__provide-box wow zoomIn animated animated" data-wow-delay="500ms"
                                data-wow-duration="2500ms">
                                <div class="about-One__provide-icon">
                                    <span class="icon-pet-care"></span>
                                </div>
                                <div class="about-One__provide-content">
                                    <div class="about-One__provide-count count-box">
                                        <h3 class="count-text" data-stop="250" data-speed="1500">00</h3>
                                        <span>+</span>
                                    </div>
                                    <p class="about-One__provide-count-text">Services we provide</p>
                                </div>
                            </div>
                            <div class="about-One__shape-1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-One__right wow fadeInRight" data-wow-delay="300ms">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">About Us</span>
                            </div>
                            <h2 class="section-title__title title-animation">Unite for a Cause
                                <br> Change the World
                            </h2>
                        </div>
                        <div class="about-One__vission-mission">
                            <div class="about-One__tab-box tabs-box">
                                <ul class="tab-buttons clearfix list-unstyled">
                                    <li data-tab="#vission" class="tab-btn active-btn"><span>Our Vision</span></li>
                                    <li data-tab="#mission" class="tab-btn"><span>Our Mission</span></li>
                                    <li data-tab="#goal" class="tab-btn"><span>Our Values</span></li>
                                </ul>
                                <div class="tabs-content">
                                    <!--tab-->
                                    <div class="tab active-tab" id="vission">
                                        <div class="tabs-content__inner">
                                            <p>Our vision is to see a flourishing Tanzania, where individuals and
                                                communities thrive in health and development.</p>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <!--tab-->
                                    <div class="tab" id="mission">
                                        <div class="tabs-content__inner">
                                            <p>To foster the holistic development of Tanzanian individuals and communities
                                                by promoting health, empowerment, and resilience.</p>
                                            <p>Our key focus areas include; healthcare enhancement, with an emphasis on
                                                maternal, newborn, adolescent and young people, and child health, HIV,
                                                Hepatitis, Gender Equality, Gender Based Violence, climate change
                                                resilience, substance abuse prevention, advocacy for policy change, and
                                                building strong partnerships with local governments, private sector,
                                                educational institutions, and international organizations.</p>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <!--tab-->
                                    <div class="tab" id="goal">
                                        <div class="tabs-content__inner">
                                            <h6>Quality</h6>
                                            <p>We prioritize the highest standards in delivering services that meet the
                                                diverse needs of the communities we serve.</p>
                                            <h6>Integrity</h6>
                                            <p>Transparency, accountability, and honesty guide all of our actions and
                                                decisions.</p>
                                            <h6>Inclusivity</h6>
                                            <p>We embrace diversity and work to ensure that all voices, especially those of
                                                marginalized groups, are heard and respected.</p>
                                            <h6>Collaboration</h6>
                                            <p>We believe in the power of partnerships and actively engage with stakeholders
                                                to foster sustainable, community-driven solutions.</p>
                                            <h6>Resilience</h6>
                                            <p>We are committed to building the capacity of individuals and communities to
                                                overcome challenges and thrive in the face of adversity.</p>
                                        </div>
                                    </div>
                                    <!--tab-->
                                </div>
                            </div>
                        </div>
                        <div class="about-One__btn-and-need-help">
                            {{-- <div class="about-One__btn-box">
                                <a href="{{route('home')}}#donate" class="about-One__btn thm-btn">Donate Now<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div> --}}
                            <div class="about-One__need-help">
                                <div class="icon">
                                    <span class="icon-phone-call"></span>
                                </div>
                                <div class="content">
                                    <p>Need help?</p>
                                    <h4><a href="tel:255757448534">(255) 757-448534</a></h4>
                                    <h4><a href="tel:255784421959">(255) 784-421959</a></h4>
                                    <h4><a href="tel:255746869255">(255) 746-869255</a></h4>
                                    <h4><a href="tel:255767210313">(255) 767-210313</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End -->

    {{-- <!--Found One Start -->
    <section class="found-one">
        <div class="found-one__bg">
            <div class="found-one__shape-1 float-bob-y">
                <img src="assets/images/shapes/found-one-shape-1.png" alt="">
            </div>
        </div>
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Charity Fund</span>
                </div>
                <h2 class="section-title__title title-animation">Together We Can <br> <span>Make</span> a Difference
                </h2>
            </div>
            <div class="row">
                <!--Found One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="found-one__single">
                        <div class="found-one__img-box">
                            <div class="found-one__img">
                                <img src="assets/images/resources/found-1-1.jpg" alt="">
                                <img src="assets/images/resources/found-1-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="found-one__content">
                            <h4 class="found-one__title"><a href="{{route('home')}}#donate">Help For Ecosystem</a></h4>
                            <p class="found-one__text">Charity and Donation is a categorys that involves giving
                                financial </p>
                            <div class="found-one__goals">
                                <div class="found-one__raised">
                                    <p>Raised</p>
                                    <span>40,802$</span>
                                </div>
                                <div class="found-one__raised">
                                    <p>Goal</p>
                                    <span>100,000$</span>
                                </div>
                            </div>
                            <div class="found-one__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                            <div class="found-one__btn-box">
                                <a href="{{route('home')}}#donate" class="found-one__btn thm-btn">Donate Now<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Found One Single End-->
                <!--Found One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                    <div class="found-one__single">
                        <div class="found-one__img-box">
                            <div class="found-one__img">
                                <img src="assets/images/resources/found-1-2.jpg" alt="">
                                <img src="assets/images/resources/found-1-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="found-one__content">
                            <h4 class="found-one__title"><a href="{{route('home')}}#donate">Water For All</a></h4>
                            <p class="found-one__text">Charity and Donation is a categorys that involves giving
                                financial </p>
                            <div class="found-one__goals">
                                <div class="found-one__raised">
                                    <p>Raised</p>
                                    <span>40,802$</span>
                                </div>
                                <div class="found-one__raised">
                                    <p>Goal</p>
                                    <span>100,000$</span>
                                </div>
                            </div>
                            <div class="found-one__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                            <div class="found-one__btn-box">
                                <a href="{{route('home')}}#donate" class="found-one__btn thm-btn">Donate Now<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Found One Single End-->
                <!--Found One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
                    <div class="found-one__single">
                        <div class="found-one__img-box">
                            <div class="found-one__img">
                                <img src="assets/images/resources/found-1-3.jpg" alt="">
                                <img src="assets/images/resources/found-1-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="found-one__content">
                            <h4 class="found-one__title"><a href="{{route('home')}}#donate">Vaccine Aid Camp</a></h4>
                            <p class="found-one__text">Charity and Donation is a categorys that involves giving
                                financial </p>
                            <div class="found-one__goals">
                                <div class="found-one__raised">
                                    <p>Raised</p>
                                    <span>40,802$</span>
                                </div>
                                <div class="found-one__raised">
                                    <p>Goal</p>
                                    <span>100,000$</span>
                                </div>
                            </div>
                            <div class="found-one__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                            <div class="found-one__btn-box">
                                <a href="{{route('home')}}#donate" class="found-one__btn thm-btn">Donate Now<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Found One Single End-->
            </div>
        </div>
    </section>
    <!--Found One End --> --}}


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

    <!--Who We Are Start -->
    <section class="who-we-are">
        <div class="who-we-are__shape-3 float-bob-y">
            <img src="assets/images/shapes/who-we-are-shape-3.png" alt="">
        </div>
        <div class="who-we-are__shape-4 float-bob-x">
            <img src="assets/images/shapes/who-we-are-shape-4.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="300ms">
                    <div class="who-we-are__left">
                        <div class="section-title text-left sec-title-animation animation-style2">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">Who We Are</span>
                            </div>
                            <h2 class="section-title__title title-animation">Supporting Dreams Changing
                                Lives</h2>
                        </div>
                        <p class="who-we-are__text">EmpowerCare Foundation (EF), is a non-governmental organization with registration number <strong class="color-black">00NGO/R/5113</strong>, untethered by political or religious affiliations, registered by the Ministry of Community Development. EmpowerCare is committed to fostering health, empowerment, and resilience across communities.</p>
                        <div class="who-we-are__progress-box">
                            <ul class="who-we-are__progress-list list-unstyled">
                                <li>
                                    <div class="who-we-are__progress-single">
                                        <p>Total Fund Worth: <span>450,896,070$</span></p>
                                        <div class="who-we-are__progress">
                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="75%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="who-we-are__progress-single">
                                        <p>Total Cases Helped: <span>200+</span></p>
                                        <div class="who-we-are__progress">
                                            <div class="bar">
                                                <div class="bar-inner count-bar" data-percent="80%">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="who-we-are__btn-box">
                            <a href="{{route('home')}}#donate" class="who-we-are__btn thm-btn">Donate Now<span><i
                                        class="icon-arrow-right"></i></span></a>
                        </div> --}}
                    </div>
                </div>
                <div class="col-xl-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="who-we-are__right">
                        <div class="who-we-are__img-box">
                            <div class="who-we-are__img">
                                <img src="assets/images/resources/who-we-are-img-1.jpg" alt="">
                            </div>
                            <div class="who-we-are__img-2">
                                <img src="assets/images/resources/who-we-are-img-2.jpg" alt="">
                            </div>
                            <div class="who-we-are__shape-1 img-bounce"></div>
                            <div class="who-we-are__shape-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Who We Are End -->

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

    {{-- <!--Testimonial One Start -->
    <section class="testimonial-one pdb1">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline">Testimonial</span>
                </div>
                <h2 class="section-title__title title-animation">Hope What They <br> <span>Say</span> About Us</h2>
            </div>
            <div class="testimonial-one__carousel owl-theme owl-carousel">
                <!--Testimonial One Single Start -->
                <div class="item">
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                        </div>
                        <p class="testimonial-one__text">Listened carefully to Lisa's needs and translated them into
                            a stunning is a website. The design is modern and to calming, with beautiful imagery
                            that captures the essence of Blooming</p>
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-img">
                                <img src="assets/images/testimonial/testimonial-1-1.jpg" alt="">
                            </div>
                            <div class="testimonial-one__client-content">
                                <h3 class="testimonial-one__client-name"><a href="testimonials.html">Darlene
                                        Robertson</a></h3>
                                <p class="testimonial-one__client-sub-title">Web Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Testimonial One Single End -->
                <!--Testimonial One Single Start -->
                <div class="item">
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                        </div>
                        <p class="testimonial-one__text">Listened carefully to Lisa's needs and translated them into
                            a stunning is a website. The design is modern and to calming, with beautiful imagery
                            that captures the essence of Blooming</p>
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-img">
                                <img src="assets/images/testimonial/testimonial-1-2.jpg" alt="">
                            </div>
                            <div class="testimonial-one__client-content">
                                <h3 class="testimonial-one__client-name"><a href="testimonials.html">Floyd Miles</a>
                                </h3>
                                <p class="testimonial-one__client-sub-title">Medical Assistant</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Testimonial One Single End -->
                <!--Testimonial One Single Start -->
                <div class="item">
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                        </div>
                        <p class="testimonial-one__text">Listened carefully to Lisa's needs and translated them into
                            a stunning is a website. The design is modern and to calming, with beautiful imagery
                            that captures the essence of Blooming</p>
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-img">
                                <img src="assets/images/testimonial/testimonial-1-3.jpg" alt="">
                            </div>
                            <div class="testimonial-one__client-content">
                                <h3 class="testimonial-one__client-name"><a href="testimonials.html">Leslie
                                        Alexander</a></h3>
                                <p class="testimonial-one__client-sub-title">Web Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Testimonial One Single End -->
                <!--Testimonial One Single Start -->
                <div class="item">
                    <div class="testimonial-one__single">
                        <div class="testimonial-one__rating">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                        </div>
                        <p class="testimonial-one__text">Listened carefully to Lisa's needs and translated them into
                            a stunning is a website. The design is modern and to calming, with beautiful imagery
                            that captures the essence of Blooming</p>
                        <div class="testimonial-one__client-info">
                            <div class="testimonial-one__client-img">
                                <img src="assets/images/testimonial/testimonial-1-4.jpg" alt="">
                            </div>
                            <div class="testimonial-one__client-content">
                                <h3 class="testimonial-one__client-name"><a href="testimonials.html">Cameron
                                        Williamson</a></h3>
                                <p class="testimonial-one__client-sub-title">Medical Assistant</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Testimonial One Single End -->
            </div>
        </div>
    </section>
    <!--Testimonial One End --> --}}


    <!--Country One Start -->
    <section class="country-one">
        <div class="container">
            <div class="country-one__top-title-box sec-title-animation animation-style1">
                <h1 class="country-one__top-title title-animation">Top Distributors <span>Around </span>World</h1>
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

    {{-- <!--Start Faq Style1-->
    <section class="faq-style1">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-style1__content">
                        <div class="section-title sec-title-animation animation-style1">
                            <div class="section-title__tagline-box">
                                <span class="section-title__tagline">FAQ’S</span>
                            </div>
                            <h2 class="section-title__title title-animation">Frequently Asked Questions</h2>
                        </div>
                        <div class="title">
                            <h3>Together, We Can Do More</h3>
                        </div>
                        <div class="text">
                            <p>
                                Your donation will directly support [specific programs, e.g., education, healthcare,
                                emergency relief, etc.]. We strive to ensure that [XX]% of all donations go directly
                                to program services. you can manage or cancel your recurring donation at any time by
                                logging into your account or contacting us at [support email or phone number].
                            </p>
                            <p class="color">
                                A Small Donation, A Big Impact
                            </p>
                        </div>
                        <div class="btn-box">
                            <a href="faq.html" class="thm-btn">
                                How Get Help
                                <span>
                                    <i class="icon-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="faq-style1__right">
                        <ul class="accordion-box clearfix">
                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <h3>How can I make a donation?</h3>
                                </div>
                                <div class="acc-content current">
                                    <p>
                                        You can donate by [link to donation page], calling our donation hotline at
                                        [phone number], or mailing a check to [address]. We accept major credit
                                        cards, PayPal, and bank transfers.
                                    </p>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <h3>Is my donation tax-deductible?</h3>
                                </div>
                                <div class="acc-content">
                                    <p>
                                        Yes, all donations made to [Charity Name] are tax-deductible. You will
                                        receive a donation receipt via email for tax purposes. [Add tax-exempt
                                        number if necessary.]
                                    </p>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <h3>How will my donation be used?</h3>
                                </div>
                                <div class="acc-content">
                                    <p>
                                        Your donation will directly support [specific programs, e.g., education,
                                        healthcare, emergency relief, etc.]. We strive to ensure that [XX]% of all
                                        donations go directly to program services.
                                    </p>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <h3>Can I set up a recurring donation?</h3>
                                </div>
                                <div class="acc-content">
                                    <p>
                                        Absolutely! You can set up recurring donations on our [donation page] to
                                        give monthly, quarterly, or annually. This option allows you to provide
                                        ongoing support to those in need.
                                    </p>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <h3>Can I donate in someone else’s name?</h3>
                                </div>
                                <div class="acc-content">
                                    <p>
                                        Yes, donating in honor or memory of someone is a meaningful way to
                                        contribute. Simply select the option to dedicate your donation during
                                        checkout, and we will notify the honoree
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--End Faq Style1--> --}}


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

    <footer class="site-footer">
        <div class="site-footer__top">
            <div class="container">
                <div class="site-footer__top-inner">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__about">
                                <div class="footer-widget__about-logo">
                                    <a href="{{ route('home') }}"><img src="assets/images/resources/logo-2.png"
                                            alt=""></a>
                                </div>
                                <p class="footer-widget__about-text">category that involves giving financial or to a
                                    materialt support various causes organizations It allows not </p>
                                <div class="site-footer__social">
                                    <a href="#"><i class="icon-facebook"></i></a>
                                    <a href="#"><i class="icon-twitter"></i></a>
                                    <a href="#"><i class="icon-instagram"></i></a>
                                    <a href="#"><i class="icon-pintarest"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__services">
                                <h4 class="footer-widget__title">Services</h4>
                                <ul class="footer-widget__services-list list-unstyled">
                                    <li><a href="#">Incident Responder</a></li>
                                    <li><a href="#">Secure Managed Fund</a></li>
                                    <li><a href="#">Clean Water All</a></li>
                                    <li><a href="#">Give Education</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__links">
                                <h4 class="footer-widget__title">Links</h4>
                                <ul class="footer-widget__services-list list-unstyled">
                                    <li><a href="#">Food to individuals</a></li>
                                    <li><a href="#">Temporary housing</a></li>
                                    <li><a href="#">Local shelters</a></li>
                                    <li><a href="#">Natural disasters</a></li>
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
                                        <p><a href="tel:255784421959">+(255) 784421959</a></p>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <span class="icon-envelope"></span>
                                        </div>
                                        <p><a href="mailto:mwirusima@gmail.com">mwirusima@gmail.com</a></p>
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
                                <p class="site-footer__copyright-text">Copywright 2024 by <a href="#">EmpowerCare</a>.
                                    All
                                    Rights Reserved.</p>
                            </div>
                            <div class="site-footer__bottom-menu-box">
                                <ul class="list-unstyled site-footer__bottom-menu">
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
    </footer>
@endsection
