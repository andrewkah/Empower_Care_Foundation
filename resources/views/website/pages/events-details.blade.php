@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Event Details" bgImage="assets/images/backgrounds/page-header-bg.jpg" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Event Details Start-->
    <section class="event-details">
        <div class="container">
            <div class="event-details__inner">
                <div class="event-details__img">
                    <img src="{{ asset('storage/' . $details->photo) }}" alt="">
                    <img src="{{ asset('assets/images/event/event-details-img-1.jpg') }}" alt="">
                </div>
                <h2 class="event-details__title">{{ $details->title }}</h2>
                <p class="event-details__text-1">{{ $details->summary }}</p>
                <p class="event-details__text-2">{{ $details->description }}</p>
                <p class="event-details__text-1">Southern grayling trout-perch. Sharksucker sea toad candiru rocket
                    danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata.</p>
                <p class="event-details__text-2">Minnow snoek icefish velvet-belly shark, California halibut round
                    stingray northern sea robin. Southern grayling trout-perch. Sharksucker sea toad candiru rocket
                    danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata.
                    Midshipman dartfish Modoc sucker, yellowtail kingfish basslet. Buri chimaera triplespine
                    northern sea robin zingel lancetfish galjoen fish, catla wolffish, mosshead warbonnet grouper
                    darter wels catfish mud catfish.</p>
                <div class="event-details__text-box">
                    <p>Event Speaker: {{ $details->event_speaker }}</p>
                    <p>Tags: {{ $details->tags }}</p>
                    <p>Aliquam eros justo, posuere loborti viverra laoreet matti ullamcorper posuere vive rra
                        .Aliquam eros justo, posuere lobortis, viverra laoreet augue mattis fermentu m ul amcorper
                        viverra laoreet.flounder European minnow black dragonfish orbicular batfish stingray
                        tenpounder. Sucker lionfish garibaldi surgeonfish</p>
                </div>
                
            </div>
            <div class="event-details__events-box">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="event-details__event-single">
                            <h3>Details</h3>
                            <ul class="event-details__event-list list-unstyled">
                                <li>
                                    <p><span>Start Date:</span>{{ $details->event_date }}</p>
                                </li>
                                <li>
                                    <p><span>Start Time:</span>{{ $details->event_time }}</p>
                                </li>
                                <li>
                                    <p><span>Start Time:</span>{{ $details->website }}</p>
                                </li>
                                <li>
                                    <p><span>Sponsor:</span>{{ $details->sponsor }}</p>
                                </li>
                                <li><p>Event Speaker: {{ $details->event_speaker }}</p></li>
                                <li><p>Tags: {{ $details->tags }}</p></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="event-details__event-single">
                            <h3>Organizer</h3>
                            <ul class="event-details__event-list list-unstyled">
                                <p>{{ $details->organizer }}</p>
                                <li>
                                    <p><span>Phone:</span><a href="tel:{{ $details->phone }}">+{{ $details->phone }}</a></p>
                                </li>
                                <li>
                                    <p><span>E-mail:</span><a href="mailto:{{ $details->email }}">{{ $details->email }}</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="event-details__event-single">
                            <h3>Venue</h3>
                            <ul class="event-details__event-list list-unstyled">
                                <li>
                                    <p><span>Location:</span>{{ $details->location }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Event Details End-->

    <!--Two Section Start-->
    <section class="additional-event">
        <div class="additional-event__wrapper">
            <div class="additional-event__left">
                <div class="additional-event__bg"
                    style="background-image: url('{{ asset('assets/images/backgrounds/additional-event-left-bg.jpg')}}');"></div>
                <div class="additional-event__content-box">
                    <p class="additional-event__sub-title">The Culture of</p>
                    <h2 class="additional-event__title">USA Volunteer</h2>
                </div>
            </div>
            <div class="additional-event__right">
                <div class="additional-event__bg"
                    style="background-image: url('{{ asset('assets/images/backgrounds/additional-event-right-bg.jpg')}}');"></div>
                <div class="additional-event__content-box">
                    <p class="additional-event__sub-title">Trinity</p>
                    <h2 class="additional-event__title">trash Bash</h2>
                </div>
            </div>
        </div>
    </section>
    <!--Two Section Start-->

    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection