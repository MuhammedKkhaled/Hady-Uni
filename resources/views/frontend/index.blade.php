@php use Illuminate\Support\Facades\Storage;use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@extends('frontend.layouts.app')
@section('title' )

    {{ __("custom.frontend.title") }}

@endsection

@section('content')

    <!--====== Slider Start ======-->

    <!-- Not A main section  -->

    <section class="slider-area slider-02 slider-active">
        <div class="single-slider d-flex align-items-center bg_cover"
             style="background-image: url({{ asset("assets/images/slider-2-1.webp") }});">
            <div class="container">
                <div class="slider-content slider-content-2">
                    <h2 class="title" data-animation="fadeInLeft" data-delay="0.2s">
                        {{ __("custom.frontend.text title") }}
                    </h2>
                    <ul class="slider-btn">
                        <li><a data-animation="fadeInLeft" data-delay="0.6s" class="main-btn main-btn-2" href="#departments">
                                {{ __('custom.frontend.watch section') }}
                            </a></li>
                        <li><a data-animation="fadeInLeft" data-delay="1s" class="main-btn"
                               href="#moreinfo"> {{ __("custom.frontend.About") }}</a></li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="single-slider d-flex align-items-center bg_cover"
             style="background-image: url({{ asset("assets/images/slider-2-2.webp") }});">
            <div class="container">
                <div class="slider-content slider-content-2">
                    <h2 class="title" data-animation="fadeInLeft" data-delay="0.2s">
                        {{ __("custom.frontend.text title") }}
                    </h2>
                    <ul class="slider-btn">
                        <li><a data-animation="fadeInLeft" data-delay="0.6s" class="main-btn main-btn-2" href="#departments">
                                {{ __('custom.frontend.watch section') }}

                            </a></li>
                        <li><a data-animation="fadeInLeft" data-delay="1s" class="main-btn" href="#moreinfo">
                                {{ __("custom.frontend.About") }}
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="single-slider d-flex align-items-center bg_cover"
             style="background-image: url({{ asset("assets/images/slider-2-3.webp") }});">
            <div class="container">
                <div class="slider-content slider-content-2">
                    <h2 class="title" data-animation="fadeInLeft" data-delay="0.2s">
                        {{ __("custom.frontend.text title") }}

                    </h2>
                    <ul class="slider-btn">
                        <li><a data-animation="fadeInLeft" data-delay="0.6s" class="main-btn main-btn-2" href="#departments">
                                {{ __('custom.frontend.watch section') }}
                            </a></li>
                        <li><a data-animation="fadeInLeft" data-delay="1s" class="main-btn"
                               href="#moreinfo">{{ __("custom.frontend.About") }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--====== Slider Ends ======-->

    <!--====== About Start ======-->
    <!-- Not A main section  -->

    <section class="about-area" id="moreinfo">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-content mt-40">
                        <h2 class="about-title">{{ __("custom.frontend.ahaly") }}
                            <span>{{__("custom.frontend.country")}}</span></h2>
                        <span class="line"></span>
                        <p>
                            {{ __("custom.frontend.big text") }}
                        </p>
                        <a href="#" class="main-btn">{{ __("custom.frontend.more") }}</a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-image mt-50">
                        <div class="single-image image-1">
                            <img src="{{ asset("assets/images/about/about-1.png") }}" width="290" height="290"
                                 alt="about">
                        </div>
                        <div class="single-image image-2">
                            <img src="{{ asset("assets/images/about/about-2.png") }}" width="225" height="225"
                                 alt="about">
                        </div>
                        <div class="single-image image-3">
                            <img src="{{ asset("assets/images/about/about-3.png") }}" width="190" height="190"
                                 alt="about">
                        </div>
                        <div class="single-image image-4">
                            <img src="{{ asset("assets/images/about/about-4.png") }}" width="140" height="140"
                                 alt="about">
                        </div>

                        <div class="about-icon icon-1">
                            <img src="{{ asset("assets/images/about/icon/icon-1.webp") }}" width="46" height="46"
                                 alt="icon">
                        </div>
                        <div class="about-icon icon-2">
                            <img src="{{ asset("assets/images/about/icon/icon-2.webp") }}" width="46" height="46"
                                 alt="icon">
                        </div>
                        <div class="about-icon icon-3">
                            <img src="{{ asset("assets/images/about/icon/icon-3.webp") }}" width="46" height="46"
                                 alt="icon">
                        </div>
                        <div class="about-icon icon-4">
                            <img src="{{ asset("assets/images/about/icon/icon-4.webp") }}" width="46" height="46"
                                 alt="icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== About Ends ======-->


    <!--====== Campus Visit Start ======-->

    <section class="campus-visit-area" style="padding-left: 30px;padding-bottom: 30px; ">
        <div class="container">
            <div class="campus-visit-wrapper">
                <div class="campus-image-col">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pXyEvMIyFHY?si=WfyPfXujHgF-lo7K"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen=""></iframe>
                </div>
                <div class="campus-content-col" style="text-align: center;">
                    <div class="campus-content">
                        <h2 class="campus-title">{{ __("custom.frontend.six") }}</h2>
                        <span class="line"></span>
                        <p>{{ __("custom.frontend.we are here") }}</p>
                        <a class="play" href="https://www.youtube.com/@user-pj2ns3gy1v/videos"target="_blank"><i class="fas fa-play"></i>
                            <span> {{ __("custom.frontend.watch now") }}</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Campus Visit Ends ======-->

    <!--====== Blog Start ======-->
    @if ( count($news) > 0 )
        
    <section class="blog-area-2">
        <h4 class="trending-title"> {{ __("custom.frontend.Latest News") }}</h4>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-2">
                        <h2 class="title">{{ __("custom.frontend.Latest News") }}</h2>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="blog-wrapper">
                <div class="row-wrapper blog-active">
                    @foreach($news as $new)
                        <div class="custom-col">
                            <div class="single-blog mt-30">
                                <div class="blog-image">
                                    <a href="#">
                                        <img src="{{ Storage::url("uploads/news/". $new->image) }}" width="270"
                                             height="150" alt="blogsss">
                                    </a>
                                </div>
                                <div class="blog-content" style="text-align:end">
                                    <ul class="meta">
                                        <li><a href="#">{{ $new->created_at->format('D M Y')  }}</a></li>
                                        <!--<li><a href="#">By: {{ $new->author }}</a></li>-->
                                    </ul>
                                    <h4 class="blog-title"><a href="#"
                                                              style="text-align:end">
                                        {{ $new->{'title_'.LaravelLocalization::getCurrentLocale()} }}

                                        </a>
                                    </h4>
                                    <a href="#" class="more">مشاهده التفاصيل<i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif

    <!--====== Blog Ends ======-->
    <!--====== Features Start ======-->

    <div class="features-area-2 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="features-image-2">
                        <img class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s"
                             src="{{ asset("assets/images/features-2.webp") }}" width="342" height="524" alt="Features">
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="features-items">
                        <div class="features-items-wrapper">
                            <div class="single-features-item d-flex align-items-center wow fadeInUpBig"
                                 data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="item-icon">
                                    <img src="{{ asset("assets/images/icon/icon-2-1.webp") }}" width="70" height="70"
                                         alt="Icon">
                                </div>
                                <div class="item-content media-body" style="text-align: center;">
                                    <p> {{ count($departments)  }} <br>
                                    {{ __("custom.frontend.sections") }}
                                    </p>
                                </div>
                            </div>
                            <div class="single-features-item d-flex align-items-center wow fadeInUpBig"
                                 data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="item-icon">
                                    <img src="{{ asset("assets/images/icon/icon-2-2.webp") }}" width="70" height="70"
                                         alt="Icon">
                                </div>
                                <div class="item-content media-body" style="text-align: center;">
                                    <p>1000<br> {{ __("custom.frontend.graduated") }}</p>
                                </div>
                            </div>
                            <div class="single-features-item d-flex align-items-center wow fadeInUpBig"
                                 data-wow-duration="1s" data-wow-delay="0.6s">
                                <div class="item-icon">
                                    <img src="{{ asset("assets/images/icon/icon-2-3.webp") }}" width="70" height="70"
                                         alt="Icon">
                                </div>
                                <div class="item-content media-body" style="text-align: center;">
                                    <p> {{ __("custom.frontend.modern Learning") }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="features-items-wrapper">
                            <div class="single-features-item d-flex align-items-center wow fadeInUpBig"
                                 data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="item-icon">
                                    <img src="{{ asset("assets/images/icon/icon-2-4.webp") }}" width="70" height="70"
                                         alt="Icon">
                                </div>
                                <div class="item-content media-body" style="text-align: center;">
                                    <p>{{count($affiliates)}} <br> {{ __("custom.frontend.teacher") }}</p>
                                </div>
                            </div>
                            <div class="single-features-item d-flex align-items-center wow fadeInUpBig"
                                 data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="item-icon">
                                    <img src="{{ asset("assets/images/icon/icon-2-2.webp") }}" width="70" height="70"
                                         alt="Icon">
                                </div>
                                <div class="item-content media-body" style="text-align: center;">
                                    <p>8000 <br> {{ __("custom.frontend.student") }}</p>
                                </div>
                            </div>
                            <div class="single-features-item d-flex align-items-center wow fadeInUpBig"
                                 data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="item-icon">
                                    <img src="{{ asset("assets/images/icon/icon-2-5.webp") }}" width="70" height="70"
                                         alt="Icon">
                                </div>
                                <div class="item-content media-body" style="text-align: center;">
                                    <p>90% <br> {{ __("custom.frontend.success percent") }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== Features Ends ======-->

    <!--====== Top Course Start ======-->

    <section class="event-page" id="departments">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-4">
                    <div class="section-title mt-40">
                        <h2 class="title">{{ __("custom.frontend.Sections aq") }}</h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="event-menu pt-20 text-center">
                        <ul class="menu-items">
                            <li data-filter="*" class="active">الكل</li>
                            @foreach($departments as $department )

                                <li data-filter=".{{ $department->id }}">{{ $department->{'name_'.LaravelLocalization::getCurrentLocale()}  }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="event-wrapper">
                <div class="row grid">
                    @foreach($departments as $department )
                        <div class="col-lg-3 col-sm-6 {{ $department->id }}">
                            <div class="single-event text-center mt-30">
                                <h4 class="event-title"><a>{{ $department->{'name_'.LaravelLocalization::getCurrentLocale()} }}</a></h4>
                                <span class="time">{{$department->{'specification_name_'.LaravelLocalization::getCurrentLocale()} }}</span>
                                <span class="date">{{ $department->minimum_percent }}% </span>
                                <span class="date"> {{ $department->maximum_percent }}% </span>
                                <p class="place">{{ number_format($department->price, 0, '.', ',') }} IQD<br></p>
                            </div>
                        </div>

                    @endforeach


                </div>
            </div>
        </div>
    </section>

    <!--====== Top Course Ends ======-->


    <!--====== Event Start ======-->

    <section class="event-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="event-image mt-50">
                        <img src="{{asset("assets/images/blog-2.webp")}}" width="548" height="337" alt="Event">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="event-title mt-40">
                        <div class="section-title-2">
                            <h2 class="title">{{ __("custom.frontend.Latest Conferences") }} </h2>
                            <span class="line"></span>
                            <p> {{ __("custom.frontend.conference text") }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach($conferences as $conference)

                    <div class="col-lg-6">
                        <div class="event-wrapper-2">
                            <div class="single-event-2  wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="event-date">
                                    <span class="date"> {{ $conference->date->format('D M Y') }} </span>
                                </div>
                                <div class="event-content">
                                    <h4 class="event-title-2"><a href="#">{{ $conference->{'title_'.LaravelLocalization::getCurrentLocale()} }}</a>
                                    </h4>
                                    <p class="place">المكان :{{ $conference->{'location_'.LaravelLocalization::getCurrentLocale()} }}</p>
                                    <span class="time">
                                    من{{ $conference->start_time->format(' H:I ') }} ألي
                                    {{ $conference->end_time->format('H:I') }}
                                </span>
                                    <!--  <a href="#" class="more">Read more <i
                                            class="fas fa-chevron-right"></i></a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>

    <!--====== Event Ends ======-->




@endsection()
