@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Articles" bgImage="assets/images/backgrounds/page-header-bg.jpg"
        homeLink="{{ url('/') }}" />
    <!--Page Header End-->
            <!--Blog Details Start-->
            <section class="blog-details">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="blog-details__left">
                                <div class="blog-details__img">
                                    <img src="{{ asset('storage/' . $article->photo) }}" alt="">
                                </div>
                                <div class="blog-details__content">
                                    <h3 class="blog-details__title">{{ $article->title }}</h3>
                                    <p class="blog-details__text-1">{{ $article->summary }}</p>
                                    <p class="blog-details__text-2">{{ $article->description }}</p>
                                    <div class="blog-details__quote">
                                        <span class="icon-quote"></span>
                                        <p>{{ $article->quote }}</p>
                                    </div>
                                    <div class="blog-details__keyword-and-tag">
                                        <div class="blog-details__keyword">
                                            <span>Keyword:</span>
                                            <div class="blog-details__keyword-list">
                                                @foreach (explode(',', $article->tags) as $tag)
                                                    <a href="#">{{ $tag }}</a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--Blog Details End-->
 <!--Site Footer Two Start-->
 @include('website.layout.footer')
 <!--Site Footer Two End-->
@endsection            