@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Album" bgImage="assets/images/backgrounds/page-header-bg.jpg" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Projects Page Start-->
    <section class="projects-page">
        <div class="container">
            <div class="row">
                @foreach ($album as $image)
                    @foreach (json_decode($image->photos) as $key => $photo)
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