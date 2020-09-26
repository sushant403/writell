@extends('layouts.master')

@section('title', 'Writell - Blogging Made Fun')

@section('extra-css')
<style>

</style>
@endsection

@section('content')
<section class="pt-4">
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
</section>
<section class="slice py-5 bg-section-secondary">
    <div class="container masonry-container">
        <div class="mt-4 text-center">
            <a href=# class="btn btn-neutral hover-translate-y-n3">Explore</a>
            <a href="{{ url('post-blog') }}" class="btn btn-neutral hover-translate-y-n3">Write a Blog</a>
        </div>
    </div>
</section>

@endsection

@section('extra-js')
@endsection