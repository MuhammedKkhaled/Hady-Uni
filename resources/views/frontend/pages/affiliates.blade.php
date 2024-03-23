@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@extends('frontend.layouts.app')
@section('title')

    {{ __("custom.frontend.Affiliate title") }}

@stop

@section('content')

    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover"
             style="background-image: url({{ asset('assets/images/campus-2-2.jpg') }});">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">{{ __("custom.frontend.Affiliates") }}
                        ( {{ $affiliates[0]->department->{'name_'.LaravelLocalization::getCurrentLocale()} ?? __("custom.frontend.This Department Hasn't Affiliates Yet") }})</h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    <!--====== Blog Details Start ======-->


    <section class="event-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="event-details-content mt-50">

                        <div class="event-schedule">
                            <div class="event-schedule-table table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="">{{ __("custom.Affiliate Notes") }}</th>
                                        <th class="">{{ __("custom.Affiliate Title") }}</th>
                                        <th class="">{{ __("custom.special Specialization") }}</th>
                                        <th class="">{{ __("custom.General Specialization") }}</th>
                                        <th class="">{{ __("custom.Affiliate Certificate") }}</th>
                                        <th class=""> {{ __('custom.Affiliate Name') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @forelse($affiliates as $affiliate)
                                    <tr>
                                        <td class="">{{  $affiliate->{'notes_'.LaravelLocalization::getCurrentLocale()} }}</td>
                                        <td class=""> {{ $affiliate->{'title_'.LaravelLocalization::getCurrentLocale()} }}</td>
                                        <td class=""> {{ $affiliate->{'special_specialization_'.LaravelLocalization::getCurrentLocale()} }} </td>
                                        <td class=""> {{ $affiliate->{'general_specialization_'.LaravelLocalization::getCurrentLocale()} }} </td>
                                        <td class=""> {{ $affiliate->{'certificate_'.LaravelLocalization::getCurrentLocale()} }}</td>
                                        <td class=""> {{ $affiliate->{'name_'.LaravelLocalization::getCurrentLocale()} }} </td>
                                    </tr>
                                    @empty

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
@endsection
