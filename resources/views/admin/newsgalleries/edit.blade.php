@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@php $name = 'newsgalleries' @endphp
@extends('layouts.admin.app')
@section('content')

    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{$name}} |  Edit</h3>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('admin.'.$name.'.update', $newsgallery->id) }}"
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
                                value="{{ $department->id }}" {{ $department->{'title_'.LaravelLocalization::getCurrentLocale()}  == $department->{'title_'.LaravelLocalization::getCurrentLocale() } ? 'selected' :'' }} >
                                    {{ $department->{'title_'.LaravelLocalization::getCurrentLocale()} }}
                            </option>

                        </select>
                    </div>

                    {{--file--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Main Image") }} <span class="text-danger">JPG,PNG*</span></label>
                        <input type="file" name="image_1" id="input-file-now" class="dropify" @if(isset($newsgalleries)) data-default-file="{{$newsgalleries->image_1}}" data-show-remove="false" @endif  data-height="355"/>
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