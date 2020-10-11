@extends('layouts.master')

@section('title', 'Writell - Blogging Made Fun')

@section('extra-css')
<style>

</style>
@endsection

@section('content')

<section class="pb-5 delimiter-bottom">
    <div class="row pb-4 mt-n4">
        <div class="mx-auto">
            <div class=" d-block d-lg-none">
                <ul class="nav nav-segment nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active py-2 px-3" id="feed-tab" data-toggle="pill" href="#feed" role="tab"
                            aria-controls="feed" aria-selected="true">BLOGS FEED</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link py-2" id="competition-tab" data-toggle="pill" href="#competition" role="tab"
                            aria-controls="competition" aria-selected="false">COMPETITION</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container pb-4">
        <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <ul class="nav justify-content-between mb-2">
                    <li class=nav-item>
                        <a class="nav-link font-weight-bolder" href=#><i class="fas fa-coffee mr-2"></i>What's Hot</a>
                    </li>
                    <li class=nav-item>
                        <a class="nav-link font-weight-bolder" href=#>View More</a>
                    </li>
                </ul>

                <div class="row">
                    <div class="col-lg-8">
                        <div class="card bg-cover bg-size--cover"
                            style="background-image:url(/img/theme/light/img-v-2.jpg)"><span
                                class="mask bg-dark opacity-3"></span>
                            <div class="card-body py-9 mt-auto position-relative">
                                <div class="top-0 right-0 position-absolute p-3"><button
                                        class="btn btn-neutral py-0 px-2"><i
                                            class="fa fa-fire mr-2 fa-xs text-primary"></i><span
                                            class="text-xs text-primary font-weight-bolder">36</span></button>
                                </div>
                            </div>
                            <div class="card-body px-3 pb-3 position-relative">
                                <div class="align-items-center">
                                    <p class="my-0 text-xs opacity-8 font-weight-bolder">13th July, 2020</p>
                                    <a href="#" class="my-0 d-block h5 font-weight-bolder stretched-link">How to start a
                                        business, Part-3
                                    </a>
                                    <a href="#" class="h6 text-xs">Dipesh Bhattarai
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card bg-cover bg-size--cover"
                            style="background-image:url(/img/theme/light/img-v-1.jpg)"><span
                                class="mask bg-dark opacity-3"></span>
                            <div class="card-body pt-5 mt-auto position-relative">
                                <div class="top-0 right-0 position-absolute p-3"><button
                                        class="btn btn-neutral py-0 px-2"><i
                                            class="fa fa-fire mr-2 fa-xs text-primary"></i><span
                                            class="text-xs text-primary font-weight-bolder">24</span></button>
                                </div>
                            </div>
                            <div class="card-body px-3 pb-2 position-relative">
                                <div class="align-items-center">
                                    <p class="my-0 text-xs opacity-8 font-weight-bolder">13th July, 2020</p>
                                    <a href="#" class="my-0 d-block h5 font-weight-bolder stretched-link">Secret of ART
                                    </a>
                                    <a href="#" class="h6 text-xs">Dipesh Bhattarai
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-cover bg-size--cover"
                            style="background-image:url(/img/theme/light/img-v-3.jfif)"><span
                                class="mask bg-dark opacity-3"></span>
                            <div class="card-body pt-5 mt-auto position-relative">
                                <div class="top-0 right-0 position-absolute p-3"><button
                                        class="btn btn-neutral py-0 px-2"><i
                                            class="fa fa-fire mr-2 fa-xs text-primary"></i><span
                                            class="text-xs text-primary font-weight-bolder">36</span></button>
                                </div>
                            </div>
                            <div class="card-body px-3 pb-2 position-relative">
                                <div class="align-items-center">
                                    <p class="my-0 text-xs opacity-8 font-weight-bolder">13th July, 2020</p>
                                    <a href="#" class="my-0 d-block h5 font-weight-bolder stretched-link">Billionaire
                                        Secrets
                                    </a>
                                    <a href="#" class="h6 text-xs">Dipesh Bhattarai
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--
                {{-- Carousel for Mobile Devices --}}
                <div class="swiper-container d-block d-lg-none">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">Slide 1</div>
                        <div class="swiper-slide">Slide 2</div>
                        <div class="swiper-slide">Slide 3</div>
                    </div>
                </div>
                {{-- Carousel for Mobile Devices End --}}
            -->

            </div>
            <div class=col-lg-4>
                <ul class="nav justify-content-between mb-3">
                    <li class=nav-item>
                        <a class="nav-link font-weight-bolder" href=#><i class="fa fa-medal mr-2"></i>Editor's
                            Choice</a>
                    </li>
                    <li class=nav-item>
                        <a class="nav-link font-weight-bolder " href=#>View More</a>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-12 mb-4">
                        <div class="media d-block justify-content-between">
                            <div>
                                <div class="avatar-parent-child float-right"><img alt=""
                                        src="/img/theme/light/img-v-0.jpg" class="avatar"></div>
                            </div>
                            <div class="media-body ml-4">
                                <small class="d-block text-muted text-xs">31st Dec, 2019</small>
                                <a href="#" class="h6 mb-0 font-weight-bolder stretched-link">The Beauty of Nature,
                                    Part-1</a>
                                <small class="d-block text-muted text-xs">Elon Musk</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="media d-block justify-content-between">
                            <div>
                                <div class="avatar-parent-child float-right"><img alt=""
                                        src="/img/theme/light/img-v-11.jpg" class="avatar"></div>
                            </div>
                            <div class="media-body ml-4">
                                <small class="d-block text-muted text-xs">31st Dec, 2019</small>
                                <a href="#" class="h6 mb-0 font-weight-bolder stretched-link">The Beauty of Nature,
                                    Part-2</a>
                                <small class="d-block text-muted text-xs">Elon Musk</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="media d-block justify-content-between">
                            <div>
                                <div class="avatar-parent-child float-right"><img alt=""
                                        src="/img/theme/light/img-v-2.jpg" class="avatar"></div>
                            </div>
                            <div class="media-body ml-4">
                                <small class="d-block text-muted text-xs">31st Dec, 2019</small>
                                <a href="#" class="h6 mb-0 font-weight-bolder stretched-link">The Beauty of Nature,
                                    Part-3</a>
                                <small class="d-block text-muted text-xs">Elon Musk</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-4">
                        <div class="media d-block justify-content-between">
                            <div>
                                <div class="avatar-parent-child float-right"><img alt=""
                                        src="/img/theme/light/img-v-7.jpg" class="avatar"></div>
                            </div>
                            <div class="media-body ml-4">
                                <small class="d-block text-muted text-xs">31st Dec, 2019</small>
                                <a href="#" class="h6 mb-0 font-weight-bolder stretched-link">The Beauty of Nature,
                                    Part-4</a>
                                <small class="d-block text-muted text-xs">Elon Musk</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-3">
        <div class="row">
            <div class=col-lg-12>
                <ul class="nav justify-content-between mb-2">
                    <li class=nav-item>
                        <i class="fa fa-bolt fa-lg mr-2 text-primary"></i>
                        <a class="h5 text-primary font-weight-bolder" href=#>Word of the Day</a><br><span
                            class="text-primary ml-4 h6 text-underline--dashed">Agriculture</span>
                    </li>
                    <li class=nav-item>
                        <a class="nav-link font-weight-bolder " href=#>View More</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 py-2 px-0">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide col-12 col-lg-3 mr-0">
                            <div class="card bg-cover bg-size--cover"
                                style="background-image:url(/img/theme/light/img-v-3.jfif)"><span
                                    class="mask bg-dark opacity-3"></span>
                                <div class="card-body pt-6 mt-auto position-relative">
                                    <div class="top-0 right-0 position-absolute p-3"><button
                                            class="btn btn-neutral py-0 px-2"><i
                                                class="fa fa-fire mr-2 fa-xs text-primary"></i><span
                                                class="text-xs text-primary font-weight-bolder">36</span></button>
                                    </div>
                                </div>
                                <div class="card-body px-3 pb-2 position-relative">
                                    <div class="align-items-center">
                                        <p class="my-0 text-xs opacity-8 font-weight-bolder">13th July, 2020</p>
                                        <a href="#"
                                            class="my-0 d-block h5 font-weight-bolder stretched-link">Billionaire
                                            Secrets
                                        </a>
                                        <a href="#" class="h6 text-xs">Dipesh Bhattarai
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide col-12 col-lg-3 mr-0">
                            <div class="card bg-cover bg-size--cover"
                                style="background-image:url(/img/theme/light/img-v-3.jfif)"><span
                                    class="mask bg-dark opacity-3"></span>
                                <div class="card-body pt-6 mt-auto position-relative">
                                    <div class="top-0 right-0 position-absolute p-3"><button
                                            class="btn btn-neutral py-0 px-2"><i
                                                class="fa fa-fire mr-2 fa-xs text-primary"></i><span
                                                class="text-xs text-primary font-weight-bolder">36</span></button>
                                    </div>
                                </div>
                                <div class="card-body px-3 pb-2 position-relative">
                                    <div class="align-items-center">
                                        <p class="my-0 text-xs opacity-8 font-weight-bolder">13th July, 2020</p>
                                        <a href="#"
                                            class="my-0 d-block h5 font-weight-bolder stretched-link">Billionaire
                                            Secrets
                                        </a>
                                        <a href="#" class="h6 text-xs">Dipesh Bhattarai
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide col-12 col-lg-3 mr-0">
                            <div class="card bg-cover bg-size--cover"
                                style="background-image:url(/img/theme/light/img-v-2.jpg)"><span
                                    class="mask bg-dark opacity-3"></span>
                                <div class="card-body pt-6 mt-auto position-relative">
                                    <div class="top-0 right-0 position-absolute p-3"><button
                                            class="btn btn-neutral py-0 px-2"><i
                                                class="fa fa-fire mr-2 fa-xs text-primary"></i><span
                                                class="text-xs text-primary font-weight-bolder">36</span></button>
                                    </div>
                                </div>
                                <div class="card-body px-3 pb-2 position-relative">
                                    <div class="align-items-center">
                                        <p class="my-0 text-xs opacity-8 font-weight-bolder">13th July, 2020</p>
                                        <a href="#"
                                            class="my-0 d-block h5 font-weight-bolder stretched-link">Billionaire
                                            Secrets
                                        </a>
                                        <a href="#" class="h6 text-xs">Dipesh Bhattarai
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide col-12 col-lg-3 mr-0">
                            <div class="card bg-cover bg-size--cover"
                                style="background-image:url(/img/theme/light/img-v-7.jpg)"><span
                                    class="mask bg-dark opacity-3"></span>
                                <div class="card-body pt-6 mt-auto position-relative">
                                    <div class="top-0 right-0 position-absolute p-3"><button
                                            class="btn btn-neutral py-0 px-2"><i
                                                class="fa fa-fire mr-2 fa-xs text-primary"></i><span
                                                class="text-xs text-primary font-weight-bolder">36</span></button>
                                    </div>
                                </div>
                                <div class="card-body px-3 pb-2 position-relative">
                                    <div class="align-items-center">
                                        <p class="my-0 text-xs opacity-8 font-weight-bolder">13th July, 2020</p>
                                        <a href="#"
                                            class="my-0 d-block h5 font-weight-bolder stretched-link">Billionaire
                                            Secrets
                                        </a>
                                        <a href="#" class="h6 text-xs">Dipesh Bhattarai
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide col-12 col-lg-3 mr-0">
                            <div class="card bg-cover bg-size--cover"
                                style="background-image:url(/img/theme/light/img-v-0.jpg)"><span
                                    class="mask bg-dark opacity-3"></span>
                                <div class="card-body pt-6 mt-auto position-relative">
                                    <div class="top-0 right-0 position-absolute p-3"><button
                                            class="btn btn-neutral py-0 px-2"><i
                                                class="fa fa-fire mr-2 fa-xs text-primary"></i><span
                                                class="text-xs text-primary font-weight-bolder">36</span></button>
                                    </div>
                                </div>
                                <div class="card-body px-3 pb-2 position-relative">
                                    <div class="align-items-center">
                                        <p class="my-0 text-xs opacity-8 font-weight-bolder">13th July, 2020</p>
                                        <a href="#"
                                            class="my-0 d-block h5 font-weight-bolder stretched-link">Billionaire
                                            Secrets
                                        </a>
                                        <a href="#" class="h6 text-xs">Dipesh Bhattarai
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination position-relative pt-4"></div>
                </div>
            </div>
        </div>
    </div>
    <a href="#sct-topics" style="background-image: none" class="tongue tongue-bottom tongue-section-primary scroll-me">
        <i class="fa fa-angle-down"></i>
    </a>
