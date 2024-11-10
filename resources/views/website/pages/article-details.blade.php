@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="{{$article->title}}" bgImage="assets/images/backgrounds/page-header-bg.jpg"
        homeLink="{{ url('/') }}" />
    <!--Page Header End-->
            <!--Blog Details Start-->
            <section class="blog-details">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="blog-details__left">
                                <div class="blog-details__img">
                                    <img src="{{Storage::url($article->photo) }}" alt="">
                                </div>
                                <div class="blog-details__content">
                                    <ul class="blog-details__meta list-unstyled">
                                        {{-- <li>
                                            <div class="icon">
                                                <span class="icon-user"></span>
                                            </div>
                                            <a href="#">By admin</a>
                                        </li> --}}
                                        <li>
                                            <div class="icon">
                                                <span class="icon-file"></span>
                                            </div>
                                            <a href="#">{{$article->category->title}}</a>
                                        </li>
                                        {{-- <li>
                                            <div class="icon">
                                                <span class="icon-comment"></span>
                                            </div>
                                            <a href="#">Comments (05)</a>
                                        </li> --}}
                                    </ul>
                                    <h3 class="blog-details__title">{{ $article->title }}</h3>
                                    {!! $article->summary !!}
                                    <p class="blog-details__text-2"> </p>
                                    <div class="blog-details__author-box">
                                        <p class="blog-details__author-text">{{ $article->quote }}
                                        </p>
                                        <span class="blog-details__author-name"></span>
                                        <div class="blog-details__author-quote">
                                            <span class="icon-quote"></span>
                                        </div>
                                    </div>
                                    <p class="blog-details__text-3">{!! $article->description !!}</p>
                                </div>
                                <div class="blog-details__keyword-and-tag">
                                    <div class="blog-details__keyword">
                                        <span>Keyword:</span>
                                        <div class="blog-details__keyword-list">
                                            @foreach (explode(',', $article->tags) as $tag)
                                            <a href="{{route('articles.tag',$tag)}}">{{ $tag }}</a>
                                        @endforeach
                                        </div>
                                    </div>
                                    <div class="blog-details__tag">
                                        {{-- <span>Tags:</span>
                                        <div class="blog-details__tag-list">
                                            <a href="#">Donation</a>
                                            <a href="#">Charity</a>
                                        </div> --}}
                                    </div>
                                </div>                                                                
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="sidebar">
                                <div class="sidebar__single sidebar__search">
                                    <div class="sidebar__title-box">
                                        <h3 class="sidebar__title">Search Here </h3>
                                    </div>
                                    <form action="{{route('articles.search')}}" class="sidebar__search-form" method="POST">
                                        @csrf 
                                        <input type="search" placeholder="Search..">
                                        <button type="submit"><i class="icon-search"></i></button>
                                    </form>
                                </div>
                                <div class="sidebar__single sidebar__category">
                                    <div class="sidebar__title-box">
                                        <h3 class="sidebar__title">Categories</h3>
                                    </div>
                                    <ul class="sidebar__category-list list-unstyled">
                                        @forelse($article_categories as $category)
                                        <li>
                                            <a href="{{ route('articles.category',$category['slug'])}}">{{$category['title']}}<span>{{$category['count']}}</span></a>
                                        </li>
                                        @empty
                                        @endforelse
                                       
                                    </ul>
                                </div>
                                {{-- <div class="sidebar__single sidebar__post">
                                    <div class="sidebar__title-box">
                                        <h3 class="sidebar__title">Recent Post</h3>
                                    </div>
                                    <ul class="sidebar__post-list list-unstyled">
                                        <li>
                                            <div class="sidebar__post-image">
                                                <img src="assets/images/blog/blog-lp-1.jpg" alt="">
                                            </div>
                                            <div class="sidebar__post-content">
                                                <p class="sidebar__post-date"><span class="icon-calender"></span>October 19,
                                                    2022</p>
                                                <h3 class="sidebar__post-title"><a href="blog-details.html">Funding Research
                                                        for a Cure Charity</a></h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar__post-image">
                                                <img src="assets/images/blog/blog-lp-2.jpg" alt="">
                                            </div>
                                            <div class="sidebar__post-content">
                                                <p class="sidebar__post-date"><span class="icon-calender"></span>October 19,
                                                    2022</p>
                                                <h3 class="sidebar__post-title"><a href="blog-details.html">Supporting
                                                        Mental Health Initiatives Donations</a></h3>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar__post-image">
                                                <img src="assets/images/blog/blog-lp-3.jpg" alt="">
                                            </div>
                                            <div class="sidebar__post-content">
                                                <p class="sidebar__post-date"><span class="icon-calender"></span>October 19,
                                                    2022</p>
                                                <h3 class="sidebar__post-title"><a href="blog-details.html">Caring for the
                                                        Elderly and Vulnerable at a Time</a></h3>
                                            </div>
                                        </li>
                                    </ul>
                                </div> --}}
                                <div class="sidebar__single sidebar__tag">
                                    <div class="sidebar__title-box">
                                        <h3 class="sidebar__title">Popular Tags</h3>
                                    </div>
                                    <div class="sidebar__tag-list">
                                        @forelse($all_tags as $tag_value)
                                        <a href="{{route('articles.tag',$tag_value)}}">{{$tag_value}}</a>
                                        @empty
                                        @endforelse
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