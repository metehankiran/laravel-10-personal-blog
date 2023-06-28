<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') - {{ env('APP_NAME') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets') }}/imgs/theme/favicon.png">
    <!-- NewsBoard CSS  -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/widgets.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/dark.css">
    <link rel="stylesheet" href="{{ asset('assets') }}/css/responsive.css">

    @yield('styles')
</head>

<body>
    <div class="scroll-progress primary-bg"></div>
    <!-- Start Preloader -->
    <!--     <div class="preloader text-center">
        <div class="circle"></div>
    </div> -->
    <!--Offcanvas sidebar-->
    @include('widgets.offcanvas-sidebar')
    <!-- Start Header -->
    @include('components.header')
    <!--Start search form-->
    @include('widgets.search-form')
    <!-- Start Main content -->
    @yield('content')
    <!-- End Main content -->
    <!-- Footer Start-->
    <footer class="pt-50 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="sidebar-widget wow fadeInUp animated mb-30">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">About me</h5>
                        </div>
                        <div class="textwidget">
                            <p>
                                Start writing, no matter what. The water does not flow until the faucet is turned on.
                            </p>
                            <p><strong class="color-black">Address</strong><br> 123 Main Street<br> New York, NY 10001</p>
                            <p><strong class="color-black">Follow me</strong><br>
                                <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                    <li class="list-inline-item"><a class="fb" href="#" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="tw" href="#" target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                                    <li class="list-inline-item"><a class="pt" href="#" target="_blank" title="Pin it"><i class="elegant-icon social_pinterest"></i></a></li>
                                </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="sidebar-widget widget_categories wow fadeInUp animated mb-30" data-wow-delay="0.1s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Quick link</h5>
                        </div>
                        <ul class="font-small">
                            <li class="cat-item cat-item-2"><a href="#">About me</a></li>
                            <li class="cat-item cat-item-4"><a href="#">Help & Support</a></li>
                            <li class="cat-item cat-item-5"><a href="#">​​Licensing Policy</a></li>
                            <li class="cat-item cat-item-6"><a href="#">Refund Policy</a></li>
                            <li class="cat-item cat-item-7"><a href="#">Hire me</a></li>
                            <li class="cat-item cat-item-7"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="sidebar-widget widget_tagcloud wow fadeInUp animated mb-30" data-wow-delay="0.2s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Tagcloud</h5>
                        </div>
                        <div class="tagcloud mt-50">
                            @foreach ($tagCloud as $tag)
                                <a class="tag-cloud-link" href="{{ route('home.search',$tag->slug) }}">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="sidebar-widget widget_newsletter wow fadeInUp animated mb-30" data-wow-delay="0.3s">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">Newsletter</h5>
                        </div>
                        <div class="newsletter">
                            <p class="font-medium">Subscribe to our newsletter and get our newest updates right on your inbox.</p>
                            <form class="input-group form-subcriber mt-30 d-flex">
                                <input type="email" class="form-control bg-white font-small" name="email" placeholder="Enter your email" autocomplete="on">
                                <button class="btn bg-primary text-white" type="submit">Subscribe</button>
                                <label class="mt-20"> <input class="mr-5" name="name" type="checkbox" value="1" required="" autocomplete="off"> I agree to the <a href="#" target="_blank">terms &amp; conditions</a> </label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy-right pt-30 mt-20 wow fadeInUp animated">
                <p class="float-md-start font-small text-muted">© 2023, {{ env('APP_NAME') }} </p>
                <p class="float-md-end font-small text-muted">
                    Design by <a href="{{ env('APP_REPOSITORY') }}" target="_blank">{{ env('APP_AUTHOR') }}</a>
                </p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <div class="dark-mark"></div>
    <!-- Vendor JS-->
    <script src="{{ asset('assets') }}/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/popper.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/jquery.slicknav.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/slick.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/wow.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/jquery.ticker.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/jquery.vticker-min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/jquery.nice-select.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/jquery.magnific-popup.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/jquery.sticky.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/perfect-scrollbar.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/waypoints.min.js"></script>
    <script src="{{ asset('assets') }}/js/vendor/jquery.theia.sticky.js"></script>
    <!-- NewsBoard JS -->
    <script src="{{ asset('assets') }}/js/main.js"></script>

    @yield('scripts')
</body>

</html>
