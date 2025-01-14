@extends('website.layout.main')
@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Policies" bgImage="assets/images/backgrounds/page-header-bg.png"
        homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Testimonial Page Start -->
    <section class="events-page">
        <div class="container">
            <div class="row">
                @forelse($policies as $policy)
                    <!--Event One Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                        <div class="event-one__single">

                            <div class="event-one__content">
                                <h4 class="event-one__title"><a href="#">{{ $policy->title }}</a></h4>
                                <p class="event-one__file"><a
                                        href="{{ asset('storage/policies/' . basename($policy->file)) }}">{{ basename($policy->file) }}</a></p>
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
