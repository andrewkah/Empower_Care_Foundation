@extends('website.layout.main')

@section('content')
    <!--Page Header Start-->
    <x-website-page-header title="Create Donation Request" bgImage="assets/images/backgrounds/page-header-bg.png" homeLink="{{ url('/') }}" />
    <!--Page Header End-->
    <x-flash/>
    <!--Donation Details Start -->
    <section class="donation-details">
        <div class="container">
            <div class="donation-details__inner">
                <div class="donation-details__payment-method-box">
                    <form class="" action="{{route('submit.donate')}}"
                        method="post" >
                    <h3 class="donation-details__payment-method-title">Select Payment Method</h3>
                    <div class="donation-details__quote-radio">
                        <label class="custom-radio">
                            <input type="radio" name="payment_method" value="1" checked>
                            <span class="radio-dot"></span>
                            <span class="radio-text">Visa</span>
                        </label>
                        <label class="custom-radio">
                            <input type="radio" name="payment_method" value="2">
                            <span class="radio-dot"></span>
                            <span class="radio-text">Paypal</span>
                        </label>
                    </div>
                </div>
                <div class="donation-details__personal-info">
                    <h3 class="donation-details__personal-info-title">Personal Information</h3>
                    
                        @csrf 
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="donation-details__input-box">
                                    <p class="donation-details__input-box-title">Your First Name*</p>
                                    <input type="text" name="firstname" placeholder="First Name..." required="" value="{{old('firstname')}}">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="donation-details__input-box">
                                    <p class="donation-details__input-box-title">Your Last Name*</p>
                                    <input type="text" name="lastname" placeholder="Last Name..." required="" value="{{old('lastname')}}">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="donation-details__input-box">
                                    <p class="donation-details__input-box-title">Your E-mail Address*</p>
                                    <input type="email" name="email" placeholder="E-mail Address..." required="" value="{{old('email')}}">
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="donation-details__donate-box-outer">
                                    <div class="donation-details__donate-box">
                                        <div class="donate-now">
                                            <p class="donation-details__input-box-title">Enter Donation Amount*</p>
                                            <input type="text" class="addAmount-value" name="amount" value="{{old('amount')}}"
                                                placeholder="$ Costume Amount">
                                        </div>
                                        {{-- <h4 class="donation-details__donate-box-divider">Or</h4>
                                        <div class="donate-amount">
                                            <p class="donation-details__input-box-title">Select Amount*</p>
                                            <button class="active amount-btn">$5,000</button>
                                            <button class="amount-btn">$3,000</button>
                                            <button class="amount-btn">$1,000</button>
                                        </div> --}}
                                    </div>
                                    {{-- <h3 class="donation-details__donate-amout"><span>Total Amount: </span>$587987
                                    </h3> --}}
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="donation-details__btn-box">
                                    <button type="submit" class="thm-btn donation-details__btn">Donate Now<span><i
                                                class="icon-arrow-right"></i></span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Donation Details End -->

    <!--Site Footer Two Start-->
    @include('website.layout.footer')
    <!--Site Footer Two End-->
@endsection