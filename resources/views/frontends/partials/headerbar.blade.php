<!-- Header Start -->
    <header class="site-header">
        <!--Navbar Start  -->
        <div class="header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <!-- Sit Logo Start -->
                        <div class="site-branding">
                            <a href="{{url('/')}}" title="Shivka">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a>
                        </div>
                        <!-- Sit Logo End -->
                    </div>
                    <div class="col-lg-10">
                        <div class="header-menu">
                            <nav class="main-navigation one">
                                <button class="toggle-button">
                                    <svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="60">
                                        <path class="line-ham top" d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
                                        <path class="line-ham middle" d="m 30,50 h 40" />
                                        <path class="line-ham bottom" d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
                                    </svg>
                                </button>
                                <div class="mobile-menu-box">
                                    <i class="menu-background one top"></i>
                                    <i class="menu-background one middle"></i>
                                    <i class="menu-background one bottom"></i>
                                    <ul class="menu">
                                        <li class="sub-menu {{ request()->routeIs('/') ? 'active' : ''}}">
                                            <a href="{{route('/')}}" title="Home">Home</a>
                                        </li>
                                        <li class="sub-menu {{ request()->routeIs('aboutme') ? 'active' : '' }}">
                                            <a href="{{route('aboutme')}}" title="Classes">About Me</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                            <div class="black-shadow"></div>
                            <div class="header-btn">
                                <a href="contact-us.html" class="sec-btn">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Navbar End  -->
    </header>
<!-- Header End -->