@php $name = 'teachers' @endphp
@extends('layouts.admin.app')
@section('content')


    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{$name}} | Edit {{$teacher->name}}</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.'.$name.'.update', $teacher->id) }}" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')

                    {{-- Name --}}
                    <div class="form-group">
                        <label>{{ __("custom.Teacher Name en") }}  <span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en' , $teacher->name_en) }}" required>
                    </div>
                    {{-- Name --}}
                    <div class="form-group">
                        <label>{{ __("custom.Teacher Name ar") }}  <span class="text-danger">*</span></label>
                        <input type="text" name="name_ar" autofocus class="form-control" value="{{ old('name_ar' , $teacher->name_ar) }}" required>
                    </div>

                    {{-- phone --}}
                    <div class="form-group">
                        <label>{{ __("custom.Teacher Phone") }}<span class="text-danger">*</span></label>
                        <input type="text" name="phone" autofocus class="form-control" value="{{ old('phone' , $teacher->phone) }}" required>
                    </div>

                    {{-- Email --}}
                    <div class="form-group">
                        <label for="email"> {{ __("custom.Teacher email") }} <span class="text-danger">*</span></label>
                        <input type="email" name="email"  id="email" autofocus class="form-control"  value="{{ old('email' , $teacher->email) }}" required>
                    </div>

                    {{-- Facebook --}}
                    <div class="form-group">
                        <label for="facebook">{{ __("custom.Teacher Facebook Account") }}</label>
                        <input type="text" id="facebook" name="facebook" autofocus class="form-control"  value="{{ old('facebook', $teacher->facebook) }}" >
                    </div>

                    {{-- Linkedin --}}
                    <div class="form-group">
                        <label for="linkedin"> {{ __("custom.Teacher LinkedIn Account") }}</label>
                        <input type="text" id="linkedin" name="linkedin" autofocus class="form-control"  value="{{ old('linkedin') }}" >
                    </div>

                    {{-- Twitter --}}
                    <div class="form-group">
                        <label for="twitter">{{ __("custom.Teacher Twitter Account") }}</label>
                        <input type="text" id="twitter" name="twitter" autofocus class="form-control"  value="{{ old('twitter') }}" >
                    </div>

                    {{-- specialization --}}
                    <div class="form-group">
                        <label for="specialization">{{ __("custom.Specialization en") }}<span class="text-danger">*</span></label>
                        <input type="text" name="specialization_en" id="specialization_en" autofocus class="form-control"  value="{{ old('specialization_en' , $teacher->specialization_en) }}" required>
                    </div>

                    {{-- specialization --}}
                    <div class="form-group">
                        <label for="specialization">{{ __("custom.Specialization ar") }}<span class="text-danger">*</span></label>
                        <input type="text" name="specialization_ar" id="specialization_ar" autofocus class="form-control"  value="{{ old('specialization_ar' , $teacher->specialization_ar) }}" required>
                    </div>



                    {{-- brief --}}
                    <div class="form-group">
                        <label for="brief"> {{ __("custom.Brief en") }}  <span class="text-danger">*</span></label>
                        <textarea id="brief" name="brief_en" autofocus class="form-control"required
                                  cols="30" rows="10">{{ old('brief_en', $teacher->brief_en) }}</textarea>
                    </div>

                    {{-- brief --}}
                    <div class="form-group">
                        <label for="brief"> {{ __("custom.Brief ar") }}  <span class="text-danger">*</span></label>
                        <textarea id="brief" name="brief_ar" autofocus class="form-control"required
                                  cols="30" rows="10">{{ old('brief_ar', $teacher->brief_ar) }}</textarea>
                    </div>

                    {{-- brief --}}
                    <div class="form-group">
                        <label for="type"> {{ __("custom.Teacher Type") }} </label>
                        <select name="type" id="type" class="form-control">
                            @foreach($types as $key => $label)
                                <option value="{{ $key }}" @if($teacher->type == $key) selected @endif>{{ $label }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{--image--}}
                    <div class="form-group">
                        <label class="text-capitalize"> {{ __("custom.Teacher Photo") }}</label>
                        <input type="file" name="image" id="input-file-now" class="dropify" @if(isset($teacher)) data-default-file="{{$teacher->image_path}}" data-show-remove="false" @endif  data-height="355"/>
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