</section>

<section class="slice slice-lg pt-5" id="sct-topics">
    <div class="container container-lg">
        <div class="row row-grid align-items-center">
            <div class="col-12 col-lg-5">
                <h6 class="">Creativity Awaits</h6>
                <h1 class="font-weight-normal cd-headline clip clip-dark big-clip is-full-width">
                    <span class="pt-0">Howdy, tell the world</span><br>
                    <span class="pt-0">your</span>
                    <span class="cd-words-wrapper pt-0 text-primary" style="width: 227.797px;">
                        <b class="is-visible">story</b>
                        <b class="is-hidden">thoughts</b>
                        <b class="is-hidden">ideas</b>
                        <b class="is-hidden">passion</b>
                    </span>
                </h1>
                <p class="lead text-muted">Get started now and show the world what creative talent and passion you
                    posses.</p>
                <div class="mt-5"><a href="#" class="btn btn-neutral">Explore </a>
                    <a href="{{ route('post.blog') }}" class="btn btn-neutral btn-icon d-inline-block"><span
                            class="btn-inner--text">Write a
                            Blog</span></a></div>
            </div>

            <div class="col-lg-6">
                <div class="position-relative pt-md-5 pr-md-5 pt-lg-5 pt-xl-7 pr-xl-5">
                    <div
                        class="card border-0 shadow-lg col-md-8 px-0 position-md-absolute top-md-0 right-md-n0 right-lg-n3 right-xl-n5 zindex-100">
                        <figure><img alt="" src="/img/theme/light/stat.jpg" class="card-img"></figure>
                        <div class="card-img-overlay d-flex">
                            <div class="text-center"><a href="https://www.youtube.com/watch?v=A9xi082ApCQ"
                                    class="btn btn-xs btn-dark btn-icon" data-fancybox=""><span
                                        class="btn-inner--text">Play video<i class="fa fa-play ml-2"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body pt-0 px-5">
                            <div class="row">
                                <div class="col-6 mt-2">
                                    <div class="card shadow-none floating-lg">
                                        <div class="px-4 py-5 text-center">
                                            <div class="h1 font-weight-bolder mb-0">
                                                <span class=counter data-from=0 data-to=50 data-speed=1000
                                                    data-refresh-interval=10>500</span>
                                                <span class="counter-extra ml-n2">+</span>
                                            </div>
                                            <h6 class="text-warning">Blogs Written</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 mt-2">
                                    <div class="card shadow-none floating-sm">
                                        <div class="px-4 py-5 text-center">
                                            <div class="h1 font-weight-bolder mb-0"><span
                                                    class="counter counting-finished"><i
                                                        class=" fa fa-mobile"></i></span></div>
                                            <h6 class="text-warning">Mobile Friendly</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-unstyled">
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-shape icon-primary icon-sm rounded-circle mr-3"><i
                                                    class="fas fa-user-friends"></i></div>
                                        </div>
                                        <div><span class="h6 mb-0">Perfect to showcase your creative talents to the
                                                world.</span></div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-shape icon-warning icon-sm rounded-circle mr-3"><i
                                                    class="fas fa-award"></i></div>
                                        </div>
                                        <div><span class="h6 mb-0">Compete with alike creative minds and win
                                                prizes.</span></div>
                                    </div>
                                </li>
                                <li class="py-2">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="icon icon-shape icon-success icon-sm rounded-circle mr-3"><i
                                                    class="fas fa-bolt"></i></div>
                                        </div>
                                        <div><span class="h6 mb-0">Quality assured and thoughtfully crafted blogs
                                                picked.</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card border-0 bg-transparent shadow-none">
                    <div class="card-body pb-3">
                        <div class="pt-4 pb-5"><img src="/img/svg/illustrations/illustration-2.svg"
                                class="img-fluid img-center" style="height:200px" alt="Illustration"></div>
                        <h5 class="h4 lh-130 mb-3">Expand your passion</h5>
                        <p class="text-muted mb-0">Explore new contents by other creative bloggers right here at Writell
                            and seek the passion you have.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 bg-transparent shadow-none mt-lg-5">
                    <div class="card-body pb-3">
                        <div class="pt-4 pb-5"><img src="/img/svg/illustrations/illustration-5.svg"
                                class="img-fluid img-center" style="height:200px" alt="Illustration"></div>
                        <h5 class="h4 lh-130 mb-3">Unleash the creativity</h5>
                        <p class="text-muted mb-0">Bring your writing skills upfront along with hundreds of creative
                            minds. It's time you win for what you have passion for.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 bg-transparent shadow-none mt-lg-7">
                    <div class="card-body pb-3">
                        <div class="pt-4 pb-5"><img src="/img/svg/illustrations/illustration-7.svg"
                                class="img-fluid img-center" style="height:200px" alt="Illustration"></div>
                        <h5 class="h4 lh-130 mb-3">Exhibit your talent</h5>
                        <p class="text-muted mb-0">You create. We deliver. Our experts make sure your art of writing
                            reaches the audience it deserves.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slice slice-lg">
    <div class="container">
        <div class="row row-grid justify-content-around align-items-center">
            <div class="col-lg-6">
                <img alt="Image placeholder" src="/img/svg/illustrations/illustration-10.svg" class="img-fluid">
            </div>
            <div class="col-lg-5">
                <h5 class="h3">Read within your comfort on <strong>any device</strong></h5>
                <p class="lead my-4">For readers, writers, and the insatiably curious like you. All on the go. Dive
                    deeper on all the things you love.</p>
                <ul class="list-unstyled mb-0">
                    <li class="py-2">
                        <div class="d-flex align-items-center">
                            <div>
                                <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3"><i
                                        class="fa fa-blog"></i></div>
                            </div>
                            <div><span class="h6 mb-0">Start browsing Writell any where, any time.</span></div>
                        </div>
                    </li>
                    <li class="py-2">
                        <div class="d-flex align-items-center">
                            <div>
                                <div class="icon icon-shape bg-primary text-white icon-sm rounded-circle mr-3"><i
                                        class="fas fa-mobile"></i></div>
                            </div>
                            <div><span class="h6 mb-0">Just a click away from reading the trends.</span></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="slice slice-xs pt-5">
    <div class="container">
        <div class="row mb-2 justify-content-center text-center">
            <div class="col-lg-8 col-md-10">
                <h2 class="mt-2">Let's make an impact to the society.. our society together. Let's get Started.</h2>
                <div class="mt-2">
                    <p class="lead lh-180">Thousands of creative minds has already joined us. It's time you win for
                        something good. </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            @guest
            <a href="{{ route('register') }}" class="btn btn-lg btn-primary btn-icon hover-translate-y-n10 mt-4"><span
                    class="btn-inner--text">Get Started</span><span class="btn-inner--icon"><i
                        class="fa fa-arrow-right"></i></span>
            </a>
            @else
            <a href="{{ route('dashboard') }}" class="btn btn-lg btn-primary btn-icon hover-translate-y-n10 mt-4"><span
                    class="btn-inner--text">Dashboard</span><span class="btn-inner--icon"><i
                        class="fa fa-arrow-right"></i></span>
            </a>
            @endguest
        </div>
    </div>
</section>
@endsection

@section('extra-js')
@endsection