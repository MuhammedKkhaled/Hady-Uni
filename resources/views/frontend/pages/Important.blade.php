@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@extends('frontend.layouts.app')
@section('title')

{{ __("custom.Important sites") }}

@stop

@section('content')

    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover"
             style="background-image: url({{ asset('assets/images/campus-2-2.jpg') }});">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">{{ __("custom.Important sites") }}</h2>
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
                                        <th class="" style="width: 50%">{{ __("custom.University Name") }}</th>
                                        <th class="">{{ __("custom.Official Website") }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="">{{ __("custom.University Of Baghdad") }}</td>
                                        <td class=""> <a href="https://uobaghdad.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.Mustansiriyah University") }}</td>
                                        <td class=""> <a href="https://www.uomustansiriyah.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.UNIVERSITY OF TECHNOLOGY") }}</td>
                                        <td class=""> <a href="https://uotechnology.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.UNIVERSITY OF BASRAH") }}</td>
                                        <td class=""> <a href="https://www.uobasrah.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.University of  Mosul") }}</td>
                                        <td class=""> <a href="https://uomosul.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.Al-Nahrain University") }}</td>
                                        <td class=""> <a href="https://nahrainuniv.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.Tikrit University") }}</td>
                                        <td class=""> <a href="https://www.tu.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.Al-iraqia University") }}</td>
                                        <td class=""> <a href="https://en.aliraqia.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.University of Diyala") }}</td>
                                        <td class=""> <a href="https://uodiyala.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.University of Karbala") }}</td>
                                        <td class=""> <a href="https://uokerbala.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.Wasit University") }}</td>
                                        <td class=""> <a href="https://uowasit.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.University of Kirkuk") }}</td>
                                        <td class=""> <a href="https://uokirkuk.edu.iq/ar/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.Basra University of Oil and Gas") }}</td>
                                        <td class=""> <a href="https://buog.edu.iq/ar/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.Jabir inb hayyan medical University") }}</td>
                                        <td class=""> <a href="https://www.jmu.edu.iq/ar/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.University of al-Hamdaniya") }}</td>
                                        <td class=""> <a href="https://www.uohamdaniya.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.University of Al-Furat Al-Awsat") }}</td>
                                        <td class=""> <a href="https://atu.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.University of Fallujah") }}</td>
                                        <td class=""> <a href="https://www.uofallujah.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.Ibn Sina University") }}</td>
                                        <td class=""> <a href="https://www.ibnsina.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.The foundation  of technical education") }}</td>
                                        <td class=""> <a href="https://www.fte.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.Al-Mansour University College") }}</td>
                                        <td class=""> <a href="https://muc.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.Al-Rafidain University College") }}</td>
                                        <td class=""> <a href="https://ruc.edu.iq/default.aspx" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.Al-Maamoun University College") }}</td>
                                        <td class=""> <a href="https://almamonuc.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.al-yarmok  university") }}</td>
                                        <td class=""> <a href="https://al-yarmok.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
                                    <tr>
                                        <td class="">{{ __("custom.Dijlah University") }}</td>
                                        <td class=""> <a href="https://duc.edu.iq/" target="_blank">{{ __("custom.Link") }}</a></td>
                                    </tr>
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
