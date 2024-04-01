@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@php $name = 'galleries' @endphp
@extends('layouts.admin.app')
@section('content')

    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{$name}} |  Edit</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.'.$name.'.update', $gallery->id) }}"
                  enctype="multipart/form-data">
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
                                value="{{ $department->id }}" {{ $gallery->department->{'name_'.LaravelLocalization::getCurrentLocale()}  == $department->{'name_'.LaravelLocalization::getCurrentLocale() } ? 'selected' :'' }} >
                                    {{ $department->{'name_'.LaravelLocalization::getCurrentLocale()} }}
                            </option>

                        </select>
                    </div>

                    {{--file--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Main Image") }} <span class="text-danger">JPG,PNG*</span></label>
                        <input type="file" name="image_1" id="input-file-now" class="dropify" @if(isset($gallery)) data-default-file="{{$gallery->image_1}}" data-show-remove="false" @endif  data-height="355"/>
                    </div>

                    {{--file--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Image") }} <span class="text-danger">JPG,PNG*</span></label>
                        <input type="file" name="image_2" id="input-file-now" class="dropify" @if(isset($gallery)) data-default-file="{{$gallery->image_2}}" data-show-remove="false" @endif  data-height="355"/>
                    </div>

  {{--file--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Image") }} <span class="text-danger">JPG,PNG*</span></label>
                        <input type="file" name="image_3" id="input-file-now" class="dropify" @if(isset($gallery)) data-default-file="{{$gallery->image_3}}" data-show-remove="false" @endif  data-height="355"/>
                    </div>

  {{--file--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Image") }} <span class="text-danger">JPG,PNG*</span></label>
                        <input type="file" name="image_4" id="input-file-now" class="dropify" @if(isset($gallery)) data-default-file="{{$gallery->image_4}}" data-show-remove="false" @endif  data-height="355"/>
                    </div>

  {{--file--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Image") }} <span class="text-danger">JPG,PNG*</span></label>
                        <input type="file" name="image_5" id="input-file-now" class="dropify" @if(isset($gallery)) data-default-file="{{$gallery->image_5}}" data-show-remove="false" @endif  data-height="355"/>
                    </div>

  {{--file--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Image") }} <span class="text-danger">JPG,PNG*</span></label>
                        <input type="file" name="image_6" id="input-file-now" class="dropify" @if(isset($gallery)) data-default-file="{{$gallery->image_6}}" data-show-remove="false" @endif  data-height="355"/>
                    </div>

  {{--file--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Image") }} <span class="text-danger">JPG,PNG*</span></label>
                        <input type="file" name="image_7" id="input-file-now" class="dropify" @if(isset($gallery)) data-default-file="{{$gallery->image_7}}" data-show-remove="false" @endif  data-height="355"/>
                    </div>

  {{--file--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Image") }} <span class="text-danger">JPG,PNG*</span></label>
                        <input type="file" name="image_8" id="input-file-now" class="dropify" @if(isset($gallery)) data-default-file="{{$gallery->image_8}}" data-show-remove="false" @endif  data-height="355"/>
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