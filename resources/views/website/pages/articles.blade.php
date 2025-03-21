@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="{{__('messages.articles')}}" bgImage="assets/images/backgrounds/page-header-bg.png"
        homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Blog Page Start-->
    <section class="blog-page">
        <div class="container">
            <div class="row">
                <!--Blog One Single Start-->
                @forelse ($articles as $key => $article)
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="{{ $key * 100 }}ms">
                        <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="@if ($article->photo ==null) {{ asset('assets/images/null.png')}} @else {{ Storage::url($article->photo) }} @endif" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                                <div class="blog-one__date">
                                    <p>{{ date('d', strtotime($article->created_at)) }}
                                        <span><br>{{ date('M', strtotime($article->created_at)) }}</span>
                                    </p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <h4 class="blog-one__title"><a href="{{ route('articles.details', $article->slug) }}">{{ $article->title }}</a></h4>
                                <div class="blog-one__btn-box">
                                    <a href="{{ route('articles.details', $article->slug) }}" class="blog-one__btn thm-btn">{{__('messages.readmore')}}<span><i
                                                class="icon-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        {{-- <div class="blog-one__single">
                            <div class="blog-one__img-box">
                                <div class="blog-one__img">
                                    <img src="assets/images/blog/blog-1-1.jpg" alt="">
                                </div>
                                <div class="blog-one__date">
                                    <p>20<span><br>feb</span></p>
                                </div>
                            </div>
                            <div class="blog-one__content">
                                <h4 class="blog-one__title"><a href="#">No Articles Found</a></h4>
                                <div class="blog-one__btn-box">
                                    <a href="#" class="blog-one__btn thm-btn">rEAD mORe<span><i
                                                class="icon-arrow-right"></i></span></a>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                <!--Blog One Single End-->
                @endforelse
            </div>
        </div>
    </section>
    <!--Blog Page End-->

    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection
