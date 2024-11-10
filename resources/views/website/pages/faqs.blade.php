@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="FAQS" bgImage="assets/images/backgrounds/page-header-bg.png" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Donation Details Start -->
    <section class="faq-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-page__left">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                            @foreach($faqs->slice(0, ceil($faqs->count() / 2)) as $faq)
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>{{ $faq->title }}</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>{{ $faq->description }}</p>
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
                            @foreach($faqs->slice(ceil($faqs->count() / 2)) as $faq)
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>{{ $faq->title }}</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>{{ $faq->description }}</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Donation Details End -->

    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection