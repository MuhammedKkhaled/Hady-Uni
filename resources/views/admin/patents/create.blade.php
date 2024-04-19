@php $name = 'patents' @endphp
@extends('layouts.admin.app')
@section('content')


    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{$name}} | Create</h3>
        </div>
        <div class="card-body">
            <form class="form" action="{{ route('admin.'.$name.'.store') }}" method="POST" enctype="multipart/form-data">
                <div class="card-body">

                    @csrf
                    @method('post')
                    @include('admin.partials._errors')

                    {{-- Name --}}
                    <div class="form-group">
                        <label>{{ __("custom.News Title en") }} <span class="text-danger">*</span></label>
                        <input type="text" name="title_en" autofocus class="form-control" value="{{ old('title_en') }}" >
                    </div>

                    {{-- Name --}}
                    <div class="form-group">
                        <label>{{ __("custom.News Title ar") }} <span class="text-danger">*</span></label>
                        <input type="text" name="title_ar" autofocus class="form-control" value="{{ old('title_ar') }}" >
                    </div>


                    {{--description--}}
                    <div class="form-group">
                        <label>{{ __("custom.patent Content en") }} <span class="text-danger">*</span></label>
                        <textarea name="content_en" class="form-control" cols="30" rows="10" id="content-textarea">{{ old('content_en') }}</textarea>
                    </div>

                    {{--description--}}
                    <div class="form-group">
                        <label>{{ __("custom.patent Content ar") }} <span class="text-danger">*</span></label>
                        <textarea name="content_ar" class="form-control" cols="30" rows="10" id="content-textarea">{{ old('content_ar') }}</textarea>
                    </div>

                    {{--image--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.News Image") }}</label>
                        <input type="file" name="image" id="input-file-now" class="dropify" data-show-remove="false"  data-height="355"/>
                    </div>


                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-primary mr-2">{{ __("custom.Submit") }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('js')
<script>
        ClassicEditor
        .create( document.querySelector( '#content-textarea' ) )
        .catch( error => {
        console.error( error );
    } );
</script>
@endsection



