<!-- Preloader Starts -->
<div class="preloader" id="preloader">
    <div class="logopreloader">
        <img src="{{asset('images/frontend_images/styleswitcher/logos/yellow.png')}}" alt="logo-black">
    </div>
    <div class="loader" id="loader"></div>
</div>
<!-- Preloader Ends -->
<!-- Live Style Switcher Starts - demo only -->
<div id="switcher" class="">
    <div class="content-switcher">
        <h4>OUR SOCIAL MEDIA SITES</h4>
                <p>WHATS APP</p>

        <hr />
        <p>FACEBOOK</p>
                <a class="facebook" href="https://www.facebook.com/otelmaltd/" title="facebook" target="_blank"><i class="fa fa-facebook-official"></i></a>
                <hr />
        <div id="hideSwitcher">&times;</div>

    </div>
</div>
<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-whatsapp fa-spin"></i></div>
<!-- Live Style Switcher Ends - demo only -->
<!-- Page Wrapper Starts -->
<div class="wrapper">
    <!-- Header Starts -->
    <header class="header">
        <div class="header-inner">
            <!-- Navbar Starts -->
            <nav class="navbar">
                <!-- Logo Starts -->
                <div class="logo">
                    <a data-toggle="collapse" data-target=".navbar-collapse.show" class="navbar-brand" href="{{url('/')}}">
                        <!-- Logo White Starts -->
                        <img id="logo-light" class="logo-light" src="{{asset('images/frontend_images/styleswitcher/logos/logos-dark/yellow.png')}}" alt="logo-light" />
                        <!-- Logo White Ends -->
                        <!-- Logo Black Starts -->
                        <img id="logo-dark" class="logo-dark" src="{{asset('images/frontend_images/styleswitcher/logos/logos-dark/yellow.png')}}" alt="logo-dark" />
                        <!-- Logo Black Ends -->
                    </a>
                </div>
                <!-- Logo Ends -->
                <!-- Toggle Icon for Mobile Starts -->
                <button class="navbar-toggle navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span id="icon-toggler">
						  <span></span>
						  <span></span>
						  <span></span>
						  <span></span>
						</span>
                </button>
                <!-- Toggle Icon for Mobile Ends -->
                <div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
                    <!-- Main Menu Starts -->
                    <ul class="nav navbar-nav" id="main-navigation">
                        <li class="active"><a href="{{url('/')}}"><i class="fa fa-home"></i> HOME</a></li>
                        <li><a href="{{url('/about')}}"><i class="fa fa-user"></i> ABOUT US</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-image"></i> SERVICES <i class="fa fa-angle-down icon-angle"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="portfolio-2-columns.html">Portfolio 2 Columns</a></li>
                                <li><a href="portfolio-3-columns.html">Portfolio 3 Columns</a></li>
                                <li><a href="portfolio-4-columns.html">Portfolio 4 Columns</a></li>
                                <li><a href="image-project.html">Image Project</a></li>
                                <li><a href="slider-project.html">Slider Project</a></li>
                                <li><a href="gallery-project.html">Gallery Project</a></li>
                                <li><a href="video-project.html">Video project</a></li>
                                <li><a href="youtube-project.html">youtube Project</a></li>
                                <li><a href="vimeo-project.html">Vimeo Project</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-edit"></i> PORTFOLIO <i class="fa fa-angle-down icon-angle"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                <li><a href="blog-grid-no-sidebar.html">Grid No Sidebar</a></li>
                                <li><a href="blog-post.html">Single Post</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text-o"></i> PRICING <i class="fa fa-angle-down icon-angle"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="register.html">Register page</a></li>
                                <li><a href="login.html">Login page</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="shopping-cart.html">Shopping cart</a></li>
                                <li><a href="shopping-checkout.html">shopping checkout</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="503.html">Server Error Page</a></li>
                                <li><a href="faq.html">FAQ page</a></li>
                                <li><a href="terms-of-services.html">Terms of Services</a></li>
                            </ul>
                        </li>
                         <li><a href="{{url('/contact_us')}}"><i class="fa fa-envelope"></i> Contact</a></li>
                        @if (Route::has('login'))
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle-o"></i> MY ACCOUNT <i class="fa fa-angle-down icon-angle"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                    @auth
                                        <li><a href="{{ url('/home') }}">Home</a></li>
                                    @else
                                    <li><a href="{{ route('login') }}">Login</a></li>

                                        @if (Route::has('register'))
                                        <li> <a href="{{ route('register') }}">Register</a></li>
                                        @endif
                                    @endauth
                            </ul>
                        </li>
                    @endif
                        <!-- Cart Icon Starts -->
                        <li class="cart hidden-xs hidden-sm"><a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i></a></li>
                        <!-- Cart Icon Starts -->
                        <!-- Search Icon Starts -->
                        <li class="search hidden-xs hidden-sm"><button id="search-button" class="fa fa-search"></button></li>
                        <!-- Search Icon Ends -->
                    </ul>
                    <!-- Main Menu Ends -->
                </div>
                <!-- Search Input Starts -->
                <div class="site-search hidden-xs">
                    <div class="search-container">
                        <input id="search-input" type="text" placeholder="type your keyword and hit enter ...">
                        <span class="close">×</span>
                    </div>
                </div>
                <!-- Search Input Ends -->
                <!-- Navigation Menu Ends -->
            </nav>
            <!-- Navbar Ends -->
        </div>
    </header>
