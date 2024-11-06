@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Contact Us" bgImage="assets/images/backgrounds/page-header-bg.jpg"
        homeLink="{{ url('/') }}" />
    <!--Page Header End-->
    <!--Contact One Start-->
    <section class="contact-one">
        <div class="container">
            <div class="contact-one__inner">
                <div class="section-title text-left sec-title-animation animation-style2">
                    <div class="section-title__tagline-box">
                        <span class="section-title__tagline">Contact Us</span>
                    </div>
                    <h2 class="section-title__title title-animation">Empowering Communities<br> through Donations
                    </h2>
                </div>
                <form class="contact-form-validated contact-one__form" action="{{ asset('assets/inc/sendemail.php') }}"
                    method="post" novalidate="novalidate">
                    @csrf
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <h4 class="contact-one__input-title">Your Name</h4>
                            <div class="contact-one__input-box">
                                <div class="contact-one__input-icon">
                                    <span class="icon-user"></span>
                                </div>
                                <input type="text" name="name" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <h4 class="contact-one__input-title">Email Address</h4>
                            <div class="contact-one__input-box">
                                <div class="contact-one__input-icon">
                                    <span class="icon-pin"></span>
                                </div>
                                <input type="email" name="email" placeholder="someone@example.com">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <h4 class="contact-one__input-title">Your phone</h4>
                            <div class="contact-one__input-box">
                                <div class="contact-one__input-icon">
                                    <span class="icon-call"></span>
                                </div>
                                <input type="text" name="phone" placeholder="+255 000 000 000">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <h4 class="contact-one__input-title">Message</h4>
                            <div class="contact-one__input-box text-message-box">
                                <div class="contact-one__input-icon">
                                    <span class="icon-envelope"></span>
                                </div>
                                <textarea name="message" placeholder="Write your message.."></textarea>
                            </div>
                            <div class="contact-one__btn-box">
                                <button type="submit" class="thm-btn contact-one__btn" id="submit-btn">Send Message<span><i
                                            class="icon-arrow-right"></i></span></button>
                                <div class="progress progress-bar-striped progress-bar-animated" role="progressbar"
                                    aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%; display: none">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="result"></div>
            </div>
        </div>
    </section>

    <script>
        const form = document.querySelector('.contact-form-validated');
        const btn = document.querySelector('#submit-btn');
        const progress = document.querySelector('.progress');

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            btn.disabled = true;
            progress.style.display = 'block';
            progress.style.width = '0%';
            var interval = setInterval(function () {
                var w = progress.getAttribute('aria-valuenow');
                if (w < 100) {
                    w++;
                    progress.setAttribute('aria-valuenow', w);
                    progress.style.width = w + '%';
                } else {
                    clearInterval(interval);
                }
            }, 10);
            setTimeout(function () {
                progress.style.display = 'none';
                btn.disabled = false;
            }, 3000);
        });
    </script>
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
                                    <h4>Address</h4>
                                    <p>Uyole, Mbeya</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-envelope"></span>
                                </div>
                                <div class="content">
                                    <h4>Email Address</h4>
                                    <p><a href="mailto:"></a></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="icon-call"></span>
                                </div>
                                <div class="content">
                                    <h4>Phone number</h4>
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
