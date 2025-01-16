@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="{{__('messages.videos')}}" bgImage="assets/images/backgrounds/page-header-bg.png" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Projects Page Start-->
    <section class="projects-page">
        <div class="container">
            <div class="row">
                <!--Projects Page Single Start-->
                    @forelse ($videos as $video)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="projects-page__single">
                                <iframe width="100%"  height="auto" src="https://www.youtube.com/embed/{{$video->youtube_id}}" frameborder="0" allowfullscreen></iframe>
                                  
                                <p> {{$video->title}}
                                    <br/>
                                    {{ \Carbon\Carbon::parse($video->created_at)->format('M d, Y') }}
                                   
                                </p>
                                
                            </div>
                        </div>
                @empty
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
                    
                @endforelse
                <!--Projects Page Single Start-->
            </div>
        </div>
    </section>
    <!--Projects Page End-->

    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection