@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Our Causes" bgImage="assets/images/backgrounds/page-header-bg.png" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Cause Details Start-->
    <section class="events-list">
        <div class="container">
            <div class="events-list__inner">
                @forelse($causes as $cause)
                <!--Event List Single Start-->
                <div class="events-list__single-and-date">
                    <div class="events-list__single">
                        <div class="events-list__img">
                            <img src="{{ Storage::url($cause->photo) }}" alt="">
                        </div>
                        <div class="events-list__content">
                            <h3 class="events-list__title"><a href="#">{{$cause->title}}</a></h3>
                            <p class="events-list__text">{!! $cause->description !!}</p>
                            <ul class="events-list__date list-unstyled">
                                <li>
                                    <div class="icon">
                                        <span class="far fa-clock"></span>
                                    </div>
                                    <p><span>{{ $cause->date }}</span></p>
                                </li>
                                {{-- <li>
                                    <div class="icon">
                                        <span class="fas fa-map-marker-alt"></span>
                                    </div>
                                    <p>6391 Elgin St. Celina, 10299</p>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="events-list__date-box">
                        <p>{{$cause->day}}<br> <span>{{$cause->time}}</span></p>
                    </div>
                </div>
                <!--Event List Single End-->
                @empty
                @endforelse
            </div>
        </div>
    </section>
    <!--Cause Details End-->


    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection