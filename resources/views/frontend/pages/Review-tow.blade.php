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
                            <h2 class="title">{{ __('custom.Employer opinion forms') }}</h2>
                            <span class="line"></span>
                        </div>
                        <div class="col-md-12 row" style="text-align: center">
                            
                            @if(session('message') != "")
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{ session('message') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>
                        <div class="comment-form">
                            <form action="{{ route('ReviewTow.store') }}" enctype="multipart/form-data" method="POST">
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
                                        <select name="type" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.type') }} </option>
                                            <option value="حكومي">حكومي</option>
                                            <option value="خاص">خاص</option>
                                        </select>
                                    </div>
                                    <div class="single-form col-md-6">
                                        <input type="text"
                                            name="enterprise"style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"
                                            placeholder="{{ __('custom.enterprise') }} "required>
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    
                                    <div class="single-form col-md-6">
                                        <input type="number" name="number_employees"
                                            style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"
                                            placeholder="{{ __('custom.number_employees') }} " required>
                                    </div>
                                    <div class="single-form col-md-6">
                                       
                                        <input type="text" name="employees_name"
                                            style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"
                                            placeholder="{{ __('custom.employees_name') }} " required>
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    <div class="single-form col-md-6">
                                        <select name="q2" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q2') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                    <div class="single-form col-md-6">
                                        <select name="q1" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q1') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="col-md-12 row">
                                    <div class="single-form col-md-6">
                                        <select name="q4" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q4') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                    <div class="single-form col-md-6">
                                        <select name="q3" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q3') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="col-md-12 row">
                                    <div class="single-form col-md-6">
                                        <select name="q6" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q6') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                    <div class="single-form col-md-6">
                                        <select name="q5" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q5') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="col-md-12 row">
                                    <div class="single-form col-md-6">
                                        <select name="q8" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q8') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                    <div class="single-form col-md-6">
                                        <select name="q7" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q7') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="col-md-12 row">
                                    <div class="single-form col-md-6">
                                        <select name="q10" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q10') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                    <div class="single-form col-md-6">
                                        <select name="q9" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q9') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="col-md-12 row">
                                    <div class="single-form col-md-6">
                                        <select name="q12" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q12') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                    <div class="single-form col-md-6">
                                        <select name="q11" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q11') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="col-md-12 row">
                                    <div class="single-form col-md-6">
                                        <select name="q14" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q14') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                    <div class="single-form col-md-6">
                                        <select name="q13" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q13') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="col-md-12 row">
                                    <div class="single-form col-md-6">
                                        <select name="q16" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q16') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                    <div class="single-form col-md-6">
                                        <select name="q15" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q15') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="col-md-12 row">
                                    <div class="single-form col-md-6">
                                        <select name="q18" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q18') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                    <div class="single-form col-md-6">
                                        <select name="q17" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q17') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="col-md-12 row">
                                    <div class="single-form col-md-6">
                                        <select name="q20" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q20') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                    <div class="single-form col-md-6">
                                        <select name="q21" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q21') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="col-md-12 row">
                                    <div class="single-form col-md-12">
                                        <select name="q19" style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"required>
                                            <option selected="" disabled="">{{ __('custom.select') }} {{ __('custom.q19') }} </option>
                                            <option value="موافق بشدة">{{ __('custom.Strongly Agree') }}</option>
                                            <option value="موافق">{{ __('custom.Agree') }}</option>
                                            <option value="محايد">{{ __('custom.neutral') }}</option>
                                            <option value="غير موافق">{{ __('custom.not agree') }}</option>
                                            <option value="غير موافق بشدة">{{ __('custom.Strongly Disagree') }}</option>
                                        </select>
                                    </div>
                                </div>  
                                <div class="col-md-12 row">
                                    <div class="single-form">
                                        <textarea style="text-align : {{ LaravelLocalization::getCurrentLocaleDirection() == 'rtl' ? 'end' : 'start' }}"
                                            placeholder="{{ __('custom.message2') }}" name="message" required></textarea>
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
