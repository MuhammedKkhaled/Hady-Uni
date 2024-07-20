@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@php $name = 'statistics' @endphp
@extends('layouts.admin.app')
@section('content')

    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{$name}} |  Edit</h3>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('admin.'.$name.'.update', $statistic->id) }}"
                  enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')
                    <div class="form-group">
                        <label>{{ __("custom.frontend.graduated") }}  <span class="text-danger">*</span></label>
                        <input type="graduated" name="graduated" autofocus class="form-control" value="{{ old('graduated', $statistic->graduated) }}" >
                    </div>
                    <div class="form-group">
                        <label>{{ __("custom.frontend.student") }} <span class="text-danger">*</span></label>
                        <input type="number" name="students" autofocus class="form-control" value="{{ old('students', $statistic->students) }}" >
                    </div>
                    <div class="form-group">
                        <label>{{ __("custom.frontend.students_abroad") }} <span class="text-danger">*</span></label>
                        <input type="number" name="students_abroad" autofocus class="form-control" value="{{ old('students_abroad', $statistic->students_abroad) }}" >
                    </div>
                    <div class="form-group">
                        <label>{{ __("custom.frontend.success percent") }}  <span class="text-danger">*</span></label>
                        <input type="number" name="success_percent" autofocus class="form-control" step="any" min="0" max="100" value="{{ old('success_percent', $statistic->success_percent) }}" >
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
