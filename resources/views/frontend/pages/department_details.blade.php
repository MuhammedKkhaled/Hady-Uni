@php use Illuminate\Support\Facades\Storage;use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@extends('frontend.layouts.app')
@section("title" )

    {{ __("custom.frontend.department_details_title") }}
@endsection
@section('css')

  section .bold {
    font-weight: bold;
    }

  @stop
@section('content')
    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover"
             style="background-image: url({{ asset("assets/images/campus-2-2.jpg") }});">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">
                        {{ $department->{'name_'.LaravelLocalization::getCurrentLocale()} }}
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
                <div class="col-lg-9">
                    <div class="courses-details-content mt-50">
                        <img src="{{ asset(Storage::url("uploads/departments/" .$department->image)) }}" width="845"
                             height="533" alt="Course Details">

                    </div>

                </div>
                <div class="col-lg-3" style="text-align: left;">
                    <div class="courses-sidebar pt-20">
                        <div class="courses-features mt-30">
                            <div class="sidebar-title">
                                <h4 class="title">{{ __("custom.frontend.Section Information") }}</h4>
                            </div>
                            <ul class="courses-features-items">
                                <li><strong> {{ __("custom.frontend.min percent") }} :</strong> {{ $department->minimum_percent ?? 'لا يوجد ' }}%
                                </li>
                                <li><strong>{{ __("custom.frontend.max percent") }} : </strong> {{ $department->maximum_percent ?? 'لا يوجد ' }}%
                                </li>
                                <li><strong>{{ __("custom.specifications") }} : </strong> {{ $department->{'specification_name_'.LaravelLocalization::getCurrentLocale()} }}</li>
                                <li><strong>{{ __("custom.frontend.costs") }} :</strong> {{ number_format($department->price, 0, '.', ',')." IQD" }}
                                </li>
                            </ul>
                            <div class="sidebar-btn">
                                <a class="main-btn"
                                   href="{{  asset(Storage::url("uploads/departments/" .$department->file))}}"
                                   target="_blank">
                                        {{ __("custom.frontend.more info") }}
                                </a>
                            </div>
                            <div class="sidebar-btn">
                                <a class="main-btn"
                                   href="{{ route('affiliates.show' , $department->id) }}"
                                   target="_blank">
                                        {{ __("custom.frontend.dept_affiliates") }}
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== Courses Details Ends ======-->

    <section class="txt" id="txt2">
        <div class="txty" style="text-align: right; padding: 20px; margin-left: 150px; margin-right: 150px">
            <ul>
                <li><span class="bold">{{ __("custom.frontend.definition") }}:</span>
                <p>
                    {{ $department->{'department_definition_'.LaravelLocalization::getCurrentLocale()}  ?? " " }}
                </p>

                </li>
                <li><span class="bold">{{ __("custom.frontend.department_message") }}:</span>
                    <p>
                        {{ $department->{'department_message_'.LaravelLocalization::getCurrentLocale()}  ?? " "}}
                    </p>
                </li>
                <li><span class="bold">{{ __("custom.frontend.department_vision") }}:</span>

                    <p>
                        {{ $department->{'department_vision_'.LaravelLocalization::getCurrentLocale()} ?? " "}}
                    </p>

                </li>
                <li><span class="bold">{{ __("custom.frontend.department_goals") }}:</span>
                    <p>
                        {{ $department->{'department_goals_'.LaravelLocalization::getCurrentLocale()} ?? " 1" }}
                    </p>


                </li>
            </ul>
        </div>
    </section>

@endsection
