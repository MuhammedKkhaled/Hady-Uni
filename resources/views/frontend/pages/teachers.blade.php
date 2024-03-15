@extends("frontend.layouts.app")

@section("title", "جميع المدرسين | جامعة الهادي " )

@section('content')

    <!--====== Page Banner Start ======-->

    <section class="page-banner">

        <div class="page-banner-bg bg_cover" style="background-image: url({{ asset("assets/images/campus-2-2.jpg") }});">

            <div class="container">

                <div class="banner-content text-center">

                    <h2 class="title">
                      {{ $tp }}
                    </h2>
                </div>
            </div>
        </div>

    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Teachers Start ======-->

    <section class="teachers-page">
        <div class="container">
            <div class="row teachers-row">



                @forelse($teachers as $teacher)
                    <div class="col-md-4 col-sm-6 teachers-col">
                        <div class="single-teacher mt-80 text-center">
                            <div class="teacher-social">
                                <ul class="social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="teacher-image">
                                <a href="">
                                    <img src="{{ $teacher->image_path }}" width="266" height="359" alt="teacher">
                                </a>
                            </div>
                            <div class="teacher-content">
                                <h4 class="name"><a href="">{{ $teacher->name }}</a></h4>
                                <span class="designation">
                                {{ $teacher->specialization }}
                            </span>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>No users</p>
                @endforelse




            </div>
        </div>
    </section>

    <!--====== Teachers Ends ======-->

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
