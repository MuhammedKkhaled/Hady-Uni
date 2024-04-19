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
    <section class="teachers-page">
        <div class="container">
            
            <div class="tab-content" >
                <div class="tab-pane fade show active" id="list">
                    <div class="courses-wrapper wrapper-2">
                        @foreach($patents as $new)
                        <div class="courses-col">
                            <div class="single-courses-2 courses-list mt-30">
                                <div class="courses-image">
                                    <a href="#"><img src="{{ Storage::url("uploads/patents/". $new->image) }}" width="320" height="300" alt="courses"></a>
                                </div>
                                <div class="courses-content">
                                    <div class="">                                        
                                        <h4 class="courses-title"><a href="">{{ $new->{'title_'.LaravelLocalization::getCurrentLocale()} }}</a></h4>
                                        <div class="duration-rating">
                                            <div class="">
                                                <p class="duration" style="color: aliceblue">{{ $new->{'content_'.LaravelLocalization::getCurrentLocale()} }}</span></p>
                                            </div>
                                        </div>
                                    </div>                                
                                </div>                                
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif



@endsection
