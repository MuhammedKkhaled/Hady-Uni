@extends('frontend.layouts.app')
@section("title" , "جامعة الهادي معلومات الاقسام")
@section('content')
    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url({{ asset("assets/images/campus-2-2.jpg") }});">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">
                        {{ $department->name }}
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Courses Details Start ======-->

    <section class="courses-details">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9">
                    <div class="courses-details-content mt-50">
                        <img src="{{ asset("assets/images/courses-details.webp") }}" width="845" height="533" alt="Course Details">

                    </div>

                </div>
                <div class="col-lg-3" style="text-align: left;">
                    <div class="courses-sidebar pt-20">
                        <div class="courses-features mt-30">
                            <div class="sidebar-title">
                                <h4 class="title">معلومات القسم</h4>
                            </div>
                            <ul class="courses-features-items">
                                <li> <strong>اقل نسيه قبول</strong> {{ $department->minimum_percent ?? 'لا يوجد ' }}%</li>
                                <li> <strong>اعلي نسيه قبول</strong> {{ $department->maximum_percent ?? 'لا يوجد ' }}%</li>
                                <li> <strong>التخصص</strong> {{ $department->specification_name }}</li>
                                <li> <strong>القسط</strong> {{ number_format($department->price, 0, '.', ',')." IQD" }}</li>
                            </ul>
                            <div class="sidebar-btn">
                                <a class="main-btn" href="{{ asset("assets/files/department1.pdf") }}" target="_blank">معلومات اكثر</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Courses Details Ends ======-->


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
