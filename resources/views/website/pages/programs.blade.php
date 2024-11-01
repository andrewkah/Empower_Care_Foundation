@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Programs" bgImage="assets/images/backgrounds/page-header-bg.jpg" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Testimonial Page Start -->
    <section class="events-page">
        <div class="container">
            <div class="row">
                <!--Event One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="event-one__single">
                        <div class="event-one__img-box">
                            <div class="event-one__img">
                                <img src="{{ asset('assets/images/event/event-1-1.jpg') }}" alt="">
                            </div>
                            <div class="event-one__date">
                                <p><span class="icon-clock"></span>20th Dec, 2024</p>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <h4 class="event-one__title"><a href="cause-details.html">Donation Drive</a></h4>
                            <p class="event-one__text">Lorem Ipsum is simply dummy a of the printing and type
                                setting industry Loreaim Ipsum has</p>
                            <p class="event-one__location"><span class="icon-pin"></span>6391 Elgin St. Celina,
                                10299</p>
                            {{-- <div class="event-one__btn-box">
                                <a href="donation-details.html" class="event-one__btn thm-btn">Donate Now<span><i
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
                                <img src="{{ asset('assets/images/event/event-1-2.jpg') }}" alt="">
                            </div>
                            <div class="event-one__date">
                                <p><span class="icon-clock"></span>15th nov, 2023</p>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <h4 class="event-one__title"><a href="cause-details.html">win-win survival</a></h4>
                            <p class="event-one__text">Lorem Ipsum is simply dummy a of the printing and type
                                setting industry Loreaim Ipsum has</p>
                            <p class="event-one__location"><span class="icon-pin"></span>6391 Elgin St. Celina,
                                10299</p>
                            {{-- <div class="event-one__btn-box">
                                <a href="donation-details.html" class="event-one__btn thm-btn">Donate Now<span><i
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
                                <img src="{{ asset('assets/images/event/event-1-3.jpg') }}" alt="">
                            </div>
                            <div class="event-one__date">
                                <p><span class="icon-clock"></span>19th Feb, 2024</p>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <h4 class="event-one__title"><a href="cause-details.html">Children Education.</a></h4>
                            <p class="event-one__text">Lorem Ipsum is simply dummy a of the printing and type
                                setting industry Loreaim Ipsum has</p>
                            <p class="event-one__location"><span class="icon-pin"></span>6391 Elgin St. Celina,
                                10299</p>
                            {{-- <div class="event-one__btn-box">
                                <a href="donation-details.html" class="event-one__btn thm-btn">Donate Now<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!--Event One Single End-->
                <!--Event One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="400ms">
                    <div class="event-one__single">
                        <div class="event-one__img-box">
                            <div class="event-one__img">
                                <img src="{{ asset('assets/images/event/event-1-4.jpg') }}" alt="">
                            </div>
                            <div class="event-one__date">
                                <p><span class="icon-clock"></span>19th Feb, 2024</p>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <h4 class="event-one__title"><a href="cause-details.html">win-win survival</a></h4>
                            <p class="event-one__text">Lorem Ipsum is simply dummy a of the printing and type
                                setting industry Loreaim Ipsum has</p>
                            <p class="event-one__location"><span class="icon-pin"></span>6391 Elgin St. Celina,
                                10299</p>
                            {{-- <div class="event-one__btn-box">
                                <a href="donation-details.html" class="event-one__btn thm-btn">Donate Now<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!--Event One Single End-->
                <!--Event One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="500ms">
                    <div class="event-one__single">
                        <div class="event-one__img-box">
                            <div class="event-one__img">
                                <img src="{{ asset('assets/images/event/event-1-5.jpg') }}" alt="">
                            </div>
                            <div class="event-one__date">
                                <p><span class="icon-clock"></span>19th Feb, 2024</p>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <h4 class="event-one__title"><a href="cause-details.html">Children Education.</a></h4>
                            <p class="event-one__text">Lorem Ipsum is simply dummy a of the printing and type
                                setting industry Loreaim Ipsum has</p>
                            <p class="event-one__location"><span class="icon-pin"></span>6391 Elgin St. Celina,
                                10299</p>
                            {{-- <div class="event-one__btn-box">
                                <a href="donation-details.html" class="event-one__btn thm-btn">Donate Now<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!--Event One Single End-->
                <!--Event One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInRight" data-wow-delay="600ms">
                    <div class="event-one__single">
                        <div class="event-one__img-box">
                            <div class="event-one__img">
                                <img src="{{ asset('assets/images/event/event-1-6.jpg') }}" alt="">
                            </div>
                            <div class="event-one__date">
                                <p><span class="icon-clock"></span>19th Feb, 2024</p>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <h4 class="event-one__title"><a href="cause-details.html">Donation Drive</a></h4>
                            <p class="event-one__text">Lorem Ipsum is simply dummy a of the printing and type
                                setting industry Loreaim Ipsum has</p>
                            <p class="event-one__location"><span class="icon-pin"></span>6391 Elgin St. Celina,
                                10299</p>
                            {{-- <div class="event-one__btn-box">
                                <a href="donation-details.html" class="event-one__btn thm-btn">Donate Now<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <!--Event One Single End-->
            </div>
        </div>
    </section>
    <!--Testimonial Page End -->

    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection