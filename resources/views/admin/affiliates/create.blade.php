@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@php $name = 'affiliates' @endphp
@extends('layouts.admin.app')
@section('content')
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{ __('custom.Create Affiliates') }}</h3>
        </div>
        <div class="card-body">
            <form class="form" action="{{ route('admin.' . $name . '.store') }}" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('post')
                    @include('admin.partials._errors')


                    <div class="form-group">
                        <label for="department_id"> {{ __('custom.Department Name') }}</label>
                        <select id="department_id" name="department_id" class="form-control">
                            <option value="0" disabled selected>-- Select --</option>


                            @foreach ($depratments as $department)
                                <option value="{{ $department->id }}">
                                    {{ $department->{'name_' . LaravelLocalization::getCurrentLocale()} }}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    {{-- Name --}}
                    <div class="form-group">
                        <label for="name_en">{{ __('custom.Affiliate Name en') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="name_en" name="name_en" autofocus class="form-control"
                            value="{{ old('name_en') }}">
                    </div>


                    {{-- Name --}}
                    <div class="form-group">
                        <label for="name_ar">{{ __('custom.Affiliate Name ar') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="name_ar" name="name_ar" autofocus class="form-control"
                            value="{{ old('name_ar') }}" required>
                    </div>

                    {{-- Certificate --}}
                    <div class="form-group">
                        <label for="certificate_en">{{ __('custom.Affiliate Certificate en') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="certificate_en" name="certificate_en" autofocus class="form-control"
                            value="{{ old('certificate_en') }}">
                    </div>


                    {{-- Certificate ar --}}
                    <div class="form-group">
                        <label for="certificate_ar">{{ __('custom.Affiliate Certificate ar') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="certificate_ar" name="certificate_ar" autofocus class="form-control"
                            value="{{ old('certificate_ar') }}" required>
                    </div>



                    {{-- General Specialization  --}}
                    <div class="form-group">
                        <label for="general_specialization_en">{{ __('custom.General Specialization en') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="general_specialization_en" name="general_specialization_en" autofocus
                            class="form-control" value="{{ old('general_specialization_en') }}">
                    </div>

                    {{-- General Specialization  --}}
                    <div class="form-group">
                        <label for="general_specialization_ar">{{ __('custom.General Specialization ar') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="general_specialization_ar" name="general_specialization_ar" autofocus
                            class="form-control" value="{{ old('general_specialization_ar') }}" required>
                    </div>

                    {{-- Special Specialization  --}}
                    <div class="form-group">
                        <label for="special_specialization_en">{{ __('custom.special Specialization en') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="special_specialization_en" name="special_specialization_en" autofocus
                            class="form-control" value="{{ old('special_specialization_en') }}">
                    </div>


                    {{-- Special Specialization  --}}
                    <div class="form-group">
                        <label for="special_specialization_ar">{{ __('custom.special Specialization ar') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="special_specialization_ar" name="special_specialization_ar" autofocus
                            class="form-control" value="{{ old('special_specialization_ar') }}" required>
                    </div>

                    {{-- Affiliate Title  --}}
                    <div class="form-group">
                        <label for="title_en">{{ __('custom.Affiliate Title en') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="title_en" name="title_en" autofocus class="form-control"
                            value="{{ old('title_en') }}">
                    </div>

                    {{-- Affiliate Title  --}}
                    <div class="form-group">
                        <label for="title_ar">{{ __('custom.Affiliate Title ar') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="title_ar" name="title_ar" autofocus class="form-control"
                            value="{{ old('title_ar') }}" required>
                    </div>


                    {{-- Affiliate Title  --}}
                    <div class="form-group">
                        <label for="notes_en">{{ __('custom.Affiliate Notes en') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="notes_en" name="notes_en" autofocus class="form-control"
                            value="{{ old('notes_en') }}">
                    </div>


                    {{-- Affiliate Title  --}}
                    <div class="form-group">
                        <label for="notes_ar">{{ __('custom.Affiliate Notes ar') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="notes_ar" name="notes_ar" autofocus class="form-control"
                            value="{{ old('notes_ar') }}" required>
                    </div>

                    {{-- Affiliate Title  --}}
                    <div class="form-group">
                        <label for="facebook">{{ __('custom.Affiliate Title en') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="facebook" name="facebook" autofocus class="form-control"
                        >
                    </div>

                    {{-- Affiliate Title  --}}
                    <div class="form-group">
                        <label for="twitter">{{ __('custom.Affiliate Title en') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="twitter" name="twitter" autofocus class="form-control"
                        >
                    </div>

                    {{-- Affiliate Title  --}}
                    <div class="form-group">
                        <label for="linkedin">{{ __('custom.Affiliate Title en') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="linkedin" name="linkedin" autofocus class="form-control"
                          >
                    </div>
                    {{-- file --}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __('custom.Main Image') }} <span class="text-danger">PNG ,
                                JPg*</span></label>
                        <input type="file" name="image" id="input-file-now" class="dropify"
                            data-show-remove="false" data-height="355" />
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize">CV<span class="text-danger"></span></label>
                        <input type="file" name="cv" id="input-file-now" class="dropify"
                            data-show-remove="false" data-height="355" />
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
