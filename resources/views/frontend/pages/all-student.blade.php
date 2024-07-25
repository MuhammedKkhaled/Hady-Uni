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
                    <h2 class="title">{{ __('custom.frontend.Graduates') }}
                        {{ $students[0]->department->{'name_'.LaravelLocalization::getCurrentLocale()} ?? "" }}
                        {{ $year}}
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="event-details">
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
                                        <th class="">{{ __("custom.frontend.ranking") }} </th>
                                        <th class="">{{ __("custom.full name") }}</th>
                                        <th class="">{{ __("custom.Type of study") }}</th>
                                        <th class="">{{ __('custom.Department Name') }}</th>
                                        <th class="">{{ __("custom.Year") }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @forelse($students as $student)
                                    <tr class="target">
                                        <td class=""> {{ $student->{'ranking'} }}</td>
                                        <td class="">{{  $student->{'name_'.LaravelLocalization::getCurrentLocale()} }}</td>
                                        <td class="">{{  $student->{'type_'.LaravelLocalization::getCurrentLocale()} }}</td>
                                        <td class="">{{  $student->department->{'name_'.LaravelLocalization::getCurrentLocale()} }}</td>
                                        <td class=""> {{ $year }} </td>
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
