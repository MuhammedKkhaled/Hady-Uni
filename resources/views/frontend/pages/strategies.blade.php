@extends("frontend.layouts.app")

@section("title" , "جامعة الهادي | استراتيجية الكلية")

@section("content")
    !--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url({{ asset("assets/images/campus-2-2.jpg") }});">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">استراتيجية الكلية</h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Blog Details Start ======-->

    <section class="blog-details-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-sidebar right-sidebar pt-20">

                        <div class="blog-sidebar-post mt-30">
                            <div class="sidebar-title">
                                <h4 class="title">المحور الاول</h4>
                            </div>
                            <ul class="post-items">
                                <li>
                                    <div class="single-post">
                                        <div class="post-thumb">
                                            <a href=""><img src="{{ asset("assets/images/pdf.png") }}" alt=""></a>
                                        </div>
                                        <div class="post-content">
                                            <h4 class="post-title"><a href="{{ asset("assets/files/axisone1.pdf") }}" target="_blank">قانون الخدمة الجامعية</a></h4>
                                            <a href="{{ asset("assets/files/axisone1.pdf") }}" target="_blank" class="more">مشاهده<i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-post">
                                        <div class="post-thumb">
                                            <a href=""><img src="{{ asset("assets/images/pdf.png") }}" alt=""></a>
                                        </div>
                                        <div class="post-content">
                                            <h4 class="post-title"><a href="{{ asset("assets/files/axisone2.pdf") }}" target="_blank">قانون وزارة التعليم العالي والبحث العلمي رقم 40 لسنة 1988</a></h4>
                                            <a href="{{ asset("assets/files/axisone2.pdf") }}" target="_blank" class="more">مشاهده<i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar right-sidebar pt-20">

                        <div class="blog-sidebar-post mt-30">
                            <div class="sidebar-title">
                                <h4 class="title">المحور الثاني</h4>
                            </div>
                            <ul class="post-items">
                                <li>
                                    <div class="single-post">
                                        <div class="post-thumb">
                                            <a href=""><img src="{{ asset("assets/images/pdf.png") }}" alt=""></a>
                                        </div>
                                        <div class="post-content">
                                            <h4 class="post-title"><a href="{{ asset("assets/files/axistow1.pdf") }}" target="_blank">استمارة رقم ١٦٠</a></h4>
                                            <a href="{{ asset("assets/files/axistow1.pdf") }}" target="_blank" class="more">مشاهده<i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-post">
                                        <div class="post-thumb">
                                            <a href=""><img src="{{ asset("assets/images/pdf.png") }}" alt=""></a>
                                        </div>
                                        <div class="post-content">
                                            <h4 class="post-title"><a href="{{ asset("assets/files/axistow2.pdf") }}" target="_blank">تعليمات صندوق التعليم العالي 2004</a></h4>
                                            <a href="{{ asset("assets/files/axistow2.pdf") }}" target="_blank" class="more">مشاهده<i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-post">
                                        <div class="post-thumb">
                                            <a href=""><img src="{{ asset("assets/images/pdf.png") }}" alt=""></a>
                                        </div>
                                        <div class="post-content">
                                            <h4 class="post-title"><a href="{{ asset("assets/files/axistow3.pdf") }}" target="_blank">لتعليمات مكاتب الخدمات العلمية والاستشارية في مؤسسات التعليم العالي والبحث العلمي رقم 128 لسنة 1999</a></h4>
                                            <a href="{{ asset("assets/files/axistow3.pdf") }}" target="_blank" class="more">مشاهده<i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar right-sidebar pt-20">

                        <div class="blog-sidebar-post mt-30">
                            <div class="sidebar-title">
                                <h4 class="title">المحور الثالث</h4>
                            </div>
                            <ul class="post-items">
                                <li>
                                    <div class="single-post">
                                        <div class="post-thumb">
                                            <a href=""><img src="{{ asset("assets/images/pdf.png") }}" alt=""></a>
                                        </div>
                                        <div class="post-content">
                                            <h4 class="post-title"><a href="{{ asset("assets/files/axisthree1.pdf") }}" target="_blank">تعليمات رقم ١٤٨</a></h4>
                                            <a href="{{ asset("assets/files/axisthree1.pdf") }}" target="_blank" class="more">مشاهده<i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar right-sidebar pt-20">

                        <div class="blog-sidebar-post mt-30">
                            <div class="sidebar-title">
                                <h4 class="title">المحور الرابع</h4>
                            </div>
                            <ul class="post-items">

                                <li>
                                    <div class="single-post">
                                        <div class="post-thumb">
                                            <a href=""><img src="{{ asset("assets/images/pdf.png") }}" alt=""></a>
                                        </div>
                                        <div class="post-content">
                                            <h4 class="post-title"><a href="{{ asset("assets/files/axisfour1.pdf") }}" target="_blank">مراكز البحث العلمي</a></h4>
                                            <a href="{{ asset("assets/files/axisfour1.pdf") }}" target="_blank" class="more">مشاهده<i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-post">
                                        <div class="post-thumb">
                                            <a href=""><img src="{{ asset("assets/images/pdf.png") }}" alt=""></a>
                                        </div>
                                        <div class="post-content">
                                            <h4 class="post-title"><a href="{{ asset("assets/files/axisfour2.pdf") }}" target="_blank">قانون انظباط الطلبة</a></h4>
                                            <a href="{{ asset("assets/files/axisfour2.pdf") }}" target="_blank" class="more">مشاهده<i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-post">
                                        <div class="post-thumb">
                                            <a href=""><img src="{{ asset("assets/images/pdf.png") }}" alt=""></a>
                                        </div>
                                        <div class="post-content">
                                            <h4 class="post-title"><a href="{{ asset("assets/files/axisfour3.pdf") }}" target="_blank">تعليمات الدراسات العليا رقم 26</a></h4>
                                            <a href="{{ asset("assets/files/axisfour3.pdf") }}" target="_blank" class="more">مشاهده<i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-post">
                                        <div class="post-thumb">
                                            <a href=""><img src="{{ asset("assets/images/pdf.png") }}" alt=""></a>
                                        </div>
                                        <div class="post-content">
                                            <h4 class="post-title"><a href="{{ asset("assets/files/axisfour4.pdf") }}" target="_blank">التعليمات الامتحانية رقم 134 لسنة 2000</a></h4>
                                            <a href="{{ asset("assets/files/axisfour4.pdf") }}" target="_blank" class="more">مشاهده<i class="fas fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
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