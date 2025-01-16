@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="{{__(' .contactus')}}" bgImage="assets/images/backgrounds/page-header-bg.png"
        homeLink="{{ url('/') }}" />
    <!--Page Header End-->

    <!--Contact One Start-->
    <section class="contact-one">
        <div class="container">
            <div class="contact-one__inner">
                <x-flash />
                <div class="section-title text-left sec-title-animation animation-style2">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">{{__('messages.contactus')}}</span>
                    </div>
                    <h2 class="section-title__title title-animation"> {{__('messages.empower')}} <br> {{__('messages.thrudonations')}}
                    </h2>
                </div>
                <form class="" action="{{ route('contact_us.store') }}"
                    method="post">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <h4 class="contact-one__input-title">{{__('messages.yourname')}}</h4>
                            <div class="contact-one__input-box">
                                <div class="contact-one__input-icon">
                                    <span class="icon-user"></span>
                                </div>
                                <input type="text" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <h4 class="contact-one__input-title">{{__('messages.emailaddress')}}</h4>
                            <div class="contact-one__input-box">
                                <div class="contact-one__input-icon">
                                    <span class="icon-envelope"></span>
                                </div>
                                <input type="email" name="email" placeholder="someone@example.com">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <h4 class="contact-one__input-title">{{__('messages.yourphone')}}</h4>
                            <div class="contact-one__input-box">
                                <div class="contact-one__input-icon">
                                    <span class="icon-call"></span>
                                </div>
                                <input type="text" name="phone" placeholder="255 000 000 000">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <h4 class="contact-one__input-title">{{__('messages.message')}}</h4>
                            <div class="contact-one__input-box text-message-box">
                                <div class="contact-one__input-icon">
                                    <span class="icon-envelope"></span>
                                </div>
                                <textarea name="message" placeholder="Write your message.."></textarea>
                            </div>
                            <div class="contact-one__btn-box">
                                <button type="submit" class="thm-btn contact-one__btn">{{__('messages.sendmessage')}}<span><i
                                            class="icon-arrow-right"></i></span></button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="result"></div>
            </div>
        </div>
    </section>
    <!--Contact One End-->

    <!--Contact Two Start-->
    <section class="contact-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="contact-two__left">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7883.6437719083115!2d33.54223307415741!3d-8.896145791263754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19009d0041976a09%3A0x89173a2fcfc95d1b!2sEmpowerCare%20Foundation!5e0!3m2!1sen!2sug!4v1730714847703!5m2!1sen!2sug"
                            width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-two__right">
                        <ul class="contact-two__contact-list list-unstyled">
                            <li>
                                <div class="icon">
                                    <span class="icon-pin-two"></span>
                                </div>
                                <div class="content">
                                    <h4>{{__('messages.address1')}}</h4>
                                    <p>Uyole, Mbeya</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-envelope"></span>
                                </div>
                                <div class="content">
                                    <h4>{{__('messages.emailaddress')}}</h4>
                                    <p><a href="mailto:info@empowercarefoundation.or.tz">info@empowercarefoundation.or.tz</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-call"></span>
                                </div>
                                <div class="content">
                                    <h4>{{__('messages.phonenumber')}}</h4>
                                    <p><a href="tel:+255757448534">(+255) 757 448 534</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact Two End-->

    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection
