@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="{{__('messages.programs')}}" bgImage="assets/images/backgrounds/page-header-bg.png" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Testimonial Page Start -->
    <section class="events-page">
        <div class="container">
            <div class="row">
                @forelse($programs as $program)
                <!--Event One Single Start-->
                <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="event-one__single">
                        <div class="event-one__img-box">
                            <div class="event-one__img">
                                <img src="{{ Storage::url($program->photo) }}" alt="">
                            </div>
                            <div class="event-one__date">
                                <p><span class="icon-clock"></span>{{$program->day}} {{$program->time}}</p>
                            </div>
                        </div>
                        <div class="event-one__content">
                            <h4 class="event-one__title"><a href="#">{{$program->title}}</a></h4>
                            <p class="event-one__text">{!! $program->objectives !!}</p>
                            <p class="event-one__location"><span class="icon-pin"></span>{{$program->location}}</p>
                            <div class="event-one__btn-box">
                                <a href="{{route('programs.details', $program->slug)}}" class="event-one__btn thm-btn"> {{__('messages.readmore')}} <span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Event One Single End-->
                @empty
                @endforelse
               
            </div>
        </div>
    </section>
    <!--Testimonial Page End -->

    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection