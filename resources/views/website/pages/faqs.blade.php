@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="FAQS" bgImage="assets/images/backgrounds/page-header-bg.jpg" homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Donation Details Start -->
    <section class="faq-page">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-page__left">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-1">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Maecenas facilisis erat id odio</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Et purus duis sollicitudin dignissim ha. Egest nulla quis venenatis
                                            cras
                                            sed
                                            eu massa eu faucibus. Urna fusce aenea tortor pretium Et purus duis
                                            sollicitudin dignissim habitant</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion  active">
                                <div class="accrodion-title">
                                    <h4>Phasellus et vehicula nulla</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Et purus duis sollicitudin dignissim ha. Egest nulla quis venenatis
                                            cras
                                            sed
                                            eu massa eu faucibus. Urna fusce aenea tortor pretium Et purus duis
                                            sollicitudin dignissim habitant</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Maecenas malesuada</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Et purus duis sollicitudin dignissim ha. Egest nulla quis venenatis
                                            cras
                                            sed
                                            eu massa eu faucibus. Urna fusce aenea tortor pretium Et purus duis
                                            sollicitudin dignissim habitant</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Why you join our team</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Et purus duis sollicitudin dignissim ha. Egest nulla quis venenatis
                                            cras
                                            sed
                                            eu massa eu faucibus. Urna fusce aenea tortor pretium Et purus duis
                                            sollicitudin dignissim habitant</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="faq-page__right">
                        <div class="accrodion-grp faq-one-accrodion" data-grp-name="faq-one-accrodion-2">
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Why you join our team</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Et purus duis sollicitudin dignissim ha. Egest nulla quis venenatis
                                            cras
                                            sed
                                            eu massa eu faucibus. Urna fusce aenea tortor pretium Et purus duis
                                            sollicitudin dignissim habitant</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion  active">
                                <div class="accrodion-title">
                                    <h4>Maecenas malesuada</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Et purus duis sollicitudin dignissim ha. Egest nulla quis venenatis
                                            cras
                                            sed
                                            eu massa eu faucibus. Urna fusce aenea tortor pretium Et purus duis
                                            sollicitudin dignissim habitant</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Phasellus et vehicula nulla</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Et purus duis sollicitudin dignissim ha. Egest nulla quis venenatis
                                            cras
                                            sed
                                            eu massa eu faucibus. Urna fusce aenea tortor pretium Et purus duis
                                            sollicitudin dignissim habitant</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
                            <div class="accrodion">
                                <div class="accrodion-title">
                                    <h4>Maecenas facilisis erat id odio</h4>
                                </div>
                                <div class="accrodion-content">
                                    <div class="inner">
                                        <p>Et purus duis sollicitudin dignissim ha. Egest nulla quis venenatis
                                            cras
                                            sed
                                            eu massa eu faucibus. Urna fusce aenea tortor pretium Et purus duis
                                            sollicitudin dignissim habitant</p>
                                    </div><!-- /.inner -->
                                </div>
                            </div>
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