@extends('layouts.master')

@section('title', 'Coming Soon - Writell')

@section('content')

<section class="vh-100 d-flex align-items-center">
    <div class="container py-md-8 position-relative zindex-100">
        <div class="col px-0">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h6 class=" font-weight-light text-uppercase ls-2">We're just tuning up a few things.
                    </h6>
                    <img alt="Image placeholder" src=/img/brand/biglogo.svg class="w-50 mb-2 ml-4">
                    <p class="px-md-5  mb-5">We apologize for the inconvenience but Writell is currently
                        undergoing planned maintenance. Stay tuned!

                    </p>
                    <!-- Countdown -->
                    <div class="js-countdown row mb-5" data-hs-countdown-options='{
                "endDate": "2020/12/30"
              }'>
                        <div class="col-3">
                            <span class="js-cd-days font-size-3 text-primary font-weight-bold mb-0"></span>
                            <span class="h5 d-block mb-0">Days</span>
                        </div>
                        <div class="col-3">
                            <span class="js-cd-hours font-size-3 text-primary font-weight-bold mb-0"></span>
                            <span class="h5 d-block mb-0">Hours</span>
                        </div>
                        <div class="col-3">
                            <span class="js-cd-minutes font-size-3 text-primary font-weight-bold mb-0"></span>
                            <span class="h5 d-block mb-0">Mins</span>
                        </div>
                        <div class="col-3">
                            <span class="js-cd-seconds font-size-3 text-primary font-weight-bold mb-0"></span>
                            <span class="h5 d-block mb-0">Secs</span>
                        </div>
                    </div>
                    <!-- End Countdown -->

                    <!-- Input -->
                    <form class="js-validate js-form-message">
                        <label class="sr-only" for="subscribeSrEmail">Your email</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="name" id="subscribeSrEmail"
                                placeholder="Your email" aria-label="Your email" aria-describedby="subscribeEmailButton"
                                required data-msg="Please enter a valid email address.">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary"
                                    id="subscribeEmailButton">Subscribe</button>
                            </div>
                        </div>
                    </form>
                    <!-- End Input -->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('extra-js')

@endsection