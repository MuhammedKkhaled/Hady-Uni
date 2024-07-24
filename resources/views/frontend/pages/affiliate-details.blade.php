@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@extends('frontend.layouts.app')

@section('title', 'السيرة الذاتية| جامعة الهادي ')

@section('content')

    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url({{ asset('assets/images/campus-2-2.jpg') }});">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">{{ __('custom.frontend.cv') }}</h2>
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
                                <li><a href="{{ $affiliate->researchgate  }}" target="_blank"><i class="fab fa-researchgate"></i></a></li>
                                <li><a href="{{ $affiliate->google}}" target="_blank"><i class="fab fa-google"></i></a></li>
                                <li><a href="{{ $affiliate->scopus}}" target="_blank"><img style="display: block;-webkit-user-select: none;margin: auto;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="https://camo.githubusercontent.com/18655613a8ce9bfdc11e17b4c0659b30ee65f2902bef2526a89e2713d8392e0f/68747470733a2f2f696a6f672e67656f6c6f67692e6573646d2e676f2e69642f7075626c69632f736974652f696d616765732f6e616e612f49636f6e5f2d5f53636f7075732e706e67"></a></li>
                                <li><a href="{{ $affiliate->linkedin  }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>

                        <div class="teacher-image">

                            <a href="#">

                                <img @if ($affiliate->image == "")
                                src="{{ asset('assets/images/logo.webp') }}"
                            @else
                                src="{{ Storage::url("uploads/affiliates/". $affiliate->image) }}"
                            @endif width="373"
                                    height="503" alt="teacher">

                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 teachers-col">
                    <div class="teacher-details-content mt-45">
                        <h4 class="teacher-name">{{ $affiliate->{'name_' . LaravelLocalization::getCurrentLocale()} }}</h4>
                        <span class="designation">
                            {{ $affiliate->{'specialization_' . LaravelLocalization::getCurrentLocale()} }}</span><br>
                        <span class="department">
                            {{ $affiliate->{'certificate_' . LaravelLocalization::getCurrentLocale()} }}
                        </span>
                        <p>
                            {{ $affiliate->{'general_specialization_' . LaravelLocalization::getCurrentLocale()} }}
                        </p>
                        <ul class="teacher-contact">
                            <li><strong>{{ __("custom.Affiliate Title") }}</strong> <br><a href="">{{ $affiliate->{'title_'.LaravelLocalization::getCurrentLocale()} }}</a></li>
                            <li><strong>{{ __("custom.Affiliate Notes") }}</strong> <br><a href="">{{  $affiliate->{'notes_'.LaravelLocalization::getCurrentLocale()} }}</a></li>
                        </ul><br>
                        <a class="main-btn"
                                    href="{{ Storage::url("uploads/affiliates/". $affiliate->cv) }}"
                                    target="_blank">
                                    {{ __('custom.frontend.cv') }}
                                </a>
                    </div>
                </div>
            </div>

            <div class="teacher-details-tab">
                <ul class="nav nav-justified">
                    <li class="nav-item "><a data-bs-toggle="tab" href="#library ">{{ __('custom.Lectures') }}</a></li>
                    <li class="nav-item active"><a data-bs-toggle="tab" href="#curricula">{{ __('custom.Research') }}</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active" id="curricula">
                        <div class="row">
                            <div class="event-schedule">
                                <div class="event-schedule-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="">{{ __('custom.department') }}</th>
                                                <th class="">{{ __('custom.Research Title') }}</th>
                                                <th class="">{{ __('custom.date of publication') }}</th>
                                                <th class="">{{ __('custom.Publisher') }}</th>
                                                <th class="">{{ __('custom.Link') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @forelse($libraries as $librarie)
                                                <tr class="target">
                                                    <td class="">
                                                        {{ $librarie->{'specialization_name_' . LaravelLocalization::getCurrentLocale()} }}
                                                    </td>
                                                    <td class="">
                                                        {{ $librarie->{'name_' . LaravelLocalization::getCurrentLocale()} }}
                                                    </td>
                                                    <td class=""> {{ $librarie->{'published_at'}->format('Y') }}
                                                    </td>
                                                    <td class="">
                                                        {{ $librarie->{'publisher_' . LaravelLocalization::getCurrentLocale()} }}
                                                    </td>
                                                    <td class=""> <a href="{{ $librarie->{'file'} }}"
                                                            target="_blank">{{ __('custom.Link') }}</a></td>
                                                </tr>
                                            @empty
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="library">
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
                                            @forelse($curriculas as $curricula)
                                                <tr>
                                                    <td class="">
                                                        <a href="{{ asset(Storage::url('uploads/curricula/' . $curricula->image_1)) }}"
                                                            target="_blank">{{ __('custom.link') }}</a>

                                                    </td>
                                                    <td class="">
                                                        {{ $curricula->{'name_' . LaravelLocalization::getCurrentLocale()} ?? ' ' }}
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
                </div>
            </div>
        </div>
    </section>

    <!--====== Teacher Details Ends ======-->

@endsection
