<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', '') }} </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset('backend/images/icon/favicon.ico') }}">
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('backend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{asset('backend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{asset('backend/css/metisMenu.css') }}">
    <link rel="stylesheet" href="{{asset('backend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{asset('backend/css/slicknav.min.css') }}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('backend/css/typography.css') }}">
    <link rel="stylesheet" href="{{asset('backend/css/default-css.css') }}">
    <link rel="stylesheet" href="{{asset('backend/css/styles.css') }}">
    <link rel="stylesheet" href="{{asset('backend/css/responsive.css') }}">
    <!-- modernizr css -->
    <script src="{{ asset('backend/js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
     <!-- login area start -->
     <div class="login-area">
        <div class="container">
            <x-flash/>
            <div class="login-box ptb--100">
                <form method="POST" action="{{ route('password.update')}}" class="needs-validation" novalidate>
                    @csrf
                    <div class="login-form-head">
                        <h4>Reset Password</h4>
                        <p>Hey! Reset Your Password and comeback again</p>
                    </div>
                    <input type="hidden" name="token" value="{{ $token }}" >
                    <input type="hidden" name="email" id="email" value="{{ $email }}">
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Old Password</label>
                            <input type="password" id="exampleInputPassword1">
                            <i class="ti-lock"></i>
                        </div>
                        @error('password')
                            <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                        <div class="form-gp">
                            <label for="exampleInputPassword2">New Password</label>
                            <input type="password" id="exampleInputPassword2">
                            <i class="ti-lock"></i>
                        </div>
                        @error('password')
                            <div class="invalid-feedback"> {{ $message }}</div>
                        @enderror
                        <div class="submit-btn-area mt-5">
                            <button id="form_submit" type="submit">Reset Password<i class="ti-arrow-right"></i></button>
                        </div>
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