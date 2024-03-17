@extends("frontend.layouts.app")

@section("title" , "جامعة الهادي | مجلة البحث الصحي")

@section('content')



    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url({{ asset("assets/images/campus-2-2.jpg") }});">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">مجلة البحوث الصحية</h2>
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
                                <a href="#"><img src="{{ asset("assets/images/courses-list/courses-1.webp") }}" width="320" height="300" alt="courses"></a>
                            </div>
                            <div class="courses-content">

                                <div class="courses-content-wrapper" style=" max-width:100%">
                                    @if(!isset($journal->name))
                                    <h4 class="courses-title"><a href="">
                                         لا يوجد بحث حتي الان
                                        </a></h4>

                                    @else
                                        <h4 class="courses-title"><a href="">
                                                        {{$journal->name}}
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
                                        <a class="more" href="{{ asset(Storage::url('uploads/journals/' . $journal->file)) }}" target="_blank">عرض <i class="fas fa-chevron-right"></i></a>
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

    <!--====== Newsletter Start ======-->

    <section class="newsletter-area">
        <div class="container">
            <div class="newsletter-wrapper bg_cover wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s"
                 style="background-image: url({{ asset("assets/images/newsletter-bg-1.webp") }});">
                <div class="row align-items-center">

                    <div class="col-lg-7">

                        <div class="comment-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <input type="email" placeholder="البريد الالكتروني">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <textarea placeholder="التواصل معنا بخصوص ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <button class="main-btn">Submit now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="section-title-2 mt-25">
                            <h2 class="title">أتصـــل بــنا</h2>
                            <span class="line"></span>
                            <p>نحن دائما في اتقبال الاتصالات منكم</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Newsletter Ends ======-->



@endsection
