@extends("frontend.layouts.app")

@section("title")
    جامعة الهادي |  {{ $sustainable->{'title_'.LaravelLocalization::getCurrentLocale()} }}
@endsection


@section('content')

    <!--====== Page Banner Start ======-->

    <section class="page-banner">

        <div class="page-banner-bg bg_cover" style="background-image: url({{ Storage::url("uploads/news/". $sustainable->image) }});">

            <div class="container">

                <div class="banner-content text-center">

                    <h2 class="title">
                        {{ $sustainable->{'title_'.LaravelLocalization::getCurrentLocale()} }}
                    </h2>
                </div>
            </div>
        </div>

    </section>
        <!--====== Contact Start ======-->

        <section class="contact-area">
            <div class="container">
                <div class="contact-form" style="padding-top: 0px;">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="contact-title text-center">
                                <h3 class="title">{{ __('custom.frontend.Topic') }}</h3>
                                <p style="text-align: end;">
                                    {{ $sustainable->{'content_' . LaravelLocalization::getCurrentLocale()} ?? ' ' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!--====== Contact Ends ======-->


    <!--====== Gallery Start ======-->

    <div class="gallery-page">
        <div class="container">

            <div class="contact-title text-center">
                <h3 class="title">{{ __('custom.The most important pictures') }}</h3>

            </div>
            @if ($galleries)
                <div class="row grid-masonry">
                    @foreach ($galleries as $gallery)

                            <div class="col-lg-4 col-sm-6 grid-item">
                                <div class="single-gallery mt-30">
                                    <a class="image-popup"
                                        href="{{ asset(Storage::url('uploads/newsgalleries/' . $gallery->image_1)) }}">
                                        <img src="{{ asset(Storage::url('uploads/newsgalleries/' . $gallery->image_1)) }}"
                                            alt="gallery">
                                    </a>
                                </div>
                            </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>

    <!--====== Gallery Ends ======-->

@endsection
