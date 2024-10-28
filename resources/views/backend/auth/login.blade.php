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
    <div class="login-area login-bg">
        <div class="container">
            <x-flash/>
            @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
            @endif
            <div class="login-box ptb--100">
                <x-form :action="route('login')">
                    <div class="login-form-head">
                        <h4>Welcome Back</h4>
                        <p>Please Sign in to continue</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Username</label>
                            <input type="email" id="exampleInputEmail1" name="email">
                            <i class="ti-user"></i>
                            @error('name')<x-input.error id="name"
                                                    class="form-text text-danger">{{ $message }}</x-small>@enderror
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="exampleInputPassword1" name="password">
                            <i class="ti-lock"></i>
                            @error('password')<x-input.error id="password"
                            class="form-text text-danger">{{ $message }}</x-small>@enderror
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    {{-- <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember Me</label> --}}
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="{{route('password.request')}}">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Don't have an account? <a href="{{route('register')}}">Sign up</a></p>
                        </div>
                    </div>
                </x-form>
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