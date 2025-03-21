@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="{{__('messages.album')}}" bgImage="assets/images/backgrounds/page-header-bg.png" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

     <!--Events Carousel Page Start-->
     <section class="events-carousel-page">
        <div class="container">
            <div class="events-carousel-style owl-carousel owl-theme carousel-dot-style">
                <!--Event One Single Start-->
                    @forelse ($album as $event)
                        <div class="item">
                            <div class="event-one__single">
                                <div class="event-one__img-box">
                                    <div class="event-one__img">
                                        <img src="@if ($event->cover_photo ==null) {{ asset('assets/images/null.png')}} @else {{ Storage::url($event->cover_photo) }} @endif" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                    <div class="event-one__date">
                                        <p><span class="icon-clock"></span>{{date('d M, Y', strtotime($event->date))}}</p>
                                    </div>
                                </div>
                                <div class="event-one__content">
                                    <h4 class="event-one__title"><a href="{{route('album.details', $event->id)}}">{{$event->title}}</a></h4>
                                    <p class="event-one__text">{{Str::limit($event->description, 150)}}</p>
                                    {{-- <p class="event-one__location"><span class="icon-pin"></span>{{$event->location}}</p> --}}
                                    <div class="event-one__btn-box">
                                        <a href="{{route('album.details', $event->id)}}" class="event-one__btn thm-btn">{{__('messages.viewall')}}<span><i
                                                    class="icon-arrow-right"></i></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                @empty
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
                   
                @endforelse
                <!--Event One Single End-->
            </div>
        </div>
    </section>
    <!--Events Carousel Page End-->

    <!--Projects Page Start-->
    <section class="projects-page">
        <div class="container">
            <div class="row">
                @foreach ($album as $image)
                    @foreach (json_decode($image->photos)??[] as $key => $photo)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="projects-page__single">
                                <div class="projects-page__img">
                                    <img src="{{ Storage::url($photo) }}" alt="">
                                    <div class="projects-page__icon">
                                        <a class="img-popup" href="{{ Storage::url($photo) }}"><span class="fas fa-plus"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
    <!--Projects Page End-->

    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection