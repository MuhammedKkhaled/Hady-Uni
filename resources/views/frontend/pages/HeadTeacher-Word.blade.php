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
                    <h2 class="title">كلمة السيد العميد</h2>
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
                            <h3 class="title">كلمة السيد العميد</h3>
                            <p style="text-align: end;">كلية الهادي الجامعة هي إحدى المؤسسات التعليمية الرائدة في المنطقة، حيث تعكس رؤية الجامعة في تقديم التعليم العالي المتميز وتطوير المجتمع. تتألف الكلية من عدة أقسام، وتتميز بتنوع برامجها التعليمية، التي تغطي مجموعة واسعة من التخصصات الطبية والعلمية
                                <br>
                                تأسست كلية الهادي الجامعة في عام 2015، ومنذ ذلك الحين، نمت وتطورت الكلية بسرعة لتصبح واحدة من الوجهات الرئيسية للتعليم العالي في المنطقة. تضم الكلية أقساماً متعددة، معظمها يتخصص في مجالات طبية وهي قسم طب الاسنان, قسم تقنيات التخدير, قسم تقنيات الاشعة, قسم تقنيات الاجهزة الطبية, قسم التمريض, قسم المختبرات الطبية, قسم الفيزياء الطبية, قسم القانون, قسم التصميم الداخلي، مما يوفر فرصاً واسعة للطلاب لاختيار التخصص الذي يناسبهم                                <br>
                                بفضل هيكليتها التعليمية المتميزة والمعتمدة على أحدث التقنيات والمعدات، يحظى الطلاب في كلية الهادي بفرصة فريدة لاكتساب المعرفة والمهارات العملية الضرورية لنجاحهم في مجالاتهم المختارة. وتعكس الأنشطة الطلابية المتنوعة والفعاليات الثقافية والاجتماعية التي تنظمها الكلية روحها الحيوية وتعزز التواصل والتفاعل بين الطلاب                                <br>
                                تضم الكلية حوالي 8000 طالب، مما يعكس الطلب المتزايد على التعليم العالي والجودة التي توفرها الكلية. وتشهد الكلية نجاحاً ملحوظاً في تخريج الطلاب، حيث تم تخريج ثلاث دورات حتى الآن، وهو ما يعكس جودة التعليم والاهتمام بتطوير الطلاب ليصبحوا رواداً ومبتكرين في مجتمعهم ومجالات عملهم
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Contact Ends ======-->

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
