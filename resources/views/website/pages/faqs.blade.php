@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="FAQS" bgImage="assets/images/backgrounds/page-header-bg.png"
        homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Donation Details Start -->
    <section class="faq-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-page__left">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                            @foreach ($faqs->slice(0, ceil($faqs->count() / 2)) as $faq)
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>{{ $faq->question }}</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>{{ $faq->answer }}</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-page__right">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                            @foreach ($faqs->slice(ceil($faqs->count() / 2)) as $faq)
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>{{ $faq->question }}</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>{{ $faq->answer }}</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="section-title text-center sec-title-animation animation-style1">
                    <h3 class="section-title__title title-animation">For More Information <br> Contact Us Now!</h3>
                </div>
                <div class="btn-box text-center">
                    <a href="{{ route('contact-us') }}" class="thm-btn">
                        Contact Us
                        <span>
                            <i class="icon-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Donation Details End -->

    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection
