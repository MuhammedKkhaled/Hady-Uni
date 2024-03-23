<!--====== Newsletter Start ======-->

<section class="newsletter-area">
    <div class="container">
        <div class="newsletter-wrapper bg_cover wow zoomIn" data-wow-duration="1s" data-wow-delay="0.2s"
             style="background-image: url({{ asset("assets/images/newsletter-bg-1.webp") }});">
            <div class="row align-items-center">

                <div class="col-lg-7">

                    <div class="comment-form">
                        <form action="{{ route('messages.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <input type="email" name="email" placeholder="{{ __('custom.Email Address') }} ">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <textarea placeholder="{{ __('custom.frontend.complement') }}" name="message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single-form">
                                        <button class="main-btn" type="submit">{{ __("custom.frontend.Send") }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-title-2 mt-25">

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(session('message'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <h2 class="title">{{ __("custom.frontend.contact Us") }}</h2>
                        <span class="line"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== Newsletter Ends ======-->
