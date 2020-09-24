@extends('layouts.master')

@section('content')

<section class="pt-4">
    <div class="container pb-3">
        <div class="row">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <ul class="nav justify-content-between">
                    <li class=nav-item>
                        <a class="nav-link font-weight-bolder" href=#><i class="fas fa-coffee mr-2"></i>What's Hot</a>
                    </li>
                    <li class=nav-item>
                        <a class="nav-link font-weight-bolder" href=#>View More</a>
                    </li>
                </ul>
            </div>
            <div class=col-lg-5>
                <ul class="nav justify-content-between">
                    <li class=nav-item>
                        <a class="nav-link font-weight-bolder" href=#><i class="fa fa-medal mr-2"></i>Editor's
                            Choice</a>
                    </li>
                    <li class=nav-item>
                        <a class="nav-link font-weight-bolder " href=#>View More</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="slice pt-5 pb-7 bg-section-secondary">
    <div class="container masonry-container">
        <div class="mt-4 text-center">
            <a href=# class="btn btn-neutral hover-translate-y-n3">Load more</a>
        </div>
    </div>
</section>

@endsection