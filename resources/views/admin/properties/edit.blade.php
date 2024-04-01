@php $name = 'properties' @endphp
@extends('layouts.admin.app')
@section('content')


    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{ __("custom.Properties | Edit") }} {{$property->name}}</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.'.$name.'.update', $property->id) }}" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')

                    {{-- Name --}}
                    <div class="form-group">
                        <label for="teacher_id">Teacher Name  <span class="text-danger">*</span></label>
                        <select id="teacher_id" name="teacher_id" class="form-control">
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}" {{ $property->teacher->name_en == $teacher->name_en ? 'selected' : '' }}>
                                    {{ $teacher->name_en }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- property_title --}}
                    <div class="form-group">
                        <label for="property_title_en">{{ __("Custom.Property Title en") }}<span class="text-danger">*</span></label>
                        <input type="text" id="property_title_en" name="property_title_en"  autofocus class="form-control" value="{{ old('property_title_en',$property->property_title_en) }}" >
                    </div>

                    {{-- property_title --}}
                        <div class="form-group">
                            <label for="property_title_ar">{{ __("Custom.Property Title ar") }}<span class="text-danger">*</span></label>
                            <input type="text" id="property_title_ar" name="property_title_ar"  autofocus class="form-control" value="{{ old('property_title_ar',$property->property_title_ar) }}" >
                        </div>

                    {{-- property_desc --}}
                    <div class="form-group">
                        <label for="property_desc_en"> {{ __("Custom.Property Description en") }}  <span class="text-danger">*</span></label>
                        <textarea name="property_desc_en" id="property_desc_en" class="form-control"  > {{ $property->property_desc_en }}</textarea>
                    </div>
                    {{-- property_desc --}}
                    <div class="form-group">
                        <label for="property_desc_ar"> {{ __("Custom.Property Description ar") }}  <span class="text-danger">*</span></label>
                        <textarea name="property_desc_ar" id="property_desc_ar" class="form-control"  > {{ $property->property_desc_ar }}</textarea>
                    </div>

                    {{-- type --}}
                    <div class="form-group">
                        <label> {{ __("custom.Property Type en") }}</label>
                        <div class="form-group">
                            <label for="experience"> Experience </label>
                            <input type="radio" name="type_en" id="experience" value="Experience" class="form-check"  {{ $property->type_en == 'Experience' ? 'checked' : '' }} >
                        </div>

                        <div class="form-group">
                            <label for="achievements"> Achievements </label>
                            <input type="radio" name="type_en" id="Achievements" value="Achievements" class="form-check" {{ $property->type_en == 'Achievements' ? 'checked' : '' }}>
                        </div>

                        <div class="form-group">
                            <label for="qualifications"> Qualifications </label>
                            <input type="radio" name="type_en" id="qualifications" value="Qualifications" class="form-check" {{ $property->type_en == 'Qualifications' ? 'checked' : '' }}  >
                        </div>
                    </div>

                    <div class="form-group">
                        <label> {{ __("custom.Property Type ar") }}</label>
                        <div class="form-group">
                            <label for="experience"> الخبرة </label>
                            <input type="radio" name="type_ar" id="experience" value="الخبرة" class="form-check"  {{ $property->type_ar == 'الخبرة' ? 'checked' : '' }} >
                        </div>

                        <div class="form-group">
                            <label for="achievements"> الانجازات </label>
                            <input type="radio" name="type_ar" id="الانجازات" value="achievements" class="form-check" {{ $property->type_ar == 'الانجازات' ? 'checked' : '' }}>
                        </div>

                        <div class="form-group">
                            <label for="qualifications"> المؤهلات </label>
                            <input type="radio" name="type_ar" id="qualifications" value="المؤهلات" class="form-check" {{ $property->type_ar == 'المؤهلات' ? 'checked' : '' }}  >
                        </div>
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
