@php use Illuminate\Support\Facades\Storage;use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@extends("frontend.layouts.app")

@section("title")
    جامعة الهادي |  {{ $category->{'name_'.LaravelLocalization::getCurrentLocale()} }}
@endsection

@section("content")

    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover"
             style="background-image: url({{ asset("assets/images/campus-2-2.jpg") }});">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title"> {{ $category->{'name_'.LaravelLocalization::getCurrentLocale() } }}</h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Blog Details Start ======-->

    <section class="blog-details-page">
        <div class="container">

            <div class="courses-wrapper">
                <div class="row">

                    @foreach($libraries as $library)
                        <div class="col-lg-3 col-sm-6 courses-col">
                            <div class="single-courses-2 mt-30">
                                <div class="courses-image">
                                    <a href="{{ asset(Storage::url('uploads/libraries/' . $library->file)) }}"
                                       target="_blank"><img
                                            src="{{ asset('assets/images/logo.webp') }}"
                                            width="270" height="170" alt="courses"></a>
                                </div>
                                <div class="courses-content">
                                    <a href="#" class="category"> {{ $library->{'specialization_name_'.LaravelLocalization::getCurrentLocale()} }} </a>
                                    <h4 class="courses-title"><a href="#"> {{ $library->{'name_'.LaravelLocalization::getCurrentLocale()} }} </a></h4>
                                    <div class="duration-rating">
                                        <div class="duration-fee">
                                            <p class="duration"><span> {{ $library->published_at->format("Y") }} </span>
                                                سنه النشر </p>
                                        </div>
                                    </div>
                                    <div class="courses-link">
                                        <a class="apply" href="#">مهلومات اكثر</a>
                                        <a class="more" href="#">شاهد اكثر<i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!--====== Blog Details Ends ======-->
@endsection
