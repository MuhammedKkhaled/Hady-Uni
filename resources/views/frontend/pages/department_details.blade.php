@php
    use Illuminate\Support\Facades\Storage;
    use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
@endphp
@extends('frontend.layouts.app')
@section('title')

    {{ __('custom.frontend.department_details_title') }}
@endsection
@section('css')

    section .bold {
    font-weight: bold;
    }

@stop
@section('content')
    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url({{ asset('assets/images/campus-2-2.jpg') }});">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">
                        {{ $department->{'name_' . LaravelLocalization::getCurrentLocale()} }}
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
                <div class="col-lg-7">
                    <div class="courses-details-content mt-50">
                        <img src="{{ asset(Storage::url('uploads/departments/' . $department->image)) }}"
                            alt="Course Details">

                    </div>

                </div>
                <div class="col-lg-5" style="text-align: left;">
                    <div class="courses-sidebar pt-20">
                        <div class="courses-features mt-30">
                            <div class="sidebar-title">
                                <h4 class="title">{{ __('custom.frontend.Section Information') }}</h4>
                            </div>
                            <ul class="courses-features-items">
                                <li><strong> {{ __('custom.frontend.min percent') }} :</strong>
                                    {{ $department->minimum_percent ?? 'لا يوجد ' }}%
                                </li>
                                <li><strong>{{ __('custom.frontend.max percent') }} : </strong>
                                    {{ $department->maximum_percent ?? 'لا يوجد ' }}%
                                </li>
                                <li><strong>{{ __('custom.specifications') }} : </strong>
                                    {{ $department->{'specification_name_' . LaravelLocalization::getCurrentLocale()} }}
                                </li>
                                <li><strong>{{ __('custom.frontend.costs') }} :</strong>
                                    {{ number_format($department->price, 0, '.', ',') . ' IQD' }}
                                </li>
                            </ul>
                            <div class="sidebar-btn">
                                <a class="main-btn"
                                    href="{{ asset(Storage::url('uploads/departments/' . $department->file)) }}"
                                    target="_blank">
                                    {{ __('custom.frontend.more info') }}
                                </a>
                            </div>
                            <div class="sidebar-btn">
                                <a class="main-btn" href="{{ route('affiliates.show', $department->id) }}" target="_blank">
                                    {{ __('custom.frontend.dept_affiliates') }}
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== FAQ's Start ======-->

    <section class="faq-area" style="padding-top:0px">
        <div class="container">
            <div class="faq-wrapper">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <a href="#" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne">{{ __('custom.frontend.definition') }}</a>
                        </div>

                        <div id="collapseOne" class="collapse show" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    {{ $department->{'department_definition_' . LaravelLocalization::getCurrentLocale()} ?? ' ' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingtow">
                            <a href="#" data-bs-toggle="collapse"
                                data-bs-target="#collapsetow">{{ __('custom.frontend.department_message') }}</a>
                        </div>

                        <div id="collapsetow" class="collapse " data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    {{ $department->{'department_message_' . LaravelLocalization::getCurrentLocale()} ?? ' ' }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingthree">
                            <a href="#" data-bs-toggle="collapse"
                                data-bs-target="#collapsethree">{{ __('custom.frontend.department_vision') }}</a>
                        </div>

                        <div id="collapsethree" class="collapse " data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>

                                    {{ $department->{'department_vision_' . LaravelLocalization::getCurrentLocale()} ?? ' ' }}

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingfour">
                            <a href="#" data-bs-toggle="collapse"
                                data-bs-target="#collapsefour">{{ __('custom.frontend.department_goals') }}</a>
                        </div>

                        <div id="collapsefour" class="collapse" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                <p>
                                    {{ $department->{'department_goals_' . LaravelLocalization::getCurrentLocale()} ?? ' ' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== FAQ's Ends ======-->
    <!--====== Contact Start ======-->

    <section class="contact-area">
        <div class="container">
            <div class="contact-form" style="padding-top: 0px;">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="contact-title text-center">
                            <h3 class="title">{{ __('custom.frontend.Department Head Teacher Word') }}</h3>
                            <p style="text-align: end;">
                                {{ $department->{'department_head_word_' . LaravelLocalization::getCurrentLocale()} ?? ' ' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Contact Ends ======-->
    <section class="contact-area">
        <div class="container">
            <div class="teacher-details-tab">
                <ul class="nav nav-justified">
                    <li class="nav-item"><a data-bs-toggle="tab" href="#Admission">{{ __('custom.Admission') }}</a></li>
                    <li class="nav-item"><a data-bs-toggle="tab"
                            href="#Graduation ">{{ __('custom.Graduation requirements') }}</a></li>
                    <li class="nav-item"><a data-bs-toggle="tab" href="#Installments">{{ __('custom.Installments') }}</a>
                    </li>
                    <li class="nav-item"><a class="active" data-bs-toggle="tab"
                            href="#Scholarships">{{ __('custom.Scholarships') }}</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="Scholarships">
                        <div class="row">
                            <p style="text-align: end;">
                                {{ $department->{'scholarships_' . LaravelLocalization::getCurrentLocale()} ?? ' ' }}
                            </p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Installments">
                        <div class="row">
                            <p style="text-align: end;">
                                {{ $department->{'installments_' . LaravelLocalization::getCurrentLocale()} ?? ' ' }}
                            </p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Graduation">
                        <div class="row">
                            <p style="text-align: end;">
                                {{ $department->{'graduation_' . LaravelLocalization::getCurrentLocale()} ?? ' ' }}
                            </p>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Admission">
                        <div class="row">
                            <p style="text-align: end;">
                                {{ $department->{'admission_' . LaravelLocalization::getCurrentLocale()} ?? ' ' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Gallery Start ======-->

    <div class="gallery-page">
        <div class="container">

            <div class="contact-title text-center">
                <h3 class="title">{{ __('custom.Watch Department') }}</h3>

            </div>
            @if ($galleries)
                <div class="row grid-masonry">
                    @foreach ($galleries as $gallery)
                        <div class="col-lg-4 col-sm-6 grid-item">
                            <div class="single-gallery mt-30">
                                <a class="image-popup"
                                    href="{{ asset(Storage::url('uploads/galleries/' . $gallery->image_1)) }}">
                                    <img src="{{ asset(Storage::url('uploads/galleries/' . $gallery->image_1)) }}"
                                        alt="gallery">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>

    <!--====== Gallery Ends ======-->



    <!--====== Blog Details Start ======-->


    <section class="event-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="event-details-content mt-50">

                        <div class="contact-title text-center">
                            <h3 class="title">{{ __('custom.frontend.Department Students') }}</h3>

                        </div>

                        <div class="event-schedule">
                            <div class="event-schedule-table table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="">{{ __('custom.frontend.Graduated') }} </th>
                                            <th class="">{{ __('custom.frontend.tops') }}</th>
                                            <th class="">{{ __('custom.frontend.year') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($department_students as $student)
                                            <tr>
                                                <td class="">
                                                    @if ($student->graduated_file)
                                                        <a class="main-btn"
                                                            href="{{ asset(Storage::url('uploads/students/' . $student->graduated_file)) }}"
                                                            target="_blank">شاهد الخرجين</a>
                                                    @else
                                                        {{ __('No graduated file available') }}
                                                    @endif
                                                </td>
                                                <td class="">
                                                    <form  action="{{ route('tops.show') }}"method="POST">
                                                        @csrf
                                                        <input type="number" name="department_id" value="{{ $department->id }}" hidden>
                                                        <input type="number" name="year" value="{{ $student->year->format('Y') }}"
                                                            hidden>
                                                        <button class="main-btn" type="submit">شاهد الأوائل</button>
                                                        
                                                    </form>
                                                </td>
                                                <td class=""><h1>{{ $student->year->format('Y') ?? __('N/A') }}</h1></td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3">{{ __('No data available') }}</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--====== Blog Details Ends ======-->
    <!--====== Contact Start ======-->

    <section class="contact-area">
        <div class="container">
            <div class="contact-form" style="padding-top: 20px;">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="contact-title text-center">
                            <h3 class="title">{{ __('custom.Important Links') }}</h3>
                            <br>
                            <div class="row">
                                @if ($link)
                                    <div class="sidebar-btn col-lg-4  col-sm-12">
                                        <a class="main-btn col-lg-12 w-100"
                                            href="{{ asset(Storage::url('uploads/links/' . $link->program_desc_file)) ?? '' }}"
                                            target="_blank">{{ __('custom.Program Description') }}</a>
                                    </div>
                                    <div class="sidebar-btn col-lg-4  col-sm-12">
                                        <a class="main-btn col-lg-12 w-100"
                                            href="{{ asset(Storage::url('uploads/links/' . $link->study_plan_file)) }}"
                                            target="_blank">{{ __('custom.Study program') }}</a>
                                    </div>
                                    <div class="sidebar-btn col-lg-4  col-sm-12">
                                        <a class="main-btn col-lg-12 w-100"
                                            href="{{ asset(Storage::url('uploads/links/' . $link->course_study_file)) }}"
                                            target="_blank">{{ __('custom.course Study') }}</a>
                                    </div>
                                @else
                                    <p>No links found for this department.</p>
                                @endif
                            </div>
                            <br>
                            <div class="row">
                                @if ($link)
                                    <div class="sidebar-btn col-lg-4  col-sm-12">
                                        <a class="main-btn col-lg-12 w-100"
                                            href="{{ asset(Storage::url('uploads/links/' . $link->university_calender_file)) }}"
                                            target="_blank">{{ __('custom.university calender') }}</a>
                                    </div>
                                    <div class="sidebar-btn col-lg-4  col-sm-12">
                                        <a class="main-btn col-lg-12 w-100"
                                            href="{{ asset(Storage::url('uploads/links/' . $link->exam_table_file)) }}"
                                            target="_blank">{{ __('custom.Exam Table') }}</a>
                                    </div>
                                    <div class="sidebar-btn col-lg-4  col-sm-12">
                                        <a class="main-btn col-lg-12 w-100"
                                            href="{{ asset(Storage::url('uploads/links/' . $link->school_schedule_file)) }}"
                                            target="_blank">{{ __('custom.School Schedule') }}</a>
                                    </div>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Contact Ends ======-->
    <!--====== Contact Start ======-->

    <section class="contact-area">
        <div class="container">
            <div class="contact-form" style="padding-top: 20px;">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="contact-title text-center">
                            <h3 class="title">{{ __('custom.Forms') }}</h3>
                            <br>
                            <div class="row">
                                @if ($department)
                                    <div class="sidebar-btn col-lg-6  col-sm-12">
                                        <a class="main-btn col-lg-12 w-100" href="{{ $department->employe_link }}"
                                            target="_blank">{{ __('custom.Employer opinion forms') }}</a>
                                    </div>
                                    <div class="sidebar-btn col-lg-6  col-sm-12">
                                        <a class="main-btn col-lg-12 w-100" href="{{  route('Review.show') }}"
                                            >{{ __('custom.Graduate opinion forms') }}</a>
                                    </div>
                                @else
                                    <p>No links found for this department.</p>
                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Contact Ends ======-->
    <!--====== Blog Start ======-->
    @if (count($ads) > 0)
        <section class="contact-area">
            <div class="container">
                <div class="contact-form" style="padding-top: 20px;">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="contact-title text-center">
                                <h3 class="title">{{ __('custom.Ads') }}</h3>
                                <br>
                                <div class="row">
                                    @foreach ($ads as $ad)
                                        <div class="col-lg-4">
                                            <div class="single-blog mt-30">
                                                <div class="blog-image">
                                                    <a href="#">
                                                        <img src="{{ Storage::url('uploads/ads/' . $ad->image) }}"
                                                            width="270" height="150" alt="blogsss">
                                                    </a>
                                                </div>
                                                <div class="blog-content" style="text-align:end">
                                                    <ul class="meta">
                                                        <li><a href="#">{{ $ad->created_at->format('D M Y') }}</a>
                                                        </li>
                                                        <!--<li><a href="#">By: {{ $ad->author }}</a></li>-->
                                                    </ul>
                                                    <h4 class="blog-title"><a href="#" style="text-align:end">
                                                            {{ $ad->{'title_' . LaravelLocalization::getCurrentLocale()} }}

                                                        </a>
                                                    </h4>

                                                    <p>{{ $ad->{'content_' . LaravelLocalization::getCurrentLocale()} }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!--====== Blog Ends ======-->
    <!--====== Contact Start ======-->

    <section class="contact-area">
        <div class="container">
            <div class="contact-form" style="padding-top: 20px;">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="contact-title text-center">
                            <h3 class="title">{{ __('custom.accreditation') }}</h3>
                            <br>

                            @if ($accreditations)
                                <div class="row">
                                    @foreach ($accreditations as $accreditation)
                                        <div class="sidebar-btn col-lg-3">
                                            <a class="main-btn col-lg-12"
                                                href="{{ asset(Storage::url('uploads/accreditation/' . $accreditation->image_1)) }}"
                                                target="_blank">
                                                {{ $accreditation->{'name_' . LaravelLocalization::getCurrentLocale()} ?? ' ' }}</a>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Contact Ends ======-->
    <!--====== Blog Ends ======-->
    <!--====== Contact Start ======-->
    <section class="contact-area">
        <div class="container">
            <div class="contact-form" style="padding-top: 20px;">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="contact-title text-center">
                            <h3 class="title">{{ __('custom.curricula') }}</h3>
                            <br>
                            <div class="teacher-details-tab">
                                <ul class="nav nav-justified">
                                    @if (count($curriculasFifths) > 0)
                                        <li class="nav-item"><a data-bs-toggle="tab"
                                                href="#Fifth">{{ __('custom.Fifth stage lectures') }}</a></li>
                                    @endif
                                    <li class="nav-item"><a data-bs-toggle="tab"
                                            href="#Fourth">{{ __('custom.Fourth stage lectures') }}</a></li>
                                    <li class="nav-item"><a data-bs-toggle="tab"
                                            href="#Third">{{ __('custom.Third stage lectures') }}</a></li>
                                    <li class="nav-item"><a data-bs-toggle="tab"
                                            href="#Second ">{{ __('custom.Second stage lectures') }}</a></li>
                                    <li class="nav-item"><a data-bs-toggle="tab" class="active"
                                            href="#First">{{ __('custom.First stage lectures') }}</a></li>

                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="First">
                                        <div class="row">
                                            <div class="event-schedule">
                                                <div class="event-schedule-table table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="">{{ __('custom.link') }}</th>
                                                                <th class="">{{ __('custom.lecture') }} </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @forelse($curriculasFirsts as $curriculasFirst)
                                                                <tr>
                                                                    <td class="">
                                                                        <a href="{{ asset(Storage::url('uploads/curricula/' . $curriculasFirst->image_1)) }}"
                                                                            target="_blank">{{ __('custom.link') }}</a>

                                                                    </td>
                                                                    <td class="">
                                                                        {{ $curriculasFirst->{'name_' . LaravelLocalization::getCurrentLocale()} ?? ' ' }}
                                                                    </td>
                                                                </tr>
                                                            @empty
                                                                <tr>
                                                                </tr>
                                                            @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Second">
                                        <div class="row">
                                            <div class="event-schedule">
                                                <div class="event-schedule-table table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="">{{ __('custom.link') }}</th>
                                                                <th class="">{{ __('custom.lecture') }} </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @forelse($curriculasSeconds as $curriculasSecond)
                                                                <tr>
                                                                    <td class="">
                                                                        <a href="{{ asset(Storage::url('uploads/curricula/' . $curriculasSecond->image_1)) }}"
                                                                            target="_blank">{{ __('custom.link') }}</a>

                                                                    </td>
                                                                    <td class="">
                                                                        {{ $curriculasSecond->{'name_' . LaravelLocalization::getCurrentLocale()} ?? ' ' }}
                                                                    </td>
                                                                </tr>
                                                            @empty
                                                                <tr>
                                                                </tr>
                                                            @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Third">
                                        <div class="row">
                                            <div class="event-schedule">
                                                <div class="event-schedule-table table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="">{{ __('custom.link') }}</th>
                                                                <th class="">{{ __('custom.lecture') }} </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @forelse($curriculasThirds as $curriculasThird)
                                                                <tr>
                                                                    <td class="">
                                                                        <a href="{{ asset(Storage::url('uploads/curricula/' . $curriculasThird->image_1)) }}"
                                                                            target="_blank">{{ __('custom.link') }}</a>

                                                                    </td>
                                                                    <td class="">
                                                                        {{ $curriculasThird->{'name_' . LaravelLocalization::getCurrentLocale()} ?? ' ' }}
                                                                    </td>
                                                                </tr>
                                                            @empty
                                                                <tr>
                                                                </tr>
                                                            @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="Fourth">
                                        <div class="row">
                                            <div class="event-schedule">
                                                <div class="event-schedule-table table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="">{{ __('custom.link') }}</th>
                                                                <th class="">{{ __('custom.lecture') }} </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @forelse($curriculasFourths as $curriculasFourth)
                                                                <tr>
                                                                    <td class="">
                                                                        <a href="{{ asset(Storage::url('uploads/curricula/' . $curriculasFourth->image_1)) }}"
                                                                            target="_blank">{{ __('custom.link') }}</a>

                                                                    </td>
                                                                    <td class="">
                                                                        {{ $curriculasFourth->{'name_' . LaravelLocalization::getCurrentLocale()} ?? ' ' }}
                                                                    </td>
                                                                </tr>
                                                            @empty
                                                                <tr>

                                                                </tr>
                                                            @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @if (count($curriculasFifths) > 0)
                                        <div class="tab-pane fade" id="Fifth">
                                            <div class="row">
                                                <div class="event-schedule">
                                                    <div class="event-schedule-table table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th class="">{{ __('custom.link') }}</th>
                                                                    <th class="">{{ __('custom.lecture') }}
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @forelse($curriculasFifths as $curriculasFifth)
                                                                    <tr>
                                                                        <td class="">
                                                                            <a href="{{ asset(Storage::url('uploads/curricula/' . $curriculasFifth->image_1)) }}"
                                                                                target="_blank">{{ __('custom.link') }}</a>

                                                                        </td>
                                                                        <td class="">
                                                                            {{ $curriculasFifth->{'name_' . LaravelLocalization::getCurrentLocale()} ?? ' ' }}
                                                                        </td>
                                                                    </tr>
                                                                @empty
                                                                    <tr>
                                                                    </tr>
                                                                @endforelse
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            </div>

                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Contact Ends ======-->

@endsection
