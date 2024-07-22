@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@php $name = 'students' @endphp
@extends('layouts.admin.app')
@section('content')

    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{$name}} | Edit {{$student->year}}</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.'.$name.'.update', $student->id) }}"
                  enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')

                    <div class="form-group">
                        <label for="department_id"> {{ __("custom.Department Name") }}</label>
                        <select id="department_id" name="department_id" class="form-control">
                            <option value="0" disabled selected>-- Select --</option>

                            @foreach($departments  as $department) 
                            <option
                                value="{{ $department->id }}" {{ $student->department->{'name_'.LaravelLocalization::getCurrentLocale()}  == $department->{'name_'.LaravelLocalization::getCurrentLocale() } ? 'selected' :'' }} >
                                    {{ $department->{'name_'.LaravelLocalization::getCurrentLocale()} }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Name --}}
                    <div class="form-group">
                        <label for="year">{{ __("custom.Year") }} <span
                                class="text-danger">*</span></label>
                        <input type="date" id="year" name="year" autofocus class="form-control"
                               value="{{ old('year' , $student->year) }}" required>
                    </div>
                    {{--file--}}
                   {{--  <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Student File") }} <span class="text-danger">PDF,DOCX*</span></label>
                        <input type="file" name="student_file" id="input-file-now" class="dropify" @if(isset($student)) data-default-file="{{$student->student_file_path}}" data-show-remove="false" @endif  data-height="355"/>
                    </div> --}}

                    {{--file--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Graduate File") }} <span class="text-danger">PDF,DOCX*</span></label>
                        <input type="file" name="graduated_file" id="input-file-now" class="dropify" @if(isset($student)) data-default-file="{{$student->graduated_file_path}}" data-show-remove="false" @endif  data-height="355"/>
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
