@php
    use Illuminate\Support\Facades\Storage;
    use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
@endphp
@extends('frontend.layouts.app')
@section('title')
    {{ __('custom.frontend.title') }}
@endsection

@section('content')

    <!--====== Newsletter Ends ======-->
    <section class="newsletter-area">
        <div class="container">
            <div class="newsletter-wrapper bg_cover wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s"
                style="background-color:  gainsboro;margin-bottom: 20px;">
                <div class="row align-items-center">

                    <div class="col-lg-12">

                        <div class="col-md-12 row" style="text-align: center">
                            <h2 class="title">{{ __('custom.frontend.Review') }}</h2>
                            <span class="line"></span>
                        </div>
                        <div class="col-md-12 row" style="text-align: center">
                            {{-- 
                            @if(session('message') != "")
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('message') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif --}}
                        </div>
                        <div class="comment-form">
                            <form action="{{ route('Review.store') }}" enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="col-md-12 row">
                                    <div class="single-form">
                                        {{-- <label>{{ __('custom.full name') }}</label> --}}
                                        <input type="text" name="name"
                                            style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"
                                            placeholder="{{ __('custom.full name') }} " required>
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    <div class="single-form col-md-6">
                                        <input type="number"
                                            name="phone"style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"
                                            placeholder="{{ __('custom.phone number') }} "required>
                                    </div>
                                    <div class="single-form col-md-6">
                                        <input type="email"
                                            name="email"style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"
                                            placeholder="{{ __('custom.Email Address') }} "required>
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    
                                    <div class="single-form col-md-6">
                                        <select name="department_id" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">أختر {{ __('custom.departmentstudy') }} </option>
                                            @foreach ($depratments as $department)
                                                <option value="{{ $department->id }}">
                                                    {{ $department->{'name_' . LaravelLocalization::getCurrentLocale()} }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="single-form col-md-6">
                                        <select name="qualification" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">أختر {{ __('custom.qualification') }} </option>
                                            <option value="بكالوريوس">بكالوريوس</option>
                                            <option value="دبلوم عالي">دبلوم عالي</option>
                                            <option value="ماجستير">ماجستير</option>
                                            <option value="دكتوراه">دكتوراه</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    <div class="single-form col-md-6">
                                        <input type="text" name="trac"
                                            style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"
                                            placeholder="{{ __('custom.trac') }} " required>
                                    </div>
                                    <div class="single-form col-md-6">
                                        <input type="text"
                                            name="trac_tow"style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required
                                            placeholder="{{ __('custom.trac_tow') }} ">
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    <div class="single-form col-md-6">
                                        
                                        <select name="rate" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">أختر {{ __('custom.rate') }} </option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                        </select>
                                    </div>
                                    <div class="single-form col-md-6">
                                        <input type="number"
                                            name="year"style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required
                                            placeholder="{{ __('custom.year') }} ">
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    <div class="single-form col-md-4">
                                        <input type="text" name="work"
                                            style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"
                                            placeholder="{{ __('custom.work') }} " required>
                                    </div>
                                    
                                    <div class="single-form col-md-4">
                                        <select name="work_state" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">أختر {{ __('custom.work_state') }} </option>
                                            <option value="ضمن الاختصاص">ضمن الاختصاص</option>
                                            <option value="ليس ضمن الاختصاص">ليس ضمن الاختصاص</option>
                                        </select>
                                    </div>
                                    <div class="single-form col-md-4">
                                        <input type="text"
                                            name="work_link"style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required
                                            placeholder="{{ __('custom.work_link') }} ">
                                    </div>
                                </div>     
                                <div class="col-md-12 row">
                                    <div class="single-form">
                                        <textarea style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"
                                            placeholder="{{ __('custom.message') }}" name="message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <button class="main-btn" type="submit">{{ __('custom.frontend.Send') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Shop Ends ======-->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/66242035a0c6737bd12e959f/1hruhrl3l';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
@endsection()
