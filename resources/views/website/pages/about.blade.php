@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="{{__('messages.aboutus')}}" bgImage="assets/images/backgrounds/page-header-bg.png"
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
                                        <h3 class="count-text" data-stop="10" data-speed="1500">00</h3>
                                        <span>+</span>
                                    </div>
                                    <p class="about-One__provide-count-text"> {{__('messages.servicewe')}} </p>
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
                                <span class="section-title__tagline">{{__('messages.aboutus')}}</span>
                            </div>
                            <h2 class="section-title__title title-animation"> {{__('messages.unitefor')}}
                                <br> {{__('messages.changeworld')}}
                            </h2>
                        </div>
                        <div class="about-One__vission-mission">
                            <div class="about-One__tab-box tabs-box">
                                <ul class="tab-buttons clearfix list-unstyled">
                                    <li data-tab="#vission" class="tab-btn active-btn"><span> {{__('messages.ourvision')}} </span></li>
                                    <li data-tab="#mission" class="tab-btn"><span> {{__('messages.ourmission')}} </span></li>
                                    <li data-tab="#goal" class="tab-btn"><span> {{__('messages.ourvalues')}} </span></li>
                                </ul>
                                <div class="tabs-content">
                                    <!--tab-->
                                    <div class="tab active-tab" id="vission">
                                        <div class="tabs-content__inner">
                                            <p> {{__('messages.ourvission')}} </p>
                                        </div>
                                    </div>
                                    <!--tab-->
                                    <!--tab-->
                                    <div class="tab" id="mission">
                                        <div class="tabs-content__inner">
                                            <p> {{__('messages.mission1')}}</p>
                                            <p> {{__('messages.mission2')}} </p>
                                                <p>{{__('messages.mission3')}}</p>
                                                <div class="cause-details__points-box">
                                                    <ul class="cause-details__points-list list-unstyled">
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <p>{{__('messages.point1')}}</p>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <p> {{__('messages.point2')}} </p>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <p> {{__('messages.point3')}} </p>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <p> {{__('messages.point4')}} </p>
                                                        </li>
                                                        <li>
                                                            <div class="icon">
                                                                <span class="fas fa-check"></span>
                                                            </div>
                                                            <p> {{__('messages.point5')}} </p>
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
                                            <h6>{{__('messages.Quality')}}</h6>
                                            <p> {{__('messages.qualityvalue')}}</p>
                                            <h6>{{__('messages.Integrity')}}</h6>
                                            <p>{{__('messages.integrityvalue')}} </p>
                                            <h6>{{__('messages.Inclusivity')}}</h6>
                                            <p>{{__('messages.inclusivityvalue')}}</p>
                                            <h6>{{__('messages.Collaboration')}}</h6>
                                            <p>{{__('messages.collaborationvalue')}}</p>
                                            <h6>{{__('messages.Resilience')}}</h6>
                                            <p>{{__('messages.resiliencevalue')}}</p>
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
                        <h3 class="donate-one__title"><a href="#"> {{__('messages.donate')}} </a>
                        </h3>
                        <p class="donate-one__text"> {{__('messages.donations')}}
                            <br> {{__('messages.donations2')}}
                            <br> {{__('messages.donation3')}}
                        </p>
                        <div class="donate-one__btn-box">
                            <a href="{{route('donate')}}" class="donate-one__btn thm-btn">{{__('messages.donatenow')}}<span><i
                                        class="icon-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                    <div class="donate-one__single donate-one__single-2">
                        <div class="donate-one__single-bg"
                            style="background-image: url('{{ asset('assets/images/backgrounds/donate-one-single-bg-two.jpg') }}');">
                        </div>
                        <h3 class="donate-one__title"><a href="{{route('volunteer')}}"> {{__('messages.becomevolunteer')}}</a></h3>
                        <p class="donate-one__text">{{__('messages.join2')}} 
                            <br>  
                            {{__('messages.join3')}} 
                        </p>
                        <div class="donate-one__btn-box">
                            <a href="{{route('volunteer')}}" class="donate-one__btn thm-btn">{{__('messages.joinnow')}}<span><i
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
                                <span class="section-title__tagline">{{__('messages.who')}}</span>
                            </div>
                            <h2 class="section-title__title title-animation"> {{__('messages.dreams')}}</h2>
                        </div><span class="color-black"></span>
                        <p class="who-we-are__text"> {{__('messages.intro')}} <strong class="color-black">00NGO/R/5113</strong>, {{__('messages.intro2')}}</p>
                        
                        <p>{{__('messages.wearep')}}</p>
                        <div class="who-we-are__btn-box">
                            <a href="{{route('donate')}}" class="who-we-are__btn thm-btn"> {{__('messages.donatenow')}}<span><i
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
