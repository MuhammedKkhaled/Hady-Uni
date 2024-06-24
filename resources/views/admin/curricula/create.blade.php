@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@php $name = 'curricula' @endphp
@extends('layouts.admin.app')
@section('content')


    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{ __("custom.Create curricula") }}</h3>
        </div>
        <div class="card-body">
            <form class="form" action="{{ route('admin.'.$name.'.store') }}" method="POST"
                  enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('post')
                    @include('admin.partials._errors')
                    <div class="form-group">

                        <label for="department_id"> {{ __("custom.Department Name") }}</label>
                        <select id="department_id" name="department_id" class="form-control">
                            <option value="0" disabled selected>-- Select Department --</option>
                            @foreach($depratments  as $department)
                            <option value="{{ $department->id }}">
                                {{ $department->{'name_'.LaravelLocalization::getCurrentLocale()} }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="teacher_id"> {{ __("custom.Teacher Name en") }}</label>
                        <select id="teacher_id" name="teacher_id" class="form-control">
                            <option value="0" disabled selected>-- Select teacher --</option>
                            @foreach($teachers  as $teacher)
                            <option value="{{ $teacher->id }}">
                                {{ $teacher->{'name_'.LaravelLocalization::getCurrentLocale()} }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    {{-- Name --}}
                    <div class="form-group">
                        <label>{{ __("custom.Lecture name in English") }}<span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en') }}" >
                    </div>

                    {{-- Name --}}
                    <div class="form-group">
                        <label>{{ __("custom.Lecture name in Arabic") }}<span class="text-danger">*</span></label>
                        <input type="text" name="name_ar" autofocus class="form-control" value="{{ old('name_ar') }}" >
                    </div>
                    <div class="form-group">

                        <label for="degree"> {{ __("custom.curricula") }}</label>
                        <select id="degree" name="degree" class="form-control">
                            <option value="0" disabled selected>-- Select lecture --</option>
                            <option value="1">{{ __('custom.First stage lectures') }}</option>
                            <option value="2">{{ __('custom.Second stage lectures') }}</option>
                            <option value="3">{{ __('custom.Third stage lectures') }}</option>
                            <option value="4">{{ __('custom.Fourth stage lectures') }}</option>
                            <option value="5">{{ __('custom.Fifth stage lectures') }}</option>
                        </select>
                    </div>

                    {{--file--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Main Image") }} <span class="text-danger">PDF,DOCX*</span></label>
                        <input type="file" name="image_1" id="input-file-now" class="dropify" data-show-remove="false"  data-height="355"/>
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
