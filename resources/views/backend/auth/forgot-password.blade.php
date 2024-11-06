<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', '') }} </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('assets/images/favicons/favicon-32x32.png') }}" />
    <link rel="icon" href="{{ asset('assets/images/favicons/favicon.ico') }}favicon.ico" type="image/x-icon">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('assets/images/favicons/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}" />
    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/slicknav.min.css') }}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css"
        media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('backend/css/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/default-css.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/responsive.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('backend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>

    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">

                <form method="POST" action="{{ route('password.email') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="login-form-head">
                        <h4>Reset Password</h4>
                        <p>Please enter your registered email address</p>
                    </div>
                    <div class="login-form-body">
                        @if (session('status'))
                            <div class="bg-white p-4 rounded shadow">
                                <div class="alert alert-success text-center" role="alert">
                                    {{ session('status') }}
                                </div>
                                <p class="text-center">
                                    {{ __('A password reset link has been sent to your email address. Please check and reset your password!') }}
                                </p>
                            </div>
                        @else
                            <div class="form-gp">
                                <label for="email">Email Address</label>
                                <input type="email" value="{{ old('email') }}" id="email" name="email"
                                    autocomplete="off">
                                <i class="ti-email"></i>
                                @error('email')
                                    <x-input.error id="email"
                                        class="form-text text-danger">{{ $message }}</x-input.error>
                                @enderror
                            </div>
                            <div class="row mb-4 rmber-area">
                                <div class="col-6">
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{ route('login') }}">Already have an account?</a>
                                </div>
                            </div>
                            <div class="submit-btn-area mt-5">
                                <button id="form_submit" type="submit">Send Link <i
                                        class="ti-arrow-right"></i></button>
                            </div>
                        @endif
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="{{ asset('backend/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('backend/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.slicknav.min.js') }}"></script>

    <!-- others plugins -->
    <script src="{{ asset('backend/js/plugins.js') }}"></script>
    <script src="{{ asset('backend/js/scripts.js') }}"></script>
</body>

</html>
