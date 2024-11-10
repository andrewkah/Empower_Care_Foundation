@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Team" bgImage="assets/images/backgrounds/page-header-bg.png"
        homeLink="{{ url('/') }}" />
    <!--Page Header End-->
    <!--Volunteer Carousel Page Start-->
    <section class="volunteer-carousel-page">
        <div class="container">
            <div class="volunteer-carousel-style owl-carousel owl-theme carousel-dot-style">
                @forelse ($team as $teamMember)
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="{{ $teamMember->photo ? asset('storage/' . $teamMember->photo) : asset('assets/images/team/volunteer-page-1-1.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__name-box">
                                <h4 class="team-one__name"><a href="volunteer-details.html">{{ $teamMember->name }}</a>
                                </h4>
                                <p class="team-one__sub-title">{{ $teamMember->position }}</p>
                            </div>
                            <div class="team-one__share-and-social">
                                <div class="team-one__social">
                                    <a href="mailto:{{ $teamMember->email }}"><span class="icon-envelope"></span></a>
                                    <a href="tel:{{ $teamMember->phone }}"><span class="icon-phone"></span></a>
                                </div>
                                <div class="team-one__share">
                                    <a href="volunteer-details.html"><span class="icon-share"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <!--Volunteer Page Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="assets/images/team/volunteer-page-1-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__name-box">
                                <h4 class="team-one__name"><a href="volunteer-details.html">Arlene McCoy</a>
                                </h4>
                                <p class="team-one__sub-title">Nursing Assistant</p>
                            </div>
                            <div class="team-one__share-and-social">
                                <div class="team-one__social">
                                    <a href="volunteer-details.html"><span class="icon-facebook"></span></a>
                                    <a href="volunteer-details.html"><span class="icon-instagram"></span></a>
                                    <a href="volunteer-details.html"><span class="icon-twitter"></span></a>
                                    <a href="volunteer-details.html"><span class="icon-link-in"></span></a>
                                </div>
                                <div class="team-one__share">
                                    <a href="volunteer-details.html"><span class="icon-share"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Volunteer Page Single End-->
                <!--Volunteer Page Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="assets/images/team/volunteer-page-1-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__name-box">
                                <h4 class="team-one__name"><a href="volunteer-details.html">Jenny Wilson</a>
                                </h4>
                                <p class="team-one__sub-title">Web Designer</p>
                            </div>
                            <div class="team-one__share-and-social">
                                <div class="team-one__social">
                                    <a href="volunteer-details.html"><span class="icon-facebook"></span></a>
                                    <a href="volunteer-details.html"><span class="icon-instagram"></span></a>
                                    <a href="volunteer-details.html"><span class="icon-twitter"></span></a>
                                    <a href="volunteer-details.html"><span class="icon-link-in"></span></a>
                                </div>
                                <div class="team-one__share">
                                    <a href="volunteer-details.html"><span class="icon-share"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Volunteer Page Single End-->
                <!--Volunteer Page Single Start-->
                <div class="item">
                    <div class="team-one__single">
                        <div class="team-one__img-box">
                            <div class="team-one__img">
                                <img src="assets/images/team/volunteer-page-1-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="team-one__content">
                            <div class="team-one__name-box">
                                <h4 class="team-one__name"><a href="volunteer-details.html">Robert Fox</a>
                                </h4>
                                <p class="team-one__sub-title">Marketing Coordinator</p>
                            </div>
                            <div class="team-one__share-and-social">
                                <div class="team-one__social">
                                    <a href="volunteer-details.html"><span class="icon-facebook"></span></a>
                                    <a href="volunteer-details.html"><span class="icon-instagram"></span></a>
                                    <a href="volunteer-details.html"><span class="icon-twitter"></span></a>
                                    <a href="volunteer-details.html"><span class="icon-link-in"></span></a>
                                </div>
                                <div class="team-one__share">
                                    <a href="volunteer-details.html"><span class="icon-share"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Volunteer Page Single End-->
                @endforelse
                <!--Volunteer Page Single End-->
            </div>
        </div>
    </section>
    <!--Volunteer Carousel Page End-->

    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection
