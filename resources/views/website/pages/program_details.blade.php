@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="{{$program->title}}" bgImage="assets/images/backgrounds/page-header-bg.png" homeLink="{{ url('/') }}" />
    <!--Page Header End-->
     <!--Project Details Start-->
     <section class="project-details">
        <div class="container">
            <div class="project-details__img">
                <img src="{{ Storage::url($program->photo)}}" alt="">
                <div class="project-details__info-box">
                    <div class="project-details__info-title-box">
                        <h3 class="project-details__info-title">{{$program->title}}</h3>
                    </div>
                    <div class="project-details__info-and-social">
                        <div class="project-details__info">
                            <ul class="project-details__info-list list-unstyled">
                                <li>
                                    <p>Name:<span>{{$program->title}}</span></p>
                                </li>
                                <li>
                                    <p>Location:<span>{{$program->location}}</span></p>
                                </li>
                            </ul>
                            <ul class="project-details__info-list list-unstyled">
                                <li>
                                    <p>Date:<span>{{$program->day}} {{$program->time}}</span></p>
                                </li>
                                {{-- <li>
                                    <p>Tags:<span>Water For All</span></p>
                                </li> --}}
                            </ul>
                        </div>
                        <div class="project-details__social">
                            {{-- <a href="#"><span class="icon-instagram"></span></a>
                            <a href="#"><span class="icon-twitter"></span></a>
                            <a href="#"><span class="icon-facebook"></span></a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="project-details__left">
                        <h3 class="project-details__title-1">{{$program->title}}</h3>
                        
                        <p class="project-details__text-1">{!! $program->objectives !!}</p>
                        <h3 class="project-details__title-2">Description</h3>
                        <p class="project-details__text-2">{!! $program->description !!}</p>
                       
                       
                        <p class="project-details__text-3"></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="project-details__right">
                        @if($program->other_photos != null)
                        @forelse($program->other_photos as $index => $photo)
                        <div class="project-details__right-img-1">
                            <img src="{{Storage::url($photo)}}" alt="">
                        </div>
                           <p>{{$program->captions[$index]}}</p>
                       @empty
                       @endforelse
                       @endif
                       
                       
                    </div>
                </div>
            </div>
            {{-- <div class="project-details__pagination">
                <ul class="pg-pagination list-unstyled">
                    <li class="prev">
                        <a href="#" aria-label="prev"><i class="icon-right-arrow"></i>Previous</a>
                    </li>
                    <li class="next">
                        <a href="#" aria-label="Next">Next<i class="icon-right-arrow"></i></a>
                    </li>
                </ul>
            </div> --}}
        </div>
    </section>
    <!--Project Details End-->
    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection