@extends("frontend.layouts.app")

@section("title" )

    {{ __('custom.frontend.Head Teacher Word') }}

@stop

@section("content")
    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url({{ asset("assets/images/campus-2-2.jpg") }});">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">{{ __("custom.frontend.Head Teacher Word") }}</h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Contact Start ======-->

    <section class="contact-area">
        <div class="container">
            <div class="contact-form" style="padding-top: 20px;">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-title text-center">
                            <h3 class="title">{{ __("custom.frontend.Head Teacher Word") }}</h3>
                            <p style="text-align: end;">
                                {{ __("custom.frontend.The Word") }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Contact Ends ======-->

@endsection
