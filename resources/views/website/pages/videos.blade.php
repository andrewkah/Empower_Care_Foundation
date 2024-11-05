@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Videos" bgImage="assets/images/backgrounds/page-header-bg.jpg" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Projects Page Start-->
    <section class="projects-page">
        <div class="container">
            <div class="row">
                <!--Projects Page Single Start-->
                @if (count($videos) > 0)
                    @foreach ($videos as $video)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="projects-page__single">
                                <div class="projects-page__img">
                                    <h5>{{ $video->title }}</h5>
                                    <iframe width="100%" height="auto" src="https://www.youtube.com/embed/{{ $video->video_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    <p>{{ \Carbon\Carbon::parse($video->created_at)->format('M d, Y') }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-xl-7 col-lg-6 col-md-6">
                        <div class="projects-page__single">
                            <div class="projects-page__img">
                                <img src="{{ asset('assets/images/project/projects-page-1-1.jpg') }}" alt="">
                                <div class="projects-page__icon">
                                    <a class="img-popup" href="{{ asset('assets/images/project/projects-page-1-1.jpg') }}"><span
                                            class="fas fa-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Projects Page Single Start-->
                    <!--Projects Page Single Start-->
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="projects-page__single">
                            <div class="projects-page__img">
                                <img src="{{ asset('assets/images/project/projects-page-1-2.jpg') }}" alt="">
                                <div class="projects-page__icon">
                                    <a class="img-popup" href="{{ asset('assets/images/project/projects-page-1-2.jpg') }}"><span
                                            class="fas fa-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Projects Page Single Start-->
                    <!--Projects Page Single Start-->
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="projects-page__single">
                            <div class="projects-page__img">
                                <img src="{{ asset('assets/images/project/projects-page-1-3.jpg') }}" alt="">
                                <div class="projects-page__icon">
                                    <a class="img-popup" href="{{ asset('assets/images/project/projects-page-1-3.jpg') }}"><span
                                            class="fas fa-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Projects Page Single Start-->
                    <!--Projects Page Single Start-->
                    <div class="col-xl-7 col-lg-6 col-md-6">
                        <div class="projects-page__single">
                            <div class="projects-page__img">
                                <img src="{{ asset('assets/images/project/projects-page-1-4.jpg') }}" alt="">
                                <div class="projects-page__icon">
                                    <a class="img-popup" href="{{ asset('assets/images/project/projects-page-1-4.jpg') }}"><span
                                            class="fas fa-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Projects Page Single Start-->
                    <!--Projects Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="projects-page__single">
                            <div class="projects-page__img">
                                <img src="{{ asset('assets/images/project/projects-page-1-5.jpg') }}" alt="">
                                <div class="projects-page__icon">
                                    <a class="img-popup" href="{{ asset('assets/images/project/projects-page-1-5.jpg') }}"><span
                                            class="fas fa-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Projects Page Single Start-->
                    <!--Projects Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="projects-page__single">
                            <div class="projects-page__img">
                                <img src="{{ asset('assets/images/project/projects-page-1-6.jpg') }}" alt="">
                                <div class="projects-page__icon">
                                    <a class="img-popup" href="{{ asset('assets/images/project/projects-page-1-6.jpg') }}"><span
                                            class="fas fa-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Projects Page Single Start-->
                    <!--Projects Page Single Start-->
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="projects-page__single">
                            <div class="projects-page__img">
                                <img src="{{ asset('assets/images/project/projects-page-1-7.jpg') }}" alt="">
                                <div class="projects-page__icon">
                                    <a class="img-popup" href="{{ asset('assets/images/project/projects-page-1-7.jpg') }}"><span
                                            class="fas fa-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <!--Projects Page Single Start-->
            </div>
        </div>
    </section>
    <!--Projects Page End-->

    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection