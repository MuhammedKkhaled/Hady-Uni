@extends("frontend.layouts.app")

@section("title" , "جامعة الهادي | الهيكل التنظيمي والاداري")

@section("css")


@endsection

@section("content")

    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url(assets/images/campus-2-2.jpg);">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">الهيكل التنظيمي والاداري</h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Contact Start ======-->

    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{ asset('assets/images/stratege.jpg') }}" width="100%"
                    height="100%" alt="Course Details">
                </div>
            </div>
        </div>
    </section>

    <!--====== Contact Ends ======-->

    <!--====== Newsletter Start ======-->

    <section class="newsletter-area">
        <div class="container">
            <div class="newsletter-wrapper bg_cover wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s"
                 style="background-image: url(assets/images/newsletter-bg-1.webp);">
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
@section("js")

@endsection
