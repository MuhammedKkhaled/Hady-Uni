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


{{--     <section class="event-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="event-details-content mt-50">

                        <input type="text" placeholder="بحث" class="form-control" id="Search" onkeyup="myFunction()" onkeydown="myFunction()">
                        
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
                                    <tr class="target">
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
 --}}
        <!--====== Teachers Start ======-->

        <section class="teachers-page"style="
        padding-bottom: 100px;
    ">
            <div class="container">
                <div class="row teachers-row">
                    @forelse($affiliates as $affiliate)
                        <div class="col-md-4 col-sm-6 teachers-col">
                            <div class="single-teacher mt-80 text-center">
                                <div class="teacher-social">
                                    <ul class="social">
                                        <li><a href="{{$affiliate->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{$affiliate->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="{{$affiliate->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                                <div class="teacher-image">
                                    <a href="{{ route('main.affiliate-details.showaffiliate', $affiliate->id) }}">
                                        <img   @if ($affiliate->image == "")
                                            src="{{ asset('assets/images/logo.webp') }}"
                                        @else
                                            src="{{ Storage::url("uploads/affiliates/". $affiliate->image) }}"
                                        @endif  width="266" height="359" alt="teacher">
                                    </a>
                                </div>
                                <div class="teacher-content">
                                    <h4 class="name"><a href="{{ route('main.affiliate-details.showaffiliate', $affiliate->id) }}">{{ $affiliate->{'name_'.LaravelLocalization::getCurrentLocale()} }}</a></h4>
                                    <span class="designation">
                                    {{ $affiliate->{'certificate_'.LaravelLocalization::getCurrentLocale()}  }}
                                </span>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>{{("custom.frontend.This Department Hasn't Affiliates Yet")}}</p>
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
