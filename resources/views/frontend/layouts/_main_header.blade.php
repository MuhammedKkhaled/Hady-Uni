<!--====== Header Start ======-->

<header class="header-area">
    <div class="header-top">
        <div class="container">
            <div class="header-top-wrapper d-flex flex-wrap justify-content-sm-between">
                <div class="header-top-left mt-10">
                    <ul class="header-meta">
                        <li><a href="mailto://infoedumate@example.com">huc.edu@gmail.com</a></li>
                    </ul>
                </div>
                <div class="header-top-right mt-10">
                    <div class="header-link">
                        <a class="notice" href="#">ملاظات</a>
                        <a class="login" href="#">تسجيل دخول</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="navigation" class="navigation navigation-landscape">
        <div class="container position-relative">
            <div class="row align-items-center">

                <div class="col-lg-10 position-static">
                    <div class="nav-toggle"></div>
                    <nav class="nav-menus-wrapper">
                        <ul class="nav-menu">
                            <li>
                                <a href="#">المكتبة</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="#">مكتبة الكلية</a></li>
                                    <li><a href="#">المكتبة الالكترونية</a></li>
                                    <li><a href="#">المكتبة الافتراضية</a></li>
                                    <li><a href="#">منصة البحوث التطبيقية</a></li>
                                    <li><a href="#">المحلات الاكاديمية العلمية العراقي</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">مجلة البحوث الصحية</a>
                            </li>
                            <li>
                                <a href="#">الاقسام</a>
                                <ul class="nav-dropdown nav-submenu">
                                    @foreach($sections as $section)
                                    <li><a href="{{ route('main.departments.show' , $section->id) }}">{{ $section->name }}</a></li>
                                    @endforeach

                                </ul>
                            </li>
                            <li>
                                <a href="#">منتسبي الكلية</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="#">الموظفين و الاداريين المرتبطين بمركز الكلية</a></li>
                                    <li><a href="#">قسم طب الاسنان</a></li>
                                    <li><a href="#">قسم الاشغة</a></li>
                                    <li><a href="#">قسم تقنيات الاجهزة الطبية</a></li>
                                    <li><a href="#">قسم التمريض</a></li>
                                    <li><a href="#">قسم المختبرات</a></li>
                                    <li><a href="#">قسم الفيزياء الطبية</a></li>
                                    <li><a href="#">قسم القانون</a></li>
                                    <li><a href="#">قسم التصميم الداخلي</a></li>
                                </ul>
                            </li>
                            <li><a href="#">الهيكل التنظيمي و الاداري</a></li>

                            <li>
                                <a href="#">حول الكلية</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li>
                                        <a href="#">عمادة الكلية</a>
                                        <ul class="nav-dropdown nav-submenu">
                                            <li><a href="#">عميد الكلية</a>
                                                <ul class="nav-dropdown nav-submenu">
                                                    <li><a href="{{ url("main/teacher-details/0") }}">سيرة ذاتية</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">معاون العميد للشؤون المالية و
                                                    الادارية</a>
                                                <ul class="nav-dropdown nav-submenu">
                                                    <li><a href="{{ url("main/teacher-details/1") }}">السيرة الذاتية لمعاون العميد للشؤون المالية و الادارية</a></li>
                                                    <li><a href="{{ url("main/teachers/3") }}">الشعبة الادارية</a></li>
                                                    <li><a href="{{ url("main/teachers/4") }}">شعبة الحسابات</a></li>
                                                    <li><a href="{{ url("main/teachers/5") }}">الشعبة القانونية</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">معاون العميد للشؤون العلمية</a>
                                                <ul class="nav-dropdown nav-submenu">
                                                    <li><a href="{{ url("main/teacher-details/2") }}">السيرة الذاتية لمعاون العميد للشؤون العلمية</a></li>
                                                    <li><a href="{{ url("main/teachers/6") }}">شعبة التسجيل</a></li>
                                                    <li><a href="{{ url("main/teachers/7") }}">شعبة التقويم</a></li>
                                                    <li><a href="{{ url("main/teachers/8") }}">شعبة المعلومات الالكترونية</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="">مجلس الكلية</a>
                                                <ul class="nav-dropdown nav-submenu">
                                                    <li><a href="#">نبذة عن مجلس
                                                            الكلية</a></li>
                                                    <li><a href="teachers.html">اعضاء مجلس الكلية</a></li>
                                                    <li><a href="#">البريد الالكتروني</a></li>
                                                </ul>
                                            </li>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">نبذة عن الكلية</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="{{ asset('assets/files/strategy1.pdf') }}" target="_blank">الخطة الستراتيجية لكلية
                                            الهادي الجامعة 2022
                                            - 2026</a></li>
                                    <li><a href="{{ asset('assets/files/strategy2.pdf') }}" target="_blank">تقرير التقييم الذاتي
                                            لكلية
                                            الهادي الجامعة 2019 - 2020</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="strategys.html">استراتيجية الكلية</a>
                            </li>
                            <li><a href="elamrdwordes.html">كلمة السيد العميد</a></li>

                            <li>
                                <a href="#">تصنيفات كلية الهادي الجامعة</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="#">التصنيف العراقي للجامعات</a></li>
                                    <li><a href="#">تصنيف Webometrics</a></li>
                                    <li><a href="#">تصنيف Greenmertrics</a></li>
                                </ul>
                            </li>
                        </ul>
                        </li>
                        <li>
                            <a class="active" href="index1.html">الرئيسية</a>
                        </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-1" style="text-align: center;">
                    <div class="header-logo">
                        <a href="index1.html"><img src="{{ asset("assets/images/logo.webp") }}" width="88" height="88"
                                                   alt="Logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--====== Header Ends ======-->
