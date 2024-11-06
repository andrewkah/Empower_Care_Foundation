@extends('website.layout.main')
@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Events" bgImage="assets/images/backgrounds/page-header-bg.jpg" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Events Carousel Page Start-->
    <section class="events-carousel-page">
        <div class="container">
            <div class="events-carousel-style owl-carousel owl-theme carousel-dot-style">
                <!--Event One Single Start-->
                @if (count($events) > 0)
                    @foreach ($events as $event)
                        <div class="item">
                            <div class="event-one__single">
                                <div class="event-one__img-box">
                                    <div class="event-one__img">
                                        <img src="{{asset('assets/images/event/'.$event->image) }}" alt="">
                                    </div>
                                    <div class="event-one__date">
                                        <p><span class="icon-clock"></span>{{date('d M, Y', strtotime($event->date))}}</p>
                                    </div>
                                </div>
                                <div class="event-one__content">
                                    <h4 class="event-one__title"><a href="{{route('events.details', $event->slug)}}">{{$event->title}}</a></h4>
                                    <p class="event-one__text">{{Str::limit($event->description, 150)}}</p>
                                    <p class="event-one__location"><span class="icon-pin"></span>{{$event->location}}</p>
                                    <div class="event-one__btn-box">
                                        <a href="{{route('events.details', $event->slug)}}" class="event-one__btn thm-btn">Read More<span><i
                                                    class="icon-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <!--Event One Single Start-->
                    <div class="item">
                        <div class="event-one__single">
                            <div class="event-one__img-box">
                                <div class="event-one__img">
                                    <img src="{{asset('assets/images/event/event-1-1.jpg') }}" alt="">
                                </div>
                                <div class="event-one__date">
                                    <p><span class="icon-clock"></span>20th Dec, 2024</p>
                                </div>
                            </div>
                            <div class="event-one__content">
                                <h4 class="event-one__title"><a href="#">Donation Drive</a></h4>
                                <p class="event-one__text">Lorem Ipsum is simply dummy a of the printing and type
                                    setting industry Loreaim Ipsum has</p>
                                <p class="event-one__location"><span class="icon-pin"></span>6391 Elgin St. Celina,
                                    10299</p>
                                <div class="event-one__btn-box">
                                    <a href="{{route('home')}}#donate" class="event-one__btn thm-btn">Donate Now<span><i
                                                class="icon-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Event One Single End-->
                    <!--Event One Single Start-->
                    <div class="item">
                        <div class="event-one__single">
                            <div class="event-one__img-box">
                                <div class="event-one__img">
                                    <img src="{{asset('assets/images/event/event-1-2.jpg') }}" alt="">
                                </div>
                                <div class="event-one__date">
                                    <p><span class="icon-clock"></span>15th nov, 2023</p>
                                </div>
                            </div>
                            <div class="event-one__content">
                                <h4 class="event-one__title"><a href="#">win-win survival</a></h4>
                                <p class="event-one__text">Lorem Ipsum is simply dummy a of the printing and type
                                    setting industry Loreaim Ipsum has</p>
                                <p class="event-one__location"><span class="icon-pin"></span>6391 Elgin St. Celina,
                                    10299</p>
                                <div class="event-one__btn-box">
                                    <a href="{{route('home')}}#donate" class="event-one__btn thm-btn">Donate Now<span><i
                                                class="icon-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Event One Single End-->
                    <!--Event One Single Start-->
                    <div class="item">
                        <div class="event-one__single">
                            <div class="event-one__img-box">
                                <div class="event-one__img">
                                    <img src="{{asset('assets/images/event/event-1-3.jpg') }}" alt="">
                                </div>
                                <div class="event-one__date">
                                    <p><span class="icon-clock"></span>19th Feb, 2024</p>
                                </div>
                            </div>
                            <div class="event-one__content">
                                <h4 class="event-one__title"><a href="#">Children Education.</a></h4>
                                <p class="event-one__text">Lorem Ipsum is simply dummy a of the printing and type
                                    setting industry Loreaim Ipsum has</p>
                                <p class="event-one__location"><span class="icon-pin"></span>6391 Elgin St. Celina,
                                    10299</p>
                                <div class="event-one__btn-box">
                                    <a href="{{route('home')}}#donate" class="event-one__btn thm-btn">Donate Now<span><i
                                                class="icon-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Event One Single End-->
                @endif
                <!--Event One Single End-->
            </div>
        </div>
    </section>
    <!--Events Carousel Page End-->

    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection