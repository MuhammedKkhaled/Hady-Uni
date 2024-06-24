@php $name = 'studies' @endphp
@extends('layouts.admin.app')
@section('content')


    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{ __('custom.frontend.Study in Iraq') }}</h3>
        </div>
        <div class="card-body">

                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')


                    {{--name--}}
                    <div class="form-group">
                        <label>{{ __('custom.full name') }}<span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en', $study->name) }}" disabled>
                    </div>

                    {{--name--}}
                    <div class="form-group">
                        <label>{{ __('custom.phone number') }}<span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en', $study->phone) }}" disabled>
                    </div>
                    {{--name--}}
                    <div class="form-group">
                        <label>{{ __('custom.Email Address') }} <span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en', $study->email) }}" disabled>
                    </div>
                    {{--name--}}
                    <div class="form-group">
                        <label>{{ __('custom.Postal code') }}<span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en', $study->zip_code) }}" disabled>
                    </div>
                    {{--name--}}
                    <div class="form-group">
                        <label>{{ __('custom.City') }}<span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en', $study->city) }}" disabled>
                    </div>
                    {{--name--}}
                    <div class="form-group">
                        <label>{{ __('custom.Living') }}<span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en', $study->living) }}" disabled>
                    </div>
                    {{--name--}}
                    <div class="form-group">
                        <label>{{ __('custom.Nationality') }}<span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en', $study->nationality) }}" disabled>
                    </div>
                    {{--name--}}
                    <div class="form-group">
                        <label>{{ __('custom.marital status') }}<span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en', $study->marital) }}" disabled>
                    </div>
                    {{--name--}}
                    <div class="form-group">
                        <label>{{ __('custom.qualification') }} <span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en', $study->qualification) }}" disabled>
                    </div>
                    {{--name--}}
                    <div class="form-group">
                        <label>{{ __('custom.Enterprise') }}  <span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en', $study->enterprise) }}" disabled>
                    </div>

                    {{--name--}}
                    <div class="form-group">
                        <label>{{ __('custom.Languages') }}  <span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en', $study->languages) }}" disabled>
                    </div>
                    {{--name--}}
                    <div class="form-group">
                        <label>{{ __('custom.departmentstudy') }}  <span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en', $study->sustainable->{'name_'.LaravelLocalization::getCurrentLocale()}) }}" disabled>
                    </div>
                    {{--name--}}
                    <div class="form-group">
                        <label>{{ __('custom.Languages') }}  <span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en', $study->in_iraq) }}" disabled>
                    </div>
                    {{--name--}}
                    <div class="form-group">
                        <label>{{ __('custom.Skills and other details') }}  <span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en', $study->message) }}" disabled>
                    </div>
                    
                    <div class="form-group">
                        <a href="{{ Storage::url('uploads/study/' . $study->personal)}}" target=""><img src="{{ Storage::url('uploads/study/' . $study->personal)}}" height="355px" width="33%"></a>
                        <a href="{{ Storage::url('uploads/study/' . $study->passport)}}" target=""><img src="{{ Storage::url('uploads/study/' . $study->passport)}}" height="355px" width="33%"></a>
                        <a href="{{ Storage::url('uploads/study/' . $study->certificate)}}" target=""><img src="{{ Storage::url('uploads/study/' . $study->certificate)}}" height="355px" width="33%"></a>
                        <a href="{{ Storage::url('uploads/study/' . $study->cv)}}" target=""><img src="{{ Storage::url('uploads/study/' . $study->cv)}}" height="355px" width="33%"></a>
                        <a href="{{ Storage::url('uploads/study/' . $study->certificate_1)}}" target=""><img src="{{ Storage::url('uploads/study/' . $study->certificate_1)}}" height="355px" width="33%"></a>
                    </div>
                </div>
        </div>
    </div>
@endsection
