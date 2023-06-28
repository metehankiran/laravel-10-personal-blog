<header class="main-header header-style-1 font-heading">
    <div class="header-top">
        <div class="container">
            <div class="row pt-20 pb-20">
                <div class="col-md-3 col-xs-6">
                    <a href="{{ route('home.index') }}"><img class="logo" src="{{ asset('assets') }}/imgs/theme/logo.png"
                            alt=""></a>
                </div>
                <div class="col-md-9 col-xs-6 text-end header-top-right ">
                    <button class="search-icon d-none d-md-inline"><span class="mr-15 text-muted font-small"><i
                                class="elegant-icon icon_search mr-5"></i>Search</span></button>
                    <div class="dark-light-mode-cover">
                        <a class="dark-light-mode" href="#"></a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="header-sticky">
        <div class="container align-self-center position-relative">
            <div class="mobile_menu d-lg-none d-block"></div>
            <div class="main-nav d-none d-lg-block float-start">
                <nav>
                    <!--Desktop menu-->
                    <ul class="main-menu d-none d-lg-inline font-small">
                        <li>
                            <a href="{{ route('home.index') }}"> <i class="elegant-icon icon_house_alt mr-5"></i>
                                Home</a>
                        </li>

                        <li> <a href="{{ route('home.contact') }}">Contact</a> </li>
                    </ul>
                    <!--Mobile menu-->
                    <ul id="mobile-menu" class="d-block d-lg-none text-muted">
                        <li class="menu-item-has-children">
                            <a href="{{ route('home.index') }}">Home</a>
                            <ul class="sub-menu text-muted font-small">
                                <li><a href="{{ route('home.index') }}">Home default</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Pages</a>
                            <ul class="sub-menu font-small">
                                <li><a href="page-about.html">About</a></li>
                                <li><a href="page-contact.html">Contact</a></li>
                                <li><a href="page-typography.html">Typography</a></li>
                                <li><a href="page-register.html">Register</a></li>
                                <li><a href="page-login.html">Login</a></li>
                                <li><a href="page-search.html">Search</a></li>
                                <li><a href="page-author.html">Author</a></li>
                                <li><a href="page-404.html">404 page</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Category</a>
                            <ul class="sub-menu font-small">
                                <li><a href="category-list.html">List layout</a></li>
                                <li><a href="category-grid.html">Grid layout</a></li>
                                <li><a href="category-masonry.html">Masonry layout</a></li>
                                <li><a href="category-big.html">Big layout</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Single post</a>
                            <ul class="sub-menu font-small">
                                <li><a href="single.html">Default</a></li>
                                <li><a href="single-2.html">Big image</a></li>
                                <li><a href="single-3.html">Left image</a></li>
                                <li><a href="single-4.html">With sidebar</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="float-end header-tools text-muted font-small">
                <ul class="header-social-network d-inline-block list-inline mr-15">
                    <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank"
                            href="#"><i class="elegant-icon social_facebook"></i></a></li>
                    <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank"
                            href="#"><i class="elegant-icon social_twitter "></i></a></li>
                    <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank"
                            href="#"><i class="elegant-icon social_pinterest "></i></a></li>
                </ul>
                <div class="off-canvas-toggle-cover d-inline-block">
                    <div class="off-canvas-toggle hidden d-inline-block" id="off-canvas-toggle">
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</header>
