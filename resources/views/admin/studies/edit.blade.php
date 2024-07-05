@php $name = 'studies' @endphp
@extends('layouts.admin.app')
@section('content')
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{ __('custom.frontend.Study in Iraq') }}</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.' . $name . '.update', $study->id) }}"
                enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')
                    <input type="text" name="id" autofocus class="form-control"
                    value="{{ old('name', $study->id) }}" disabled hidden>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.full name') }}<span class="text-danger">*</span></label>
                        <input type="text" name="name" autofocus class="form-control"
                            value="{{ old('name', $study->name) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.phone number') }}<span class="text-danger">*</span></label>
                        <input type="text" name="phone" autofocus class="form-control"
                            value="{{ old('phone', $study->phone) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.Email Address') }} <span class="text-danger">*</span></label>
                        <input type="text" name="email" autofocus class="form-control"
                            value="{{ old('email', $study->email) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.Postal code') }}<span class="text-danger">*</span></label>
                        <input type="text" name="zip_code" autofocus class="form-control"
                            value="{{ old('zip_code', $study->zip_code) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.City') }}<span class="text-danger">*</span></label>
                        <input type="text" name="city" autofocus class="form-control"
                            value="{{ old('city', $study->city) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.Living') }}<span class="text-danger">*</span></label>
                        <input type="text" name="living" autofocus class="form-control"
                            value="{{ old('living', $study->living) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.Nationality') }}<span class="text-danger">*</span></label>
                        <input type="text" name="nationality" autofocus class="form-control"
                            value="{{ old('nationality', $study->nationality) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.marital status') }}<span class="text-danger">*</span></label>
                        <input type="text" name="marital" autofocus class="form-control"
                            value="{{ old('marital', $study->marital) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.qualification') }} <span class="text-danger">*</span></label>
                        <input type="text" name="qualification" autofocus class="form-control"
                            value="{{ old('qualification', $study->qualification) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.Enterprise') }} <span class="text-danger">*</span></label>
                        <input type="text" name="enterprise" autofocus class="form-control"
                            value="{{ old('enterprise', $study->enterprise) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.Languages') }} <span class="text-danger">*</span></label>
                        <input type="text" name="languages" autofocus class="form-control"
                            value="{{ old('languages', $study->languages) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.departmentstudy') }} <span class="text-danger">*</span></label>
                        <input type="text" name="department_id" autofocus class="form-control"
                            value="{{ old('department_id', $study->sustainable->{'name_' . LaravelLocalization::getCurrentLocale()}) }}"
                            disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.Languages') }} <span class="text-danger">*</span></label>
                        <input type="text" name="in_iraq" autofocus class="form-control"
                            value="{{ old('in_iraq', $study->in_iraq) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.Skills and other details') }} <span class="text-danger">*</span></label>
                        <input type="text" name="message" autofocus class="form-control"
                            value="{{ old('message', $study->message) }}" disabled>
                    </div>

                    <div class="form-group">
                        <a href="{{ Storage::url('uploads/study/' . $study->personal) }}" target=""><img
                                src="{{ Storage::url('uploads/study/' . $study->personal) }}" height="355px"
                                width="33%"></a>
                        <a href="{{ Storage::url('uploads/study/' . $study->passport) }}" target=""><img
                                src="{{ Storage::url('uploads/study/' . $study->passport) }}" height="355px"
                                width="33%"></a>
                        <a href="{{ Storage::url('uploads/study/' . $study->certificate) }}" target=""><img
                                src="{{ Storage::url('uploads/study/' . $study->certificate) }}" height="355px"
                                width="33%"></a>
                        <a href="{{ Storage::url('uploads/study/' . $study->cv) }}" target=""><img
                                src="{{ Storage::url('uploads/study/' . $study->cv) }}" height="355px"
                                width="33%"></a>
                        <a href="{{ Storage::url('uploads/study/' . $study->certificate_1) }}" target=""><img
                                src="{{ Storage::url('uploads/study/' . $study->certificate_1) }}" height="355px"
                                width="33%"></a>
                    </div>

                    <div class="form-group">
                        <label for="state"> {{ __('custom.state') }}</label>
                        <select id="state" name="state" class="form-control">
                            <option value="0" disabled selected>-- Select state --</option>
                            <option value="1">{{ __('custom.approved') }}
                            </option>
                            <option value="-1">{{ __('custom.reject') }}
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>{{ __('custom.note') }} <span class="text-danger">*</span></label>
                        <input type="text" name="note" autofocus class="form-control"
                            value="{{ old('note', $study->note) }}">
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
