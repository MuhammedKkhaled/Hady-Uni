@extends("frontend.layouts.app")

@section("title" , "السيرة الذاتية| جامعة الهادي  ")

@section("content")


    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url({{ asset("assets/images/campus-2-2.jpg") }});">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">سيرة ذاتية</h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Teacher Details Start ======-->

    <section class="teacher-details">
        <div class="container">
            <div class="row teachers-row justify-content-center">
                <div class="col-lg-5 col-md-6 col-sm-8 teachers-col">
                    <div class="single-teacher-details mt-50 text-center">
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

                                <img src="{{$teacher->image_path }}" width="373" height="503" alt="teacher">

                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 teachers-col">
                    <div class="teacher-details-content mt-45">
                        <h4 class="teacher-name">{{ $teacher->name }}</h4>
                        <span class="designation"> {{ $teacher->specialization }}</span><br>
                        <span class="department">
                           @foreach($types as $key => $value )
                               @if($teacher->type == $key)
                                    {{ $value }}
                               @endif
                           @endforeach
                        </span>
                        <p>
                            {{ $teacher->brief }}
                        </p>
                        <ul class="teacher-contact">
                            <li><strong>Email:</strong> <a href="#">{{ $teacher->email }}</a></li>
                            <li><strong>Phone:</strong> <a href="#">{{ $teacher->phone }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="teacher-details-tab">
                <ul class="nav nav-justified">
                    <li class="nav-item"><a data-bs-toggle="tab" href="#educational">المؤهلات العلميه</a></li>
                    <li class="nav-item"><a data-bs-toggle="tab" href="#achievements ">الأنجازات </a></li>
                    <li class="nav-item"><a class="active" data-bs-toggle="tab" href="#experience">الخبرات</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="experience">
                        <div class="row">

                            <div class="col-lg-3 col-sm-6">
                                <div class="single-content-tab">
                                    <h4 class="title">محاضر</h4>
                                    <p>إدارة الأعمال</p>
                                    <p>جامعة بوسطن</p>
                                    <p>2008 إلى 2010</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-content-tab">
                                    <h4 class="title">محاضر</h4>
                                    <p>إدارة الأعمال</p>
                                    <p>جامعة بوسطن</p>
                                    <p>2008 إلى 2010</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-content-tab">
                                    <h4 class="title">محاضر</h4>
                                    <p>إدارة الأعمال</p>
                                    <p>جامعة بوسطن</p>
                                    <p>2008 إلى 2010</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="single-content-tab">
                                    <h4 class="title">محاضر</h4>
                                    <p>إدارة الأعمال</p>
                                    <p>جامعة بوسطن</p>
                                    <p>2008 إلى 2010</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="educational">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-content-tab">
                                    <h4 class="title">دبلوم في تكنولوجيا المعلومات المهنية</h4>
                                    <p>جامعة بوسطن</p>
                                    <p>2007 إلى 2008</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-content-tab">
                                    <h4 class="title">دبلوم في تكنولوجيا المعلومات المهنية</h4>
                                    <p>جامعة بوسطن</p>
                                    <p>2007 إلى 2008</p>
                                </div>
                            </div><div class="col-lg-4 col-sm-6">
                                <div class="single-content-tab">
                                    <h4 class="title">دبلوم في تكنولوجيا المعلومات المهنية</h4>
                                    <p>جامعة بوسطن</p>
                                    <p>2007 إلى 2008</p>
                                </div>
                            </div><div class="col-lg-4 col-sm-6">
                                <div class="single-content-tab">
                                    <h4 class="title">دبلوم في تكنولوجيا المعلومات المهنية</h4>
                                    <p>جامعة بوسطن</p>
                                    <p>2007 إلى 2008</p>
                                </div>
                            </div><div class="col-lg-4 col-sm-6">
                                <div class="single-content-tab">
                                    <h4 class="title">دبلوم في تكنولوجيا المعلومات المهنية</h4>
                                    <p>جامعة بوسطن</p>
                                    <p>2007 إلى 2008</p>
                                </div>
                            </div><div class="col-lg-4 col-sm-6">
                                <div class="single-content-tab">
                                    <h4 class="title">دبلوم في تكنولوجيا المعلومات المهنية</h4>
                                    <p>جامعة بوسطن</p>
                                    <p>2007 إلى 2008</p>
                                </div>
                            </div><div class="col-lg-4 col-sm-6">
                                <div class="single-content-tab">
                                    <h4 class="title">دبلوم في تكنولوجيا المعلومات المهنية</h4>
                                    <p>جامعة بوسطن</p>
                                    <p>2007 إلى 2008</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="achievements">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-content-tab">
                                    <h4 class="title">جائزة أفضل بحث لعام 2019</h4>
                                    <p>أبجد هوز الحاجة هذه الحالات بسيطة تماما وسهلة التمييز. في ساعة حرة ، عندما قوتنا في الاختيار.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="single-content-tab">
                                    <h4 class="title">جائزة أفضل بحث لعام 2019</h4>
                                    <p>أبجد هوز الحاجة هذه الحالات بسيطة تماما وسهلة التمييز. في ساعة حرة ، عندما قوتنا في الاختيار.</p>
                                </div>
                            </div><div class="col-lg-4 col-sm-6">
                                <div class="single-content-tab">
                                    <h4 class="title">جائزة أفضل بحث لعام 2019</h4>
                                    <p>أبجد هوز الحاجة هذه الحالات بسيطة تماما وسهلة التمييز. في ساعة حرة ، عندما قوتنا في الاختيار.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Teacher Details Ends ======-->




@endsection
