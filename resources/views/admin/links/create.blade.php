@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@php $name = 'links' @endphp
@extends('layouts.admin.app')
@section('content')


    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{ __("custom.Create links") }}</h3>
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

                    {{--file--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Program Description") }} <span class="text-danger">PDF,DOCX*</span></label>
                        <input type="file" name="program_desc_file" id="input-file-now" class="dropify" data-show-remove="false"  data-height="355"/>
                    </div>

                    {{--file--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Study program") }} <span class="text-danger">PDF,DOCX*</span></label>
                        <input type="file" name="study_plan_file" id="input-file-now" class="dropify" data-show-remove="false"  data-height="355"/>
                    </div>

                    {{--file--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.course Study") }} <span class="text-danger">PDF,DOCX*</span></label>
                        <input type="file" name="course_study_file" id="input-file-now" class="dropify" data-show-remove="false"  data-height="355"/>
                    </div>

                    {{--file--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.university calender") }} <span class="text-danger">PDF,DOCX*</span></label>
                        <input type="file" name="university_calender_file" id="input-file-now" class="dropify" data-show-remove="false"  data-height="355"/>
                    </div>

                    {{--file--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Exam Table") }} <span class="text-danger">PDF,DOCX*</span></label>
                        <input type="file" name="exam_table_file" id="input-file-now" class="dropify" data-show-remove="false"  data-height="355"/>
                    </div>

                    {{--file--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.School Schedule") }} <span class="text-danger">PDF,DOCX*</span></label>
                        <input type="file" name="school_schedule_file" id="input-file-now" class="dropify" data-show-remove="false"  data-height="355"/>
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
