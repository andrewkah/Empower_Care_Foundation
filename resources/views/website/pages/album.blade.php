@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Album" bgImage="assets/images/backgrounds/page-header-bg.jpg" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Projects Page Start-->
    <section class="projects-page">
        <div class="container">
            <div class="row">
                <!--Projects Page Single Start-->
                <div class="col-xl-7 col-lg-6 col-md-6">
                    <div class="projects-page__single">
                        <div class="projects-page__img">
                            <img src="{{asset('assets/images/project/projects-page-1-1.jpg') }}" alt="">
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
                            <img src="{{asset('assets/images/project/projects-page-1-2.jpg') }}" alt="">
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
                            <img src="{{asset('assets/images/project/projects-page-1-3.jpg') }}" alt="">
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
                            <img src="{{asset('assets/images/project/projects-page-1-4.jpg') }}" alt="">
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
                            <img src="{{asset('assets/images/project/projects-page-1-5.jpg') }}" alt="">
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
                            <img src="{{asset('assets/images/project/projects-page-1-6.jpg') }}" alt="">
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
                            <img src="{{asset('assets/images/project/projects-page-1-7.jpg') }}" alt="">
                            <div class="projects-page__icon">
                                <a class="img-popup" href="{{ asset('assets/images/project/projects-page-1-7.jpg') }}"><span
                                        class="fas fa-plus"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Projects Page Single Start-->
            </div>
        </div>
    </section>
    <!--Projects Page End-->

    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection