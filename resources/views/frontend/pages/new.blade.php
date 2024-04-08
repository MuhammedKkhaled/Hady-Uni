@extends("frontend.layouts.app")

@section("title", "أخر الاخبار | جامعة الهادي " )

@section('content')

    <!--====== Page Banner Start ======-->

    <section class="page-banner">

        <div class="page-banner-bg bg_cover" style="background-image: url({{ asset("assets/images/campus-2-2.jpg") }});">

            <div class="container">

                <div class="banner-content text-center">

                    <h2 class="title">
                        {{ __("custom.frontend.Latest News") }}
                    </h2>
                </div>
            </div>
        </div>

    </section>

    <!--====== Page Banner Ends ======-->

    @if ( count($news) > 0 )
    <section class="teachers-page">
        <div class="container">
            <div class="row teachers-row">



                @foreach($news as $new)
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <a href="#">
                                <img src="{{ Storage::url("uploads/news/". $new->image) }}" width="270"
                                     height="150" alt="blogsss">
                            </a>
                        </div>
                        <div class="blog-content" style="text-align:end">
                            <ul class="meta">
                                <li><a href="#">{{ $new->created_at->format('D M Y')  }}</a></li>
                                <!--<li><a href="#">By: {{ $new->author }}</a></li>-->
                            </ul>
                            <h4 class="blog-title"><a href="#"
                                                      style="text-align:end">
                                {{ $new->{'title_'.LaravelLocalization::getCurrentLocale()} }}

                                </a>
                            </h4>
                            <a href="#" class="more">مشاهده التفاصيل<i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach




            </div>
        </div>
    </section>
    @endif



@endsection
