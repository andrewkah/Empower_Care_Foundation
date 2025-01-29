@extends('website.layout.main')
@section('content')
    <!-- Main Sllider Start -->
    @if (count($banners))

        <section class="main-slider">
            <div class="swiper-container banner-slider">
                <div class="swiper-wrapper">
                    @foreach ($banners as $slider)
                        <div class="swiper-slide">
                            <div class="image-layer" style="background-image: url({{ Storage::url($slider->photo) }});">
                            </div>
                            {{-- <div class="image-layer__left-gradient"
                                style="background-image: url(assets/images/shapes/slider-bg1.jpg);"></div> --}}
                            {{-- <div class="image-layer__left-gradient"
                                style="background-image: url({{ Storage::url($slider->photo) }});"></div> --}}
                            <div class="container">
                                <div class="main-slider-content">
                                    <div class="main-slider-content__inner">
                                        <div class="sub-title">
                                            <h4>{{ $slider->title }}</h4>
                                        </div>
                                        <div class="big-title">
                                            <h2>
                                                {!! $slider->description !!}
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
                    @endforeach
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
    @else
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
        @endif
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
                                    <span class="section-title__tagline"> {{__('messages.welcome')}} </span>
                                </div>
                                <h2 class="section-title__title title-animation"> {{__('messages.everydollar')}} <br>
                                    {{__('messages.makesadifference')}}.
                                </h2>
                            </div>
                            <div class="text">
                                <p>
                                    {{__('messages.joinus')}}
                                </p>
                            </div>

                            <ul class="list-item row clearfix">
                                {{-- <li class="col-xl-6 col-lg-12 col-md-6">
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
                                </li> --}}
                            </ul>

                            <div class="btn-box">
                                <a href="{{route('volunteer')}}" class="thm-btn"> {{__('messages.becomevolunteer')}}
                                    
                                    <span>
                                        <i class="icon-arrow-right"></i>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="col-xl-5 col-lg-6">
                        {{-- <div class="donation-form-one">
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
                        </div> --}}
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
                            <span class="section-title-two__tagline"> {{__('messages.joinusnow')}} </span>
                        </div>
                        <h2 class="section-title-two__title title-animation"> {{__('messages.helpingtomake')}} <br> {{__('messages.world')}}
                            <span>{{__('messages.better')}}</span> {{__('messages.living')}}
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
                        <h3 class="donate-one__title"><a href="#">{{__('messages.helpthem')}}</a>
                        </h3>
                        <p class="donate-one__text"> {{__('messages.believefirst')}} 
                            <br> {{__('messages.needto')}}
                            <br> {{__('messages.withouthope')}}
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
                        <h3 class="donate-one__title"><a href="{{route('home')}}"> {{__('messages.serveasvol')}} </a></h3>
                                <p class="donate-one__text"> {{__('messages.makingtheworld')}} <br>  {{__('messages.showthatyou')}}
                                </p>
                        <div class="donate-one__btn-box">
                            <a href="{{route('volunteer')}}" class="donate-one__btn thm-btn"> {{__('messages.joinnow')}} <span><i
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
                    <span class="section-title__tagline"> {{__('messages.ourevents')}} </span>
                </div>
                <h2 class="section-title__title title-animation"> {{__('messages.infight')}} <br> {{__('messages.poverty')}}</h2>
            </div>
            <div class="row">
                <!--Event One Single Start-->
                @foreach ($events as $event)
                    <div class="col-xl-4 col-lg-4 wow fadeIn{{$loop->index % 2 == 0 ? 'Left' : 'Right'}}" data-wow-delay="{{($loop->index * 100) + 100}}ms">
                        <div class="event-one__single">
                            <div class="event-one__img-box">
                                <div class="event-one__img">
                                    <img src="@if ($event->photo ==null) {{ asset('assets/images/null.png')}} @else {{ Storage::url($event->photo) }}@endif" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <div class="event-one__date">
                                    <p><span class="icon-clock"></span>{{$event->event_date}} : {{$event->event_time}}</p>
                                </div>
                            </div>
                            <div class="event-one__content">
                                <h4 class="event-one__title"><a href="{{route('events.details', $event->slug)}}">{{$event->title}}</a></h4>
                                <p class="event-one__text">{!!Str::limit($event->summary, 150)!!}</p>
                                <p class="event-one__location"><span class="icon-pin"></span>{{$event->location}}</p>
                                <div class="event-one__btn-box">
                                    <a href="{{route('events.details', $event->slug)}}" class="event-one__btn thm-btn">{{__('messages.readmore')}}<span><i
                                                class="icon-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!--Event One Single End-->
            </div>
        </div>
    </section>
    <!--Event One End -->

    <!--Country One Start -->
    <section class="country-one">
        <div class="container">
            <div class="country-one__top-title-box sec-title-animation animation-style1">
                <h1 class="country-one__top-title title-animation"> {{__('messages.our')}}  <span> {{__('messages.partners')}} </span></h1>
            </div>
            <div class="row">
                <!--Country One Single Start-->
                @forelse ($partners as $partner)
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="country-one__single">
                        <div class="country-one__img" style="width: 80px; height: 80px; overflow: hidden;">
                            <img src="@if ($partner->photo ==null) {{ asset('assets/images/null.png')}} @else {{ Storage::url($partner->photo) }}@endif" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <h4 class="country-one__title"><a href="#">{{$partner->name}}</a></h4>
                    </div>
                </div>
                <!--Country One Single End-->
                @empty
                <div class="col-xl-3"></div>
                @endforelse
            </div>
        </div>
    </section>
    <!--Country One End -->

    <!--Stat Project Style1-->
    {{-- <section class="project-style1">
        <div class="container">
            <div class="project-style1__inner">
                <div class="project-style1__carousel owl-theme owl-carousel">
                    @foreach ($album as $image)
                        <!--Start Single Project Style1-->
                        <div class="item">
                            <div class="single-project-style1">
                                <div class="img-box">
                                    <div class="gallery">
                                        @foreach (json_decode($image->photos) as $key => $photo)
                                            <a class="lightbox-image" data-fancybox="gallery"
                                                href="{{ Storage::url($photo) }}">
                                                <img src="{{ Storage::url($photo) }}" alt="Image">
                                                <div class="overlay-icon">
                                                    <i class="fa fa fa-expand"></i>
                                                </div>
                                                {{-- @if (isset(json_decode($image->captions)[$key]))
                                                    <div class="caption">
                                                        {{ json_decode($image->captions)[$key] }}
                                                    </div>
                                                @endif 
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Project Style1-->
                    @endforeach
                </div>
            </div>
        </div>
    </section> --}}
    <!--End Project Style1-->


    <!--Blog One Start -->
    <section class="blog-one">
        <div class="container">
            <div class="section-title text-center sec-title-animation animation-style1">
                <div class="section-title__tagline-box">
                    <span class="section-title__tagline"> {{__('messages.articlesandblogs')}} </span>
                </div>
                <h2 class="section-title__title title-animation">{{__('messages.lending')}}<br> {{__('messages.spreading')}}</h2>
            </div>
            <div class="row">
                @forelse ($articles as $key => $article)
                    <!--Blog One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="{{100 + ($key * 100)}}ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="@if ($article->photo ==null) {{ asset('assets/images/null.png')}} @else {{ Storage::url($article->photo) }}@endif" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <div class="blog-one__date">
                                    <p>{{date('d', strtotime($article->created_at))}}
                                        <span><br>{{date('M', strtotime($article->created_at))}}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <h4 class="blog-one__title"><a href="#">{{$article->title}}</a></h4>
                                <p class="blog-one__text">{!! Str::limit($article->summary, 150)!!}</p>
                                <div class="blog-one__btn-box">
                                    <a href="{{route('articles.details', $article->slug)}}" class="blog-one__btn thm-btn">{{__('messages.readmore')}}<span><i
                                                class="icon-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Blog One Single End-->
                @empty
                    @for ($i = 0; $i < 3; $i++)
                        <!--Blog One Single Start-->
                        <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="{{100 + ($i * 100)}}ms">
                            <div class="blog-one__single">
                                <div class="blog-one__img-box">
                                    <div class="blog-one__img">
                                        <img src="assets/images/blog/blog-1-{{rand(1, 3)}}.jpg" alt="">
                                    </div>
                                    <div class="blog-one__date">
                                        <p>{{rand(1, 28)}}
                                            <span><br>{{date('M')}}</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="blog-one__content">
                                    <h4 class="blog-one__title"><a href="#">Caring for the Elderly and Vulnerable
                                            Strategy</a></h4>
                                    <p class="blog-one__text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip ex ea commodo consequat.</p>
                                    <div class="blog-one__btn-box">
                                        <a href="#" class="blog-one__btn thm-btn">rEAD mORe<span><i
                                                    class="icon-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Blog One Single End-->
                    @endfor
                @endforelse
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
                    <h2 class="cta-one__title title-animation"> {{__('messages.lastingchange')}} <br> {{__('messages.communities')}}
                    </h2>
                </div>
                <div class="cta-one__btn-box">
                    {{-- <a href="{{route('home')}}#donate" class="cta-one__btn-1 thm-btn">Donate Now<span><i
                                class="icon-arrow-right"></i></span></a> --}}
                    <a href="{{route('volunteer')}}" class="cta-one__btn-2 thm-btn">{{__('messages.becomevolunteer')}}<span><i
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
