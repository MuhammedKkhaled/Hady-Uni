@php $name = 'ads' @endphp
@extends('layouts.admin.app')
@section('content')


    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{$name}} | Edit {{$Ads->name}}</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.'.$name.'.update', $Ads->id) }}" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')

                    <div class="form-group">
                        <label for="department_id"> {{ __("custom.Department Name") }}</label>
                        <select id="department_id" name="department_id" class="form-control">
                            <option value="0" disabled selected>-- Select --</option>

                            @foreach($departments  as $department) @endforeach
                            <option
                                value="{{ $department->id }}" {{ $accreditation->department->{'name_'.LaravelLocalization::getCurrentLocale()}  == $department->{'name_'.LaravelLocalization::getCurrentLocale() } ? 'selected' :'' }} >
                                    {{ $department->{'name_'.LaravelLocalization::getCurrentLocale()} }}
                            </option>

                        </select>
                    </div>
                    {{--Title--}}
                    <div class="form-group">
                        <label>{{__("custom.News Title en")}}  <span class="text-danger">*</span></label>
                        <input type="text" name="title_en" autofocus class="form-control" value="{{ old('title_en', $Ads->title_en) }}" >
                    </div>


                    {{--Title--}}
                    <div class="form-group">
                        <label>{{__("custom.News Title ar")}}  <span class="text-danger">*</span></label>
                        <input type="text" name="title_ar" autofocus class="form-control" value="{{ old('title_ar', $Ads->title_ar) }}" >
                    </div>

                    {{--description--}}
                    <div class="form-group">
                        <label> {{__("content.News content en")}} <span class="text-danger">*</span></label>
                        <textarea name="content_en" class="form-control" cols="30" rows="10" id="content-textarea">{{ old('content_en', $Ads->content_en) }}</textarea>
                    </div>


                    {{--description--}}
                    <div class="form-group">
                        <label> {{__("content.News content ar")}} <span class="text-danger">*</span></label>
                        <textarea name="content_ar" class="form-control" cols="30" rows="10" id="content-textarea">{{ old('content_ar', $Ads->content_ar) }}</textarea>
                    </div>

                    {{--image--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Main Images") }}</label>
                        <input type="file" name="image" id="input-file-now" class="dropify" @if(isset($Ads)) data-default-file="{{$Ads->image_path}}" data-show-remove="false" @endif data-height="585"/>
                    </div>

                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-primary mr-2">{{ __("custom.Main Images") }}</button>
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


