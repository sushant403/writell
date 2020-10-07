<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name=description content="A Competitive Blogging Platform.">
    <meta name=author content="Burgeon Tech">
    <title>@yield('title', 'Writell - Blogging Made Fun')</title>

    <link rel=icon href="/img/brand/favicon.png" type=image/png> <link type=text/css
        href=/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.css rel=stylesheet>
    <link rel=stylesheet href=/libs/@fortawesome/fontawesome-free/css/all.min.css> <link rel=stylesheet
        href=/libs/swiper/dist/css/swiper.min.css> <link rel=stylesheet href=/css/writell-style-dark.css id="stylesheet">
    @yield('extra-css')
    @include('components.spinner')
</head>

<body>

    <div class="modal fade" tabindex=-1 role=dialog id=modal-cookies data-backdrop=false aria-labelledby=modal-cookies
        aria-hidden=true>
        <div class="modal-dialog modal-dialog-aside left-4 right-4 bottom-4">
            <div class="modal-content bg-dark-dark">
                <div class=modal-body>
                    <p class="text-sm text-white mb-3">We use cookies so that our services work for you. By using our
                        website,
                        you agree to our use of cookies.</p>
                    <a href="" class="btn btn-sm btn-white" target=_blank>Learn more</a>
                    <button type=button class="btn btn-sm btn-primary mr-2" data-dismiss=modal>OK</button>
                </div>
            </div>
        </div>
    </div>
    <header class=header-transparent id=header-main>
        <nav class="navbar navbar-main navbar-expand-lg navbar-dark bg-dark" id=navbar-main>
            <div class=container>
                <a class=navbar-brand href="{{ route('index') }}"> <img alt="" src=/img/brand/biglogo.svg
                        id=navbar-logo>
                </a>
                <button class=navbar-toggler type=button data-toggle=collapse data-target=#navbar-main-collapse
                    aria-controls=navbar-main-collapse aria-expanded=false aria-label="Toggle navigation">
                    <span class=navbar-toggler-icon></span>
                </button>
                <div class="collapse navbar-collapse navbar-collapse-overlay" id=navbar-main-collapse>
                    <div class=position-relative>
                        <button class=navbar-toggler type=button data-toggle=collapse data-target=#navbar-main-collapse
                            aria-controls=navbar-main-collapse aria-expanded=false aria-label="Toggle navigation">
                            <i class="fa fa-x"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>

                    </div>
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item nav-item-spaced d-none d-lg-block">
                            <!-- Nav -->
                            <ul class="nav nav-segment nav-pills" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active py-2 px-3" id="feed-tab" data-toggle="pill" href="#feed"
                                        role="tab" aria-controls="feed" aria-selected="true">BLOGS FEED</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link py-2" id="competition-tab" data-toggle="pill" href="#competition"
                                        role="tab" aria-controls="competition" aria-selected="false">COMPETITION</a>
                                </li>
                            </ul>
                            <!-- End Nav -->
                        </li>

                        <li class="nav-item nav-item-spaced dropdown bg-primary dropdown-animate d-block d-lg-none"
                            data-toggle=hover>
                            Test
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-lg-center d-none d-lg-flex ml-lg-auto">
                        <li class=nav-item>
                            <button type=button id=btnSwitchMode data-mode=dark
                                class="btn btn-neutral btn-sm hover-scale-105 shadow-lg">
                                <i class="fas fa-moon mr-2"></i>Toggle Dark
                            </button>
                        </li>
                        <li class=nav-item>
                            <a class=nav-link href="">Leaderboard</a>
                        </li>
                        <li class=nav-item>
                            <a class=nav-link href="">About</a>
                        </li>
                        <li class=nav-item>
                            <a href=# data-action=omnisearch-open data-target=#omnisearch
                                class="nav-link nav-link-icon px-2">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        @guest
                        <li class=nav-item>
                            <a href="{{ route('login') }}" class="btn btn-sm btn-primary btn-icon ml-3">
                                <span class="btn-inner--text mx-2">Sign in</span>
                            </a>
                        </li>
                        @else
                        <li class="nav-item dropdown dropdown-animate ml-2">
                            <a class="nav-link nav-link-icon px-2" href=# role=button data-toggle=dropdown
                                aria-haspopup=true aria-expanded=false>
                                <i class="fa fa-cog"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right dropdown-menu-arrow p-3">
                                <h6 class="dropdown-header px-0 mb-2 text-primary">Hi, {{ Auth::user()->name }}!</h6>
                                <a href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')"
                                    class=dropdown-item>
                                    <i class="fa fa-user fa-xs"></i>
                                    <span>My profile</span>
                                </a>
                                <a href="{{ route('dashboard') }}" class=dropdown-item>
                                    <i class="fa fa-blog fa-xs"></i>
                                    <span>Dashboard</span>
                                </a>
                                <div class=dropdown-divider></div>
                                <a href="" class=dropdown-item>
                                    <i class="fa fa-cog fa-xs"></i>
                                    <span>Settings</span>
                                </a>
                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit();" class=dropdown-item>
                                        <i class="fa fa-sign-out-alt fa-xs"></i>
                                        <span>Logout</span>
                                    </a>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="order-lg-4">
                                <a href="#modal-profile" role="button" data-toggle="modal">
                                    <span class="avatar rounded-circle">
                                        <img alt="" style="width: auto; height:3rem"
                                            src="/img/theme/light/person-auth.jpg">
                                    </span>
                                </a>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </header> @yield('content')
    @include('components.search') @auth
    @include('components.sidebar-userprofile') @endauth <footer class="position-relative" id=footer-main>
        <div class="footer pt-lg-7 footer-dark bg-dark">
            <div class="shape-container shape-line shape-position-top shape-orientation-inverse">
                <svg width=2560px height=100px xmlns=http://www.w3.org/2000/svg xmlns:xlink=http://www.w3.org/1999/xlink
                    preserveAspectRatio=none x=0px y=0px viewBox="0 0 2560 100"
                    style="enable-background:new 0 0 2560 100" xml:space=preserve class=fill-section-secondary>
                    <polygon points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
            <div class="container pt-4">
                <div class="row justify-content-center">
                    <div class=col-lg-12>
                        <div class="row align-items-center">
                            <div class=col-lg-7>
                                <h3 class="text-secondary mb-2">Make blogging, your
                                    thing.</h3>
                                <p class="lead mb-0 text-white opacity-8">Write Awesome
                                    Blogs. Compete. Win Prizes.</p>
                            </div>
                            <div class="col-lg-5 text-lg-right mt-4 mt-lg-0">
                                <a href="" class="btn btn-white btn-icon my-2">
                                    <span class=btn-inner--text>Learn More</span>
                                </a>
                                @guest
                                <a href=" {{ route('register') }}" class="btn btn-primary my-2 ml-0 ml-sm-3">Register
                                </a>
                                @else
                                <a href=" {{ route('dashboard') }}" class="btn btn-primary my-2 ml-0 ml-sm-3">Dashboard
                                </a>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="divider divider-fade divider-dark my-5">
                <div class=row>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <a href="{{ route('index') }}"> <img alt="" src="/img/brand/biglogo.svg" id=footer-logo>
                        </a>
                        <p class="mt-2 text-sm opacity-8 pr-lg-4">A Competitive Blogging
                            Platform where blogging is more
                            fun than ever. Learn and Earn within your passion of
                            writing.</p>
                        <ul class="nav mt-4">
                            <li class=nav-item>
                                <a class="nav-link pl-0" href="" target=_blank>
                                    <i class="fab fa-dribbble"></i>
                                </a>
                            </li>
                            <li class=nav-item>
                                <a class=nav-link href="" target=_blank>
                                    <i class="fab fa-github"></i>
                                </a>
                            </li>
                            <li class=nav-item>
                                <a class=nav-link href="" target=_blank>
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class=nav-item>
                                <a class=nav-link href="" target=_blank>
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Account</h6>
                        <ul class=list-unstyled>
                            <li>
                                <a href=#>Profile</a>
                            </li>
                            <li>
                                <a href=#>Settings</a>
                            </li>
                            <li>
                                <a href=#>Billing</a>
                            </li>
                            <li>
                                <a href=#>Notifications</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">About</h6>
                        <ul class=list-unstyled>
                            <li>
                                <a href=#>Services</a>
                            </li>
                            <li>
                                <a href=#>Pricing</a>
                            </li>
                            <li>
                                <a href=#>Contact</a>
                            </li>
                            <li>
                                <a href=#>Careers</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
                        <h6 class="heading mb-3">Company</h6>
                        <ul class=list-unstyled>
                            <li>
                                <a href=#>Community</a>
                            </li>
                            <li>
                                <a href=#>Help center</a>
                            </li>
                            <li>
                                <a href=#>Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="divider divider-fade divider-dark my-4">
                <div class="row align-items-center justify-content-md-between pb-4">
                    <div class=col-md-6>
                        <div class="copyright text-sm font-weight-bold text-center text-md-left">
                            &copy;2020 <a href=https://burgeontech.com class=font-weight-bold target=_blank>Burgeon
                                Tech</a>
                            . All rights reserved
                        </div>
                    </div>
                    <div class=col-md-6>
                        <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                            <li class=nav-item>
                                <a class=nav-link href=#>Terms</a>
                            </li>
                            <li class=nav-item>
                                <a class=nav-link href=#>Privacy</a>
                            </li>
                            <li class=nav-item>
                                <a class=nav-link href=#>Cookies</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src=/libs/jquery/dist/jquery.min.js> </script> <script src=/libs/bootstrap/dist/js/bootstrap.bundle.min.js>
        </script> <script src=/libs/@fancyapps/fancybox/dist/jquery.fancybox.min.js> </script> <script
        src=/libs/in-view/dist/in-view.min.js> </script> <script src=/libs/swiper/dist/js/swiper.min.js> </script>
        <script src=/js/writell-script.js> </script> <!-- Initialize Swiper -->
        <script>
        var swiper = new Swiper('.swiper-container', {
                                            slidesPerView: 'auto',
                                            spaceBetween: 0,
                                            pagination: {
                                                el: '.swiper-pagination',
                                                clickable: true,
                                            },
                                            });
    </script>

    @yield('extra-js')

</body>

</html>