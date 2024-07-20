@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@php $name = 'courses' @endphp
@extends('layouts.admin.app')
@section('content')
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{ __('custom.Create course') }}</h3>
        </div>
        <div class="card-body">
            <form class="form" action="{{ route('admin.' . $name . '.store') }}" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('post')
                    @include('admin.partials._errors')

                    {{-- Name --}}
                    <div class="form-group">
                        <label for="name_en">{{ __('custom.course Name en') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="name_en" name="name_en" autofocus class="form-control"
                            value="{{ old('name_en') }}">
                    </div>


                    {{-- Name --}}
                    <div class="form-group">
                        <label for="name_ar">{{ __('custom.course Name ar') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="name_ar" name="name_ar" autofocus class="form-control"
                            value="{{ old('name_ar') }}" required>
                    </div>

                    {{-- Certificate --}}
                    <div class="form-group">
                        <label for="lecturers_en">{{ __('custom.course lecturers en') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="lecturers_en" name="lecturers_en" autofocus class="form-control"
                            value="{{ old('lecturers_en') }}">
                    </div>


                    {{-- Certificate ar --}}
                    <div class="form-group">
                        <label for="lecturers_ar">{{ __('custom.course lecturers ar') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="lecturers_ar" name="lecturers_ar" autofocus class="form-control"
                            value="{{ old('lecturers_ar') }}" required>
                    </div>
                    {{-- Certificate ar --}}
                    <div class="form-group">
                        <label for="date">{{ __('custom.course year') }} <span
                                class="text-danger">*</span></label>
                        <input type="date" id="date" name="date" autofocus class="form-control"
                            value="{{ old('date') }}" required>
                    </div>


                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-primary mr-2">{{ __('custom.Submit') }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
