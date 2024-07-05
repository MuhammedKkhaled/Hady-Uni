@php
    use Illuminate\Support\Facades\Storage;
    use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
@endphp
@extends('frontend.layouts.app')
@section('title')
    {{ __('custom.frontend.title') }}
@endsection

@section('content')
    <!--====== Newsletter Start ======-->
    <section class="newsletter-area">
        <div class="container">
            <div class="newsletter-wrapper bg_cover wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s"
                style="background-color:  gainsboro;margin-bottom: 120px;">
                <div class="row align-items-center">
                    <div class="col-md-12 row" style="text-align: center">
                        <h2 class="title">{{ __('custom.frontend.Study in Iraq') }}</h2>
                        <span class="line"></span>
                    </div>
                    <br>

                    <strong>{{ __('custom.full name') }}</strong><br> <a>{{ $Study->name }}</a>

                    <strong>{{ __('custom.Email Address') }}</strong><br> <a>{{ $Study->email }}</a>
                    <strong>{{ __('custom.state') }}</strong><br> <a>
                        @if ($Study->state == 0)
                            <a>{{ __('custom.wait') }}</a>
                        @else
                            @if ($Study->state > 0)
                                <a>{{ __('custom.approved') }}</a>
                            @else
                                <a>{{ __('custom.reject') }}</a>
                            @endif
                        @endif
                    </a>
                    <strong>{{ __('custom.note') }}</strong><br> <a>{{ $Study->note }}</a>
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
