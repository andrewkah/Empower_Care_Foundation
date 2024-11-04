@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="About Us" bgImage="assets/images/backgrounds/page-header-bg.jpg"
        homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--About One Start -->
    <section class="about-One">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-One__left  wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                        <div class="about-One__img-box">
                            <div class="about-One__img">
                                <img src="{{ asset('assets/images/resources/about-one-img-1.jpg') }}" alt="">
                            </div>
                            <div class="about-One__img-2">
                                <img src="{{ asset('assets/images/resources/about-one-img-2.jpg') }}" alt="">
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
                                            <p>Our Mission is to foster the holistic development of Tanzanian individuals
                                                and communities by promoting health, empowerment, and resilience.</p>
                                            <p>Our key focus areas include; healthcare enhancement, with an emphasis on
                                                maternal, newborn, adolescent and young people, and child health, HIV,
                                                Hepatitis, Gender Equality, Gender Based Violence, climate change
                                                resilience, substance abuse prevention, advocacy for policy change, and
                                                building strong partnerships with local governments, private sector,
                                                educational institutions, and international organizations.</p>
                                                <p>At the core of EmpowerCare&#39;s work are community-driven solutions and evidence-based
                                                    approaches to improve service delivery, tackle emerging health and environmental
                                                    challenges, and drive sustainable development across Tanzania.</p>
                                                <div class="cause-details__points-box">
                                                    <ul class="cause-details__points-list list-unstyled">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <p>Empowering and capacitating vulnerable communities on matters of health and
                                                                development.</p>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <p>Advocating for the enhancement of service delivery and the integration of
                                                                interventions.</p>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <p>Promoting climate resilience and sustainable development practices.</p>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <p>Fostering enduring partnerships with local government entities for effective
                                                                intervention implementation.</p>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <p>Utilizing research, monitoring, and evaluation to drive advocacy efforts towards
                                                                policy changes and resource allocation.</p>
                                                        </li>
                                                    </ul>
                                                    {{-- <ul class="cause-details__points-list list-unstyled">
                                                       
                                                        
                                                    </li>
                                                   
                                                    </ul> --}}
                                                </div>
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
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End -->

    <!--Donate One Start -->
    <section class="donate-one">
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
                        <div class="donate-one__btn-box">
                            <a href="{{route('home')}}#donate" class="donate-one__btn thm-btn">Donate Now<span><i
                                        class="icon-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="donate-one__single donate-one__single-2">
                        <div class="donate-one__single-bg"
                            style="background-image: url('{{ asset('assets/images/backgrounds/donate-one-single-bg-two.jpg') }}');">
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
            <img src="{{ asset('assets/images/shapes/who-we-are-shape-3.png') }}" alt="">
        </div>
        <div class="who-we-are__shape-4 float-bob-x">
            <img src="{{ asset('assets/images/shapes/who-we-are-shape-4.png') }}" alt="">
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
                        </div><span class="color-black"></span>
                        <p class="who-we-are__text">EmpowerCare Foundation (EF), is a non-governmental organization with registration number <strong class="color-black">00NGO/R/5113</strong>, untethered by political or religious affiliations, registered by the Ministry of Community Development. EmpowerCare is committed to fostering health, empowerment, and resilience across communities.</p>
                        
                        <div class="who-we-are__btn-box">
                            <a href="{{route('home')}}#donate" class="who-we-are__btn thm-btn">Donate Now<span><i
                                        class="icon-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="who-we-are__right">
                        <div class="who-we-are__img-box">
                            <div class="who-we-are__img">
                                <img src="{{ asset('assets/images/resources/who-we-are-img-1.jpg') }}" alt="">
                            </div>
                            <div class="who-we-are__img-2">
                                <img src="{{ asset('assets/images/resources/who-we-are-img-2.jpg') }}" alt="">
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
    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection
