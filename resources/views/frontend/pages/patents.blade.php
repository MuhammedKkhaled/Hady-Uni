@extends("frontend.layouts.app")

@section("title", "الكتب المؤلفة وبراءات الاختراع | جامعة الهادي " )

@section('content')

    <!--====== Page Banner Start ======-->

    <section class="page-banner">

        <div class="page-banner-bg bg_cover" style="background-image: url({{ asset("assets/images/campus-2-2.jpg") }});">

            <div class="container">

                <div class="banner-content text-center">

                    <h2 class="title">
                        {{ __("custom.frontend.Written books and patents") }}
                    </h2>
                </div>
            </div>
        </div>

    </section>

    <!--====== Page Banner Ends ======-->

    @if ( count($patents) > 0 )
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
                                        <th class="">{{ __("custom.Patent name") }}</th>
                                        <th class="">{{ __("custom.Patent summary") }}</th>
                                        <th class="">{{ __("custom.Instructor's name") }}</th>
                                        <th class="">{{ __("custom.Donor") }}</th>
                                        <th class="">{{ __("custom.the year") }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @forelse($patents as $patent)
                                    <tr class="target">
                                        <td class="">{{ $patent->{'title_'.LaravelLocalization::getCurrentLocale()} }}</td>
                                        <td class=""> {{ $patent->{'content_'.LaravelLocalization::getCurrentLocale()} }}</td>
                                        <td class=""> {{ $patent->{'Instructor_'.LaravelLocalization::getCurrentLocale()} }} </td>
                                        <td class=""> {{ $patent->{'Donor_'.LaravelLocalization::getCurrentLocale()} }} </td>
                                        <td class=""> {{ $patent->{'year'} }} </td>
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
    @endif

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
