@extends("frontend.layouts.app")

@section("title", "أخر الاخبار | جامعة الهادي " )

@section('content')

    <!--====== Page Banner Start ======-->

    <section class="page-banner">

        <div class="page-banner-bg bg_cover" style="background-image: url({{ asset("assets/images/campus-2-2.jpg") }});">

            <div class="container">

                <div class="banner-content text-center">

                    <h2 class="title">
                        {{ __("custom.frontend.Latest Conferences") }}
                    </h2>
                </div>
            </div>
        </div>

    </section>

    <!--====== Page Banner Ends ======-->

    @if ( count($Conferences) > 0 )
    <section class="teachers-page">
        <div class="container">
            <div class="row teachers-row">



                @foreach($Conferences as $Conference)
                
                <div class="col-lg-6">
                    <div class="event-wrapper-2">
                        <div class="single-event-2  wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.2s">
                            <div class="event-date">
                                <span class="date"> {{ $Conference->date->format('D M Y') }} </span>
                            </div>
                            <div class="event-content">
                                <h4 class="event-title-2"><a href="#">{{ $Conference->{'title_'.LaravelLocalization::getCurrentLocale()} }}</a>
                                </h4>
                                <p class="place">المكان :{{ $Conference->{'location_'.LaravelLocalization::getCurrentLocale()} }}</p>
                                <span class="time">
                                من{{ $Conference->start_time->format(' H:I ') }} ألي
                                {{ $Conference->end_time->format('H:I') }}
                            </span>
                                <!--  <a href="#" class="more">Read more <i
                                        class="fas fa-chevron-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach




            </div>
        </div>
    </section>
    @endif



@endsection
