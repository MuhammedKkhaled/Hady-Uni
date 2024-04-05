@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
    <!--====== Header Start ======-->

<header class="header-area">

    <div id="navigation" class="navigation navigation-landscape">
        <div class="container position-relative">
            <div class="row align-items-center">

                <div class="col-lg-10 position-static">
                    <div class="nav-toggle  d-block d-md-none"></div>
                    <nav class="nav-menus-wrapper">
                        <ul class="nav-menu">
                            <li>
                                <a href="#">{{ __("custom.libraries") }}</a>
                                <ul class="nav-dropdown nav-submenu">
                                    

                                    @foreach ($categories as $category)
                                        <li><a
                                                href="{{ route('main.libraries.show', $category->id) }}">{{ $category->{'name_'.LaravelLocalization::getCurrentLocale()} }}</a>
                                        </li>
                                    @endforeach
                                    <li><a
                                        href="https://drive.google.com/drive/u/1/folders/1IYA9a1dOFvlmIEr_tEk6a5VH1fSgJsqt?usp=sharing&pli=1" target="_blank">
                                        {{ __("custom.frontend.Electronic library") }}</a>
                                    </li>
                                    <li><a
                                        href="https://www.ivsl.org/ivsl?func=feedback&language=ar" target="_blank">
                                        {{ __("custom.frontend.Virtual library") }}</a>
                                    </li>
                                    <li><a
                                            href="https://www.iasj.net/" target="_blank">
                                            {{ __("custom.frontend.The Iraqi Academic") }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ url('/main/journal') }}">{{ __("custom.frontend.journals") }}</a>
                            </li>


                            <li>
                                <a href="#">{{ __("custom.frontend.sections") }}</a>
                                <ul class="nav-dropdown nav-submenu">
                                    @foreach ($sections as $section)
                                        <li><a
                                                href="{{ route('main.departments.show', $section->id) }}">{{ $section->{'name_'.LaravelLocalization::getCurrentLocale()} }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>

                            <li>
                                <a href="#">{{ __("custom.frontend.Affiliates") }}</a>
                                <ul class="nav-dropdown nav-submenu">
                                @foreach($sections as $section)
                                    <li><a href="{{ route('affiliates.show' , $section->id) }}">{{ __("custom.frontend.Affiliate") }} {{ $section->{'name_'.LaravelLocalization::getCurrentLocale() } }}</a></li>
                                    @endforeach
                                </ul>
                            </li>

                            <li>
                                <a href="#">{{ __("custom.frontend.sustainable") }}</a>
                                <ul class="nav-dropdown nav-submenu">
                                   
                                    @foreach ($categories as $category)
                                        <li><a
                                                href="{{ route('main.libraries.show', $category->id) }}">{{ $category->{'name_'.LaravelLocalization::getCurrentLocale()} }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>
                            <li>
                                <a href="#">{{ __('custom.frontend.About') }}</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li>
                                        <a href="#">{{ __("custom.frontend.dean") }}</a>
                                        <ul class="nav-dropdown nav-submenu">
                                            <li><a href="#">{{ __('custom.frontend.deans') }}</a>
                                                <ul class="nav-dropdown nav-submenu">
                                                    <li><a href="{{ url('main/teacher-details/0') }}">{{ __("custom.frontend.cv") }}</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    {{ __("custom.frontend.assistant dean") }}
                                                </a>
                                                <ul class="nav-dropdown nav-submenu">
                                                    <li><a href="{{ url('main/teacher-details/1') }}">@lang('custom.frontend.biography')</a></li>
                                                    <li><a href="{{ url('main/teachers/3') }}">@lang('custom.frontend.administrative_department')</a></li>
                                                    <li><a href="{{ url('main/teachers/4') }}">@lang('custom.frontend.accounts_department')</a></li>
                                                    <li><a href="{{ url('main/teachers/5') }}">@lang('custom.frontend.legal_department')</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">@lang('custom.frontend.assistant_dean_academic_affairs')</a>
                                                <ul class="nav-dropdown nav-submenu">
                                                    <li><a href="{{ url('main/teacher-details/2') }}">@lang('custom.frontend.biography')</a></li>
                                                    <li><a href="{{ url('main/teachers/6') }}">@lang('custom.frontend.registration_department')</a></li>
                                                    <li><a href="{{ url('main/teachers/7') }}">@lang('custom.frontend.evaluation_department')</a></li>
                                                    <li><a href="{{ url('main/teachers/8') }}">@lang('custom.frontend.electronic_information_department')</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">@lang('custom.frontend.faculty_board')</a>
                                                <ul class="nav-dropdown nav-submenu">
                                                    <li><a href="#">@lang('custom.frontend.faculty_overview')</a></li>
                                                    <li><a href="#">@lang('custom.frontend.self_evaluation_report')</a></li>
                                                    <li><a href="#">@lang('custom.frontend.college_classification')</a></li>
                                                </ul>
                                            </li>
                                            
                                    </li>

                                </ul>
                            </li>

                            <li>
                                <a href="#">@lang('custom.frontend.faculty_overview')</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="{{ asset('assets/files/strategy1.pdf') }}" target="_blank">@lang('custom.frontend.strategic_plan1') 2022 - 2026</a></li>
                                    <li><a href="{{ asset('assets/files/strategy2.pdf') }}" target="_blank">@lang('custom.frontend.self_evaluation_report') 2019 - 2020</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{ url('/main/strategies') }}">@lang('custom.frontend.strategic_plan')</a>
                            </li>


                            <li><a href="{{ url('/main/HeadTeacher-Word') }}">@lang('custom.frontend.dean_word')</a></li>

                            <li>
                                <a href="#">@lang('custom.frontend.college_classification')</a>
                                <ul class="nav-dropdown nav-submenu">
                                    <li><a href="#">@lang('custom.frontend.iraqi_universities_classification')</a></li>
                                    <li><a href="#">@lang('custom.frontend.webometrics_classification')</a></li>
                                    <li><a href="#">@lang('custom.frontend.greenmetrics_classification')</a></li>
                                </ul>
                            </li>

                            <li><a href="{{ url('/main/structure') }}">{{ __("custom.frontend.structure") }}</a></li>

                        </ul>
                        </li>
                        <li>
                            <a class="active" href="{{ url('/main') }}">@lang('custom.frontend.home')</a>
                        </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-1" style="text-align: center;">
                    <div class="header-logo">
                        <a href="{{ url('/main') }}"><img src="{{ asset('assets/images/logo.webp') }}" width="88"
                                                          height="88" alt="Logo"></a>
                    </div>
                </div>

                <div class="col-lg-1" style="text-align: center;">
                    <div class="header-logo">
                        <ul>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{ $localeCode }}"
                                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--====== Header Ends ======-->
