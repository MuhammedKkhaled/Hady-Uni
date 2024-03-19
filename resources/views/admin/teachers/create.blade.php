@php $name = 'teachers' @endphp
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
                        <label for="name">{{ __("custom.Teacher Name") }} <span class="text-danger">*</span></label>
                        <input type="text" id="name" name="name" autofocus class="form-control" value="{{ old('name') }}" required>
                    </div>

                    {{-- Phone --}}
                    <div class="form-group">
                        <label for="phone">{{ __("custom.Teacher Phone") }}<span class="text-danger">*</span></label>
                        <input type="text" id="phone" name="phone" placeholder=" Ex: +964 72 050 0205" autofocus class="form-control" value="{{ old('phone') }}" required>
                    </div>

                    {{-- Email --}}
                    <div class="form-group">
                        <label for="email">{{ __("custom.Teacher email") }} <span class="text-danger">*</span></label>
                        <input type="email" name="email"  id="email" autofocus class="form-control"  value="{{ old('email') }}" required>
                    </div>

                    {{-- Facebook --}}
                    <div class="form-group">
                        <label for="facebook">{{ __("custom.Teacher Facebook Account") }}</label>
                        <input type="text" id="facebook" name="facebook" autofocus class="form-control"  value="{{ old('facebook') }}" >
                    </div>

                    {{-- Linkedin --}}
                    <div class="form-group">
                        <label for="linkedin">{{ __("custom.Teacher LinkedIn Account") }}</label>
                        <input type="text" id="linkedin" name="linkedin" autofocus class="form-control"  value="{{ old('linkedin') }}" >
                    </div>

                    {{-- Twitter --}}
                    <div class="form-group">
                        <label for="twitter">{{ __("custom.Teacher Twitter Account") }}</label>
                        <input type="text" id="twitter" name="twitter" autofocus class="form-control"  value="{{ old('twitter') }}" >
                    </div>

                    {{-- specialization --}}
                    <div class="form-group">
                        <label for="specialization">{{ __("custom.Specialization") }} <span class="text-danger">*</span></label>
                        <input type="text" name="specialization" id="specialization" autofocus class="form-control"  value="{{ old('specialization') }}" required>
                    </div>

                    {{-- brief --}}
                    <div class="form-group">
                        <label for="brief"> {{ __("custom.Brief") }} <span class="text-danger">*</span></label>
                        <textarea id="brief" name="brief" autofocus class="form-control" value="{{ old('brief') }}" required
                          cols="30" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="type">{{ __("custom.Teacher Type") }}</label>
                        <select id="type" class="form-control" name="type">
                            <option value="-1"> -- Please Add A Teacher  </option>
                        @foreach($types as $value =>$label)
                                <option value="{{ $value }}"> {{ $label }} </option>
                            @endforeach
                        </select>
                    </div>

                    {{--image--}}
                    <div class="form-group">
                        <label class="text-capitalize" for="input-file-now"> {{ __("custom.Teacher Photo") }} <span class="text-danger">*</span></label>
                        <input type="file" name="image" id="input-file-now" class="dropify" data-show-remove="false" data-height="355"/>
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
