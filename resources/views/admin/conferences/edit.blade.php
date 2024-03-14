@php $name = 'news' @endphp
@extends('layouts.admin.app')
@section('content')


    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{$name}} | Edit {{$news->name}}</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.'.$name.'.update', $news->id) }}" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')

                    {{--Title--}}
                    <div class="form-group">
                        <label>News Title  <span class="text-danger">*</span></label>
                        <input type="text" name="title" autofocus class="form-control" value="{{ old('title', $news->title) }}" required>
                    </div>

                    {{--description--}}
                    <div class="form-group">
                        <label> News content <span class="text-danger">*</span></label>
                        <textarea name="content" class="form-control" cols="30" rows="10" id="content-textarea">{{ old('content', $news->content) }}</textarea>
                    </div>

                    {{--image--}}
                    <div class="form-group">
                        <label class="text-capitalize">Main Images</label>
                        <input type="file" name="image" id="input-file-now" class="dropify" @if(isset($news)) data-default-file="{{$news->image_path}}" data-show-remove="false" @endif data-height="585"/>
                    </div>

                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
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


