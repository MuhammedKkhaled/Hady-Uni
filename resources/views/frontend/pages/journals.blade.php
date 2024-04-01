@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@extends("frontend.layouts.app")

@section("title" , "جامعة الهادي | مجلة البحث الصحي")

@section('content')

    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover"
             style="background-image: url({{ asset("assets/images/campus-2-2.jpg") }});">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">{{ __('custom.frontend.journals') }}</h2>
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
                    <div class=" courses-col">

                        <div class="single-courses-2 courses-list mt-30">
                            <div class="courses-image">
                                <a href="#"><img src="{{ asset('assets/images/logo.webp') }}"
                                                 width="320" height="300" alt="courses"></a>
                            </div>
                            <div class="courses-content">

                                <div class="courses-content-wrapper" style=" max-width:100%">
                                    @if(!isset($journal->{"name_".LaravelLocalization::getCurrentLocale() }))
                                        <h4 class="courses-title"><a href="">
                                                لا يوجد بحث حتي الان
                                            </a></h4>

                                    @else
                                        <h4 class="courses-title"><a href="">
                                                {{ $journal->{"name_".LaravelLocalization::getCurrentLocale()} }}
                                            </a></h4>
                                    @endif
                                    <div class="duration-rating">
                                        <div class="duration-fee">
                                            <p class="duration"> التاريخ: <span>
                                                {{  $journal->published_at->format("Y-M") ?? "لا يوجد تاريخ" }}
                                                </span></p>
                                        </div>
                                    </div>
                                    <div class="courses-link">
                                        <a class="apply" href="#"></a>
                                        <a class="more"
                                           href="{{ asset(Storage::url('uploads/journals/' . $journal->file)) }}"
                                           target="_blank">عرض <i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Blog Details Ends ======-->
@endsection
