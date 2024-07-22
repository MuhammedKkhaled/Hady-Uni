@extends('frontend.layouts.app')
@section('title')

    {{ __('custom.frontend.Affiliate title') }}

@stop

@section('content')

    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover" style="background-image: url({{ asset('assets/images/campus-2-2.jpg') }});">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title">{{ __('custom.frontend.tops') }}
                        {{ $tops[0]->department->{'name_'.LaravelLocalization::getCurrentLocale()} ?? "" }}
                        {{ $year}}
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Teachers Start ======-->

    <section class="teachers-page"style="
            padding-bottom: 100px;
        ">
        <div class="container">
            <div class="row teachers-row">
                @forelse($tops as $top)
                    <div class="col-md-4 col-sm-6 teachers-col">
                        <div class="single-teacher mt-80 text-center">
                            <div class="teacher-image">
                                <a>
                                    <img @if ($top->image == '') src="{{ asset('assets/images/logo.webp') }}"
                                        @else
                                            src="{{ Storage::url('uploads/top/' . $top->image) }}" @endif
                                        width="266" height="359" alt="top">
                                </a>
                            </div>
                            <div class="teacher-content">
                                <h4 class="name"><a>{{ $top->ranking }} - {{ $top->{'name_' . LaravelLocalization::getCurrentLocale()} }}</a></h4>
                                <span class="designation">
                                    {{ $top->average }}%
                                </span>
                            </div>
                        </div>
                    </div>
                @empty
                    <p></p>
                @endforelse




            </div>
        </div>
    </section>

    <!--====== Teachers Ends ======-->

    <script>
        function myFunction() {
            var input = document.getElementById("Search");
            var filter = input.value.toLowerCase();
            var nodes = document.getElementsByClassName('target');

            for (i = 0; i < nodes.length; i++) {
                if (nodes[i].innerText.toLowerCase().includes(filter)) {
                    nodes[i].style.display = "block";
                    nodes[i].style.display = "";
                } else {
                    nodes[i].style.display = "none";
                }
            }
        }
    </script>
@endsection
