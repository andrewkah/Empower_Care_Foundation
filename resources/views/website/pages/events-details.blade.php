@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="{{$details->title}}" bgImage="assets/images/backgrounds/page-header-bg.png" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    
        <!--Event Details Start-->
        <section class="event-details">
            <div class="container">
                <div class="event-details__inner">
                    <div class="event-details__img">
                        <img src="{{ Storage::url($details->photo) }}" alt="">
                    </div>
                    <p class="event-details__text-1">{{$details->title}}</p>
                   {!! $details->summary !!}

                    <div class="event-details__text-box">
                        {!! $details->description!!}
                    </div>
                    <ul class="event-details__points list-unstyled">
                        @forelse(explode(',',$details->tags) as $tag)
                        <li>
                            <div class="event-details__points-shape"></div>
                            <p class="event-details__points-text">{{$tag}}</p>
                        </li>
                        @empty
                        @endforelse
                    </ul>
                    <h3>Organizer: <span>{{ $details->organizer }}</span></h3>
                    <p class="event-details__text-1"><a href="tel:{{ $details->phone }}">+{{ $details->phone }}</a><br>
                        <a href="mailto:{{ $details->email }}">{{ $details->email }}</a>
                    </p>
                    {{-- <p class="event-details__text-3"></p>
                    <p class="event-details__text-4">Web designing in a powerful way of just not an only professions,
                        however, in a passion for our Company. We have to a tendency to believe the idea that smart</p>
                    <ul class="event-details__points list-unstyled">
                        <li>
                            <div class="event-details__points-shape"></div>
                            <p class="event-details__points-text">Grayling Mexican golden trout; Chinook salmon bramble
                                shark</p>
                        </li>
                        <li>
                            <div class="event-details__points-shape"></div>
                            <p class="event-details__points-text">Scat zebra pleco graveldiver river shark tripod fish;
                                flagtail bala</p>
                        </li>
                        <li>
                            <div class="event-details__points-shape"></div>
                            <p class="event-details__points-text">Hatchetfish pricklefish sixgill ray sawfish scaly
                                dragonfish! Grayling Mexican</p>
                        </li>
                        <li>
                            <div class="event-details__points-shape"></div>
                            <p class="event-details__points-text">Grayling Mexican golden trout; Chinook salmon bramble
                                shark sand stargazer Steve fish</p>
                        </li>
                        <li>
                            <div class="event-details__points-shape"></div>
                            <p class="event-details__points-text">Scat zebra pleco graveldiver river shark tripod fish;
                                flagtail bala shark</p>
                        </li>
                        <li>
                            <div class="event-details__points-shape"></div>
                            <p class="event-details__points-text">Burma danio black bass straptail southern Dolly Varden
                                orbicular velvetfish</p>
                        </li>
                    </ul>
                    <p class="event-details__text-5">Web designing in a powerful way of just not an only professions,
                        however, in a passion for our Company. We have to a tendency to believe the idea that smart
                        looking of any website is the first impression on visitors.Web designing in a powerful way of
                        just not an only professions, however, in a passion for our Company. We have Burma danio black
                        bass straptail southern Dolly Varden orbicular velvetfish trumpetfish; bluntnose minnow.
                        Hatchetfish pricklefish sixgill ray sawfish scaly dragonfish! Grayling Mexican golden trout;
                        Chinook salmon bramble shark sand stargazer Steve fish</p> --}}
                </div>
                <div class="event-details__events-box">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="event-details__event-single">
                                <h3>{{__('messages.details')}}</h3>
                                <ul class="event-details__event-list list-unstyled">
                                    <li>
                                        <p><span>{{__('messages.date')}}:</span>{{ $details->event_date }}</p>
                                    </li>
                                    <li>
                                        {{-- <p><span>Finish:</span>October 03’ 24</p> --}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="event-details__event-single">
                                <h3>{{__('messages.sponsor')}}</h3>
                                <ul class="event-details__event-list list-unstyled">
                                    <li>
                                        <p><span>{{__('messages.speaker')}}:</span><a href="#">{{ $details->event_speaker }}</a></p>
                                    </li>
                                    <li>
                                        <p><span>{{__('messages.sponsor')}}:</span><a href="#">{{ $details->sponsor }}</a></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="event-details__event-single">
                                <h3>{{__('messages.venue')}}</h3>
                                <ul class="event-details__event-list list-unstyled">
                                    <li>
                                        <p><span>{{__('messages.location')}}:</span>{{ $details->location }}</p>
                                    </li>
                                    <li>
                                        <p><span>{{__('messages.department')}}:</span>{{ $details->department?->name }}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Event Details End-->


    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection