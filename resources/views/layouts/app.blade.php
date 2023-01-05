<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>RunAm - News Source Verification</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Enter a news headline below to find out!" />
    <meta name="keywords" content="Fake News, Site Prediction, Trusted Site Predictions" />
    <meta name="author" content="iCreations Ent | Powered by RiseNetworks" />
    <meta name="email" content="support@runam.com" />
    <meta name="website" content="https://runam.com" />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
    @yield('styles')
    <!-- Css -->
    <link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" class="theme-opt" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('assets/css/icons.min.css" rel="stylesheet') }}" type="text/css" />
    <link href="{{ asset('assets/libs/@iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet" />
    <!-- Style Css-->
    <link href="{{ asset('assets/css/style.min.css') }}" id="color-opt" class="theme-opt" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GERXK2QEH5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-GERXK2QEH5');
    </script>

</head>

<body>
<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
</div>
<!-- Loader -->



<!-- Navbar Start -->
<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo" href="{{ url('/') }}">
            <img src="{{ asset('assets/images/logo-dark.png') }}" height="50" class="logo-light-mode" alt="">
            <img src="{{ asset('assets/images/logo-light.png') }}" height="50" class="logo-dark-mode" alt="">
        </a>
        <!-- Logo End -->

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <!--Login button Start-->
        <ul class="buy-button list-inline mb-0">

            <li class="list-inline-item mb-0">
                <a href="javascript:void(0)" class="btn btn-icon btn-light">
                    <img src="{{ asset('assets/images/app/app-store.png') }}" class="avatar avatar-ex-small p-1" alt="">
                </a>
            </li>

            <li class="list-inline-item mb-0">
                <a href="javascript:void(0)" class="btn btn-icon btn-light">
                    <img src="{{ asset('assets/images/app/play-store.png') }}" class="avatar avatar-ex-small p-1" alt="">
                </a>
            </li>
{{--            @auth--}}
{{--                <li class="list-inline-item mb-0">--}}
{{--                    <a href="{{ url('/home') }}" >--}}
{{--                        <div class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="home" class="fea icon-sm"></i></div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            @else--}}
{{--                <li class="list-inline-item mb-0">--}}
{{--                    <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">--}}
{{--                        <div class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="user" class="fea icon-sm"></i></div>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            @endauth--}}

        </ul>
        <!--Login button End-->

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">
                <li><a href="{{ url('/') }}" class="sub-menu-item">Home</a></li>
                <li><a href="{{ route('about') }}" class="sub-menu-item">About Run-Am</a></li>
                <li><a href="https://risenetworks.org/about" class="sub-menu-item" target="_blank">About Rise Networks</a></li>

            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</header><!--end header-->
<!-- Navbar End -->

@yield('content')

<!-- Footer Start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-py-60">
                    <div class="row">
                        <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                            <a href="#" class="logo-footer">
                                <img src="assets/images/logo-light.png" height="50" alt="">
                            </a>
                            <p class="mt-4">The Run Am App has an inbuilt algorithm to verify information in circulation about the electoral processes, politics, and governance to promote Electoral accountability and Checkmating fraud or corrupt practices.</p>
                            <ul class="list-unstyled social-icon foot-social-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                            </ul><!--end icon-->
                        </div><!--end col-->

                        <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h5 class="footer-head">RunAm</h5>
                            <ul class="list-unstyled footer-list mt-4">
                                <li><a href="/about" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> About Run-Am</a></li>
{{--                                <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Careers</a></li>--}}
{{--                                <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Guide</a></li>--}}
{{--                                <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Login</a></li>--}}
                            </ul>
                        </div><!--end col-->

                        <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h5 class="footer-head">Usefull Links</h5>
                            <ul class="list-unstyled footer-list mt-4">
                                <li><a href="/terms" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>
                                <li><a href="/privacy" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                                <li><a href="https://risenetworks.org/about" class="text-foot" target="_blank"><i class="uil uil-angle-right-b me-1"></i> About Rise-Networks</a></li>
{{--                                <li><a href="javascript:void(0)" class="text-foot"><i class="uil uil-angle-right-b me-1"></i> Components</a></li>--}}
                            </ul>
                        </div><!--end col-->

                        <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <h5 class="footer-head">Download <span> Run Am </span> </h5>
{{--                            <p class="mt-4">Sign up and receive the latest tips via email.</p>--}}

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="foot-subscribe mb-3">
                                            <div class="mt-4">
                                                {{--                        <a href="{{ route('login') }}" class="btn btn-secondary mt-3 me-3"><i class="uil uil-envelope"></i> Get Started</a>--}}
                                                <a href="javascript:void(0)" class="btn btn-outline-warning mt-3"><i class="uil uil-google-play"></i> Play Store</a>
                                                <a href="javascript:void(0)" class="btn btn-warning mt-3 me-3"><i class="uil uil-apple"></i> App Store</a>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-12">

                                    </div>
                                </div>

                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->

    <div class="footer-py-30 footer-bar">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="text-sm-start">
                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Run-Am. Design <i class="mdi mdi-heart text-danger"></i> by <a href="https://iCreationsent.com" target="_blank" class="text-reset">iCreations Ent</a> | Powered by <a href="https://risenetworks.org/" target="_blank" class="text-reset">RiseNetworks.</a></p>
                    </div>
                </div><!--end col-->

            </div><!--end row-->
        </div><!--end container-->
    </div>
</footer><!--end footer-->
<!-- Footer End -->


<!-- Cookies Start -->
{{--<div class="card cookie-popup shadow rounded py-3 px-4">--}}
{{--    <p class="text-muted mb-0">This website uses cookies to provide you with a great user experience. By using it, you accept our <a href="https://runam.com/privacy" target="_blank" class="text-success h6">use of cookies</a></p>--}}
{{--    <div class="cookie-popup-actions text-end">--}}
{{--        <button><i class="uil uil-times text-dark fs-4"></i></button>--}}
{{--    </div>--}}
{{--</div>--}}
<!--Note: Cookies Js including in plugins.init.js (path like; js/plugins.init.js) and Cookies css including in _helper.scss (path like; scss/_helper.scss)-->
<!-- Cookies End -->


<!-- Offcanvas Start -->
<div class="offcanvas offcanvas-end shadow border-0" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header p-4 border-bottom">
        <h5 id="offcanvasRightLabel" class="mb-0">
            <img src="assets/images/logo-dark.png" height="50" class="light-version" alt="">
            <img src="assets/images/logo-light.png" height="50" class="dark-version" alt="">
        </h5>
        <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
    </div>
    <div class="offcanvas-body p-4">
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('assets/images/svg/runlogo.svg"') }}" class="img-fluid d-block mx-auto" alt="">
                <div class="card border-0 mt-4" style="z-index: 1">
{{--                    <div class="card-body p-0">--}}
{{--                        <h4 class="card-title text-center">Login</h4>--}}
{{--                        @if(session('message'))--}}
{{--                            <div class="alert alert-info" role="alert">--}}
{{--                                {{ session('message') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                        <form class="login-form mt-4" method="POST" action="{{ route('login') }}">--}}
{{--                            @csrf--}}

{{--                            <div class="row">--}}
{{--                                <div class="col-lg-12">--}}
{{--                                    <div class="mb-3">--}}
{{--                                        <label class="form-label">Your Email <span class="text-danger">*</span></label>--}}
{{--                                        <div class="form-icon position-relative">--}}
{{--                                            <i data-feather="user" class="fea icon-sm icons"></i>--}}
{{--                                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} ps-5" placeholder="Email" name="email" required autocomplete="email" value="{{ old('email', null) }}">--}}
{{--                                        </div>--}}
{{--                                        @if($errors->has('email'))--}}
{{--                                            <div class="invalid-feedback">--}}
{{--                                                {{ $errors->first('email') }}--}}
{{--                                            </div>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </div><!--end col-->--}}

{{--                                <div class="col-lg-12">--}}
{{--                                    <div class="mb-3">--}}
{{--                                        <label class="form-label">Password <span class="text-danger">*</span></label>--}}
{{--                                        <div class="form-icon position-relative">--}}
{{--                                            <i data-feather="key" class="fea icon-sm icons"></i>--}}
{{--                                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} ps-5" placeholder="Password" required name="password">--}}
{{--                                        </div>--}}
{{--                                        @if($errors->has('password'))--}}
{{--                                            <div class="invalid-feedback">--}}
{{--                                                {{ $errors->first('password') }}--}}
{{--                                            </div>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </div><!--end col-->--}}

{{--                                <div class="col-lg-12">--}}
{{--                                    <div class="d-flex justify-content-between">--}}
{{--                                        <div class="mb-3">--}}
{{--                                            <div class="form-check">--}}
{{--                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">--}}
{{--                                                <label class="form-check-label" for="flexCheckDefault">Remember me</label>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <p class="forgot-pass mb-0"><a href="{{ url('password/reset') }}" class="text-dark fw-bold">Forgot password ?</a></p>--}}
{{--                                    </div>--}}
{{--                                </div><!--end col-->--}}

{{--                                <div class="col-lg-12 mb-0">--}}
{{--                                    <div class="d-grid">--}}
{{--                                        <button type="submit" class="btn btn-warning">Sign in</button>--}}
{{--                                    </div>--}}
{{--                                </div><!--end col-->--}}

{{--                                <div class="col-12 text-center">--}}
{{--                                    <p class="mb-0 mt-3"><small class="text-dark me-2">Don't have an account ?</small> <a href="{{ route('register') }}" class="text-dark fw-bold">Sign Up</a></p>--}}
{{--                                </div><!--end col-->--}}
{{--                            </div><!--end row-->--}}
{{--                        </form>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas-footer p-4 border-top text-center">
        <ul class="list-unstyled social-icon social mb-0">
            <li class="list-inline-item mb-0"><a href="https://www.facebook.com/" target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://www.instagram.com//" target="_blank" class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://twitter.com/" target="_blank" class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
            <li class="list-inline-item mb-0"><a href="mailto:support@" class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
        </ul><!--end icon-->
    </div>
</div>
<!-- Offcanvas End -->


<!-- Back to top -->
<a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
<!-- Back to top -->

<!-- Javascript -->
<!-- JAVASCRIPT -->
<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- SLIDER -->
<script src="{{ asset('assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
<!-- Main Js -->
<script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.init.js') }}"></script><!--Note: All init js like tiny slider, counter, countdown, maintenance, lightbox, gallery, swiper slider, aos animation etc.-->
<script src="{{ asset('assets/js/app.js') }}"></script><!--Note: All important javascript like page loader, menu, sticky menu, menu-toggler, one page menu etc. -->
    @yield('scripts')
</body>

</html>
