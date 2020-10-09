@extends('layouts.errormaster')

@section('title', 'Page Not Found - Writell')


@section('content')

<!-- 404 Page -->
<section>
    <div class="container d-flex flex-column justify-content-center pt-5 mt-n6 vh-100" style="flex: 1 0 auto;">
        <div class="pt-3 pb-5">
            <div class="text-center mb-2 pb-4">
                <h1 class="mb-grid-gutter"><img class="d-inline-block pt-4" width="200" src="/img/theme/404.svg"
                        alt="" /><span class="sr-only">Error 404</span><span
                        class="d-block pt-3 font-size-xs font-weight-semibold text-danger" style="font-size: 14px">Error
                        code: 404</span>
                </h1>
                <h3>Page not found!</h3>
                <p class="pb-2">It seems we can’t find the page you are looking for.</p><a class="btn btn-primary mr-3"
                    href="{{ url('/') }}">Go to homepage</a><span>or try searching</span>
            </div>
            <div class="form-group-overlay mx-auto" style="max-width: 450px;">
                <form class="d-flex align-items-center">
                    <label class="sr-only" for="search">Search Blogs</label>
                    <div class="d-inline-block w-75 mr-2">
                        <input type="text" class="form-control" name="text" id="search" placeholder="Search Blogs"
                            aria-label="Search for apps">
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <span class="fas fa-search"></span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End 404 Page -->

@endsection