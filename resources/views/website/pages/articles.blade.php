@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Articles" bgImage="assets/images/backgrounds/page-header-bg.jpg"
        homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Blog Page Start-->
    <section class="blog-page">
        <div class="container">
            <div class="row">
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-1.jpg" alt="">
                            </div>
                            <div class="blog-one__date">
                                <p>20<span><br>feb</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <h4 class="blog-one__title"><a href="blog-details.html">Caring for the Elderly and
                                    Vulnerable Strategy </a></h4>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.html" class="blog-one__btn thm-btn">rEAD mORe<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-2.jpg" alt="">
                            </div>
                            <div class="blog-one__date">
                                <p>15<span><br>Nov</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <h4 class="blog-one__title"><a href="blog-details.html">Our Goal Is Help The Poor Child
                                    Around The World</a></h4>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.html" class="blog-one__btn thm-btn">rEAD mORe<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="300ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-3.jpg" alt="">
                            </div>
                            <div class="blog-one__date">
                                <p>25<span><br>Jun</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <h4 class="blog-one__title"><a href="blog-details.html">Education For Poor Children Is A
                                    Must Now</a></h4>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.html" class="blog-one__btn thm-btn">rEAD mORe<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="400ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-4.jpg" alt="">
                            </div>
                            <div class="blog-one__date">
                                <p>25<span><br>Jun</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <h4 class="blog-one__title"><a href="blog-details.html">Education For Poor Children Is A
                                    Must Now</a></h4>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.html" class="blog-one__btn thm-btn">rEAD mORe<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-5.jpg" alt="">
                            </div>
                            <div class="blog-one__date">
                                <p>25<span><br>Jun</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <h4 class="blog-one__title"><a href="blog-details.html">Our Goal Is Help The Poor Child
                                    Around The World</a></h4>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.html" class="blog-one__btn thm-btn">rEAD mORe<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
                <!--Blog One Single Start-->
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInRight" data-wow-delay="600ms">
                    <div class="blog-one__single">
                        <div class="blog-one__img-box">
                            <div class="blog-one__img">
                                <img src="assets/images/blog/blog-1-6.jpg" alt="">
                            </div>
                            <div class="blog-one__date">
                                <p>25<span><br>Jun</span></p>
                            </div>
                        </div>
                        <div class="blog-one__content">
                            <h4 class="blog-one__title"><a href="blog-details.html">Caring for the Elderly and
                                    Vulnerable Strategy</a></h4>
                            <div class="blog-one__btn-box">
                                <a href="blog-details.html" class="blog-one__btn thm-btn">rEAD mORe<span><i
                                            class="icon-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Blog One Single End-->
            </div>
        </div>
    </section>
    <!--Blog Page End-->

    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection
