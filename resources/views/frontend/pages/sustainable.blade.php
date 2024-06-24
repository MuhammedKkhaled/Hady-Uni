@extends("frontend.layouts.app")

@section("title")
    جامعة الهادي |  {{ $category->{'name_'.LaravelLocalization::getCurrentLocale()} }}
@endsection

@section("content")

    <!--====== Page Banner Start ======-->

    <section class="page-banner">
        <div class="page-banner-bg bg_cover"
             style="background-image: url({{ asset("assets/images/campus-2-2.jpg") }});">
            <div class="container">
                <div class="banner-content text-center">
                    <h2 class="title"> {{ $category->{'name_'.LaravelLocalization::getCurrentLocale() } }}</h2>
                </div>
            </div>
        </div>
    </section>

    <!--====== Page Banner Ends ======-->

    @if ( count($libraries) > 0 )
    <section class="teachers-page">
        <div class="container">
            <div class="row teachers-row">



                @foreach($libraries as $library)
                <div class="col-md-4 col-sm-6">
                    <div class="single-blog mt-30">
                        <div class="blog-image">
                            <a href="{{ route('main.sustainable.show', $library->id) }}">
                                <img src="{{ Storage::url("uploads/sustainable/". $library->image) }}" width="270"
                                     height="150" alt="blogsss">
                            </a>
                        </div>
                        <div class="blog-content" style="text-align:end">
                            <ul class="meta">
                                <li><a href="{{ route('main.sustainable.show', $library->id) }}">{{ $library->created_at->format('D M Y')  }}</a></li>
                            </ul>
                            <h4 class="blog-title"><a href="{{ route('main.sustainable.show', $library->id) }}"
                                                      style="text-align:end">
                                {{ $library->{'titel_'.LaravelLocalization::getCurrentLocale()} }}

                                </a>
                            </h4>
                            <a href="{{ route('main.sustainable.show', $library->id) }}" class="more">مشاهده التفاصيل<i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach




            </div>
        </div>
    </section>
    @endif



@endsection
