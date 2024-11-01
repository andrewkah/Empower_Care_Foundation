@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Donations" bgImage="assets/images/backgrounds/page-header-bg.jpg" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Donation Carousel Page Start-->
    <section class="donation-carousel-page">
        <div class="container">
            <div class="donation-carousel-style owl-carousel owl-theme carousel-dot-style">
                <!--Donate Three Single Start-->
                <div class="item">
                    <div class="donate-three__single">
                        <div class="donate-three__img-box">
                            <div class="donate-three__img">
                                <img src="{{asset('assets/images/donate/donate-3-1.jpg') }}" alt="">
                                <img src="{{asset('assets/images/donate/donate-3-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="donate-three__content">
                            <h3 class="donate-three__title"><a href="#">Children Cancer Help
                                    Fund</a></h3>
                            <p class="donate-three__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit asuraut</p>
                            <div class="donate-three__goals">
                                <div class="donate-three__raised">
                                    <p>Raised:</p>
                                    <span>$5,090</span>
                                </div>
                                <div class="donate-three__raised">
                                    <p>Goal:</p>
                                    <span>$9,090</span>
                                </div>
                            </div>
                            <div class="donate-three__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donate Three Single End-->
                <!--Donate Three Single Start-->
                <div class="item">
                    <div class="donate-three__single donate-three__single-2">
                        <div class="donate-three__img-box">
                            <div class="donate-three__img">
                                <img src="{{asset('assets/images/donate/donate-3-2.jpg') }}" alt="">
                                <img src="{{asset('assets/images/donate/donate-3-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="donate-three__content">
                            <h3 class="donate-three__title"><a href="#">Clean Water & Health
                                    Food</a></h3>
                            <p class="donate-three__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit asuraut</p>
                            <div class="donate-three__goals">
                                <div class="donate-three__raised">
                                    <p>Raised:</p>
                                    <span>$4,090</span>
                                </div>
                                <div class="donate-three__raised">
                                    <p>Goal:</p>
                                    <span>$6,090</span>
                                </div>
                            </div>
                            <div class="donate-three__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donate Three Single End-->
                <!--Donate Three Single Start-->
                <div class="item">
                    <div class="donate-three__single donate-three__single-3">
                        <div class="donate-three__img-box">
                            <div class="donate-three__img">
                                <img src="{{asset('assets/images/donate/donate-3-3.jpg') }}" alt="">
                                <img src="{{asset('assets/images/donate/donate-3-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="donate-three__content">
                            <h3 class="donate-three__title"><a href="#">Medicine For
                                    Africans</a></h3>
                            <p class="donate-three__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit asuraut</p>
                            <div class="donate-three__goals">
                                <div class="donate-three__raised">
                                    <p>Raised:</p>
                                    <span>$9,090</span>
                                </div>
                                <div class="donate-three__raised">
                                    <p>Goal:</p>
                                    <span>$11,090</span>
                                </div>
                            </div>
                            <div class="donate-three__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donate Three Single End-->
                <!--Donate Three Single Start-->
                <div class="item">
                    <div class="donate-three__single donate-three__single-1">
                        <div class="donate-three__img-box">
                            <div class="donate-three__img">
                                <img src="{{asset('assets/images/donate/donate-3-4.jpg') }}" alt="">
                                <img src="{{asset('assets/images/donate/donate-3-4.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="donate-three__content">
                            <h3 class="donate-three__title"><a href="#">Poverty Help Fund</a>
                            </h3>
                            <p class="donate-three__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit asuraut</p>
                            <div class="donate-three__goals">
                                <div class="donate-three__raised">
                                    <p>Raised:</p>
                                    <span>$9,090</span>
                                </div>
                                <div class="donate-three__raised">
                                    <p>Goal:</p>
                                    <span>$11,090</span>
                                </div>
                            </div>
                            <div class="donate-three__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donate Three Single End-->
                <!--Donate Three Single Start-->
                <div class="item">
                    <div class="donate-three__single donate-three__single-2">
                        <div class="donate-three__img-box">
                            <div class="donate-three__img">
                                <img src="{{asset('assets/images/donate/donate-3-5.jpg') }}" alt="">
                                <img src="{{asset('assets/images/donate/donate-3-5.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="donate-three__content">
                            <h3 class="donate-three__title"><a href="#">Rights Of Poor
                                    Children</a></h3>
                            <p class="donate-three__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit asuraut</p>
                            <div class="donate-three__goals">
                                <div class="donate-three__raised">
                                    <p>Raised:</p>
                                    <span>$9,090</span>
                                </div>
                                <div class="donate-three__raised">
                                    <p>Goal:</p>
                                    <span>$11,090</span>
                                </div>
                            </div>
                            <div class="donate-three__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donate Three Single End-->
                <!--Donate Three Single Start-->
                <div class="item">
                    <div class="donate-three__single donate-three__single-3">
                        <div class="donate-three__img-box">
                            <div class="donate-three__img">
                                <img src="{{asset('assets/images/donate/donate-3-6.jpg') }}" alt="">
                                <img src="{{asset('assets/images/donate/donate-3-6.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="donate-three__content">
                            <h3 class="donate-three__title"><a href="#">Africans Ecosystem</a>
                            </h3>
                            <p class="donate-three__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit asuraut</p>
                            <div class="donate-three__goals">
                                <div class="donate-three__raised">
                                    <p>Raised:</p>
                                    <span>$9,090</span>
                                </div>
                                <div class="donate-three__raised">
                                    <p>Goal:</p>
                                    <span>$11,090</span>
                                </div>
                            </div>
                            <div class="donate-three__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donate Three Single End-->
                <!--Donate Three Single Start-->
                <div class="item">
                    <div class="donate-three__single">
                        <div class="donate-three__img-box">
                            <div class="donate-three__img">
                                <img src="{{asset('assets/images/donate/donate-3-1.jpg') }}" alt="">
                                <img src="{{asset('assets/images/donate/donate-3-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="donate-three__content">
                            <h3 class="donate-three__title"><a href="#">Children Cancer Help
                                    Fund</a></h3>
                            <p class="donate-three__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit asuraut</p>
                            <div class="donate-three__goals">
                                <div class="donate-three__raised">
                                    <p>Raised:</p>
                                    <span>$5,090</span>
                                </div>
                                <div class="donate-three__raised">
                                    <p>Goal:</p>
                                    <span>$9,090</span>
                                </div>
                            </div>
                            <div class="donate-three__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donate Three Single End-->
                <!--Donate Three Single Start-->
                <div class="item">
                    <div class="donate-three__single donate-three__single-2">
                        <div class="donate-three__img-box">
                            <div class="donate-three__img">
                                <img src="{{asset('assets/images/donate/donate-3-2.jpg') }}" alt="">
                                <img src="{{asset('assets/images/donate/donate-3-2.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="donate-three__content">
                            <h3 class="donate-three__title"><a href="#">Clean Water & Health
                                    Food</a></h3>
                            <p class="donate-three__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit asuraut</p>
                            <div class="donate-three__goals">
                                <div class="donate-three__raised">
                                    <p>Raised:</p>
                                    <span>$4,090</span>
                                </div>
                                <div class="donate-three__raised">
                                    <p>Goal:</p>
                                    <span>$6,090</span>
                                </div>
                            </div>
                            <div class="donate-three__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donate Three Single End-->
                <!--Donate Three Single Start-->
                <div class="item">
                    <div class="donate-three__single donate-three__single-3">
                        <div class="donate-three__img-box">
                            <div class="donate-three__img">
                                <img src="{{asset('assets/images/donate/donate-3-3.jpg') }}" alt="">
                                <img src="{{asset('assets/images/donate/donate-3-3.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="donate-three__content">
                            <h3 class="donate-three__title"><a href="#">Medicine For
                                    Africans</a></h3>
                            <p class="donate-three__text">Dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit asuraut</p>
                            <div class="donate-three__goals">
                                <div class="donate-three__raised">
                                    <p>Raised:</p>
                                    <span>$9,090</span>
                                </div>
                                <div class="donate-three__raised">
                                    <p>Goal:</p>
                                    <span>$11,090</span>
                                </div>
                            </div>
                            <div class="donate-three__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="75%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Donate Three Single End-->
            </div>
        </div>
    </section>
    <!--Donation Carousel Page End-->

    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection