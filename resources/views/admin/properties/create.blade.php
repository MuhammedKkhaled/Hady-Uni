@php $name = 'properties' @endphp
@extends('layouts.admin.app')
@section('content')


    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">Create |  {{$name}}</h3>
        </div>
        <div class="card-body">
            <form class="form" action="{{ route('admin.'.$name.'.store') }}" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('post')
                    @include('admin.partials._errors')

                    {{-- Name --}}
                    <div class="form-group">
                        <label for="teacher_id">{{ __("Teacher Name") }}  <span class="text-danger">*</span></label>

                        <select name="teacher_id" id="teacher_id" class="form-control">
                            <option value="0" selected disabled> -- Choose Teacher -- </option>
                          @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}"> {{ $teacher->name_en }} </option>
                          @endforeach
                        </select>
                    </div>

                    {{-- property_title --}}
                    <div class="form-group">
                        <label for="property_title_en">{{ __("Custom.Property Title en") }} <span class="text-danger">*</span></label>
                        <input type="text" id="property_title_en" name="property_title_en" placeholder="Enter Property Title" autofocus class="form-control" value="{{ old('property_title_en') }}" required>
                    </div>
                    {{-- property_title --}}
                    <div class="form-group">
                        <label for="property_title_ar">{{ __("Custom.Property Title ar") }}  <span class="text-danger">*</span></label>
                        <input type="text" id="property_title_ar" name="property_title_ar" placeholder="Enter Property Title" autofocus class="form-control" value="{{ old('property_title_ar') }}" required>
                    </div>

                    {{-- property_desc --}}
                    <div class="form-group">
                        <label for="property_desc_en"> {{ __("Custom.Property Description en") }} <span class="text-danger">*</span></label>
                        <textarea name="property_desc_en" id="property_desc_en" class="form-control" value="{{ old('property_desc_en') }}" required></textarea>
                    </div>

                    {{-- property_desc --}}
                    <div class="form-group">
                        <label for="property_desc_ar">  {{ __("Custom.Property Description ar") }} <span class="text-danger">*</span></label>
                        <textarea name="property_desc_ar" id="property_desc_ar" class="form-control" value="{{ old('property_desc_ar') }}" required></textarea>
                    </div>

                    {{-- type --}}
                    <div class="form-group">
                        <label>
                            <h3>
                            {{ __("custom.Property Type en") }}
                            </h3>

                        </label>

                        <div class="form-group"
                        >
                            <label for="exper">
                            <h6>

                                Experience
                            </h6>

                            </label>
                            <input type="radio" id="exper" name="type_en" value="Experience" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ache">
                                <h6>
                                    Achievements
                            </h6>

                            </label>
                            <input type="radio"  id="ache" name="type_en" value="Achievements" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="qual">
                            <h6>

                                Qualifications
                            </h6>

                            </label>
                            <input type="radio"  id="qual" name="type_en" value="Qualifications" class="form-control">
                        </div>

                    </div>

                        <div class="form-group">
                                <label>
                                    <h3>
                                        {{ __("custom.Property Type ar") }}
                                    </h3>

                                </label>
                            <div class="form-group"
                            >
                                <label for="exper">
                                    <h6>

                                        الخبرة
                                    </h6>

                                </label>
                                <input type="radio" id="exper" name="type_ar" value="الخبرة" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="ache">
                                    <h6>
                                        الانجازات
                                    </h6>

                                </label>
                                <input type="radio"  id="ache" name="type_ar" value="الانجازات" class="form-control">
                            </div>
                            <div class="form-group">
                            <label for="qual">
                                <h6>

                                    المؤهلات
                                </h6>

                            </label>
                            <input type="radio"  id="qual" name="type_ar" value="المؤهلات" class="form-control">
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
