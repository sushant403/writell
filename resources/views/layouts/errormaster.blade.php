<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name=description content="A Competitive Blogging Platform.">
    <meta name=author content="Burgeon Tech">
    <title>@yield('title', 'Writell - Blogging Made Fun')</title>

    <link rel=icon href="/img/brand/favicon.png" type=image/png> <link rel=stylesheet
        href=/libs/@fortawesome/fontawesome-free/css/all.min.css> <link rel=stylesheet href=/css/writell-style.css>
        <link rel=stylesheet href=/css/writell-style-dark.css id="stylesheet">

</head>

<body>
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
                    </ul>
                    <ul class="navbar-nav align-items-lg-center d-none d-lg-flex ml-lg-auto">

                        <li class=nav-item>
                            <a class=nav-link href="">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header> @yield('content')
    <footer class="position-relative" id=footer-main>
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

    <script src="/libs/jquery/dist/jquery.min.js"> </script>
    <script src="/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/writell-script.js"> </script>
</body>

</html>