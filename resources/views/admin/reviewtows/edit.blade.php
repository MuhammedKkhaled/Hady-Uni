@php $name = 'reviewtows' @endphp
@extends('layouts.admin.app')
@section('content')
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{ __('custom.Employer opinion forms') }}</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.' . $name . '.update', $reviewtow->id) }}"
                enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')
                    <input type="text" name="id" autofocus class="form-control"
                    value="{{ old('name', $reviewtow->id) }}" disabled hidden>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.full name') }}<span class="text-danger">*</span></label>
                        <input type="text" name="name" autofocus class="form-control"
                            value="{{ old('name', $reviewtow->name) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.enterprise') }} <span class="text-danger">*</span></label>
                        <input type="text" name="enterprise" autofocus class="form-control"
                            value="{{ old('enterprise', $reviewtow->enterprise) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.type') }} <span class="text-danger">*</span></label>
                        <input type="text" name="type" autofocus class="form-control"
                            value="{{ old('type', $reviewtow->type) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.employees_name') }} <span class="text-danger">*</span></label>
                        <input type="text" name="employees_name" autofocus class="form-control"
                            value="{{ old('employees_name', $reviewtow->employees_name) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.number_employees') }} <span class="text-danger">*</span></label>
                        <input type="text" name="number_employees" autofocus class="form-control"
                            value="{{ old('number_employees', $reviewtow->number_employees) }}" disabled>
                    </div>
                    
                    
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q1') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q1" autofocus class="form-control"
                            value="{{ old('q1', $reviewtow->q1) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q2') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q2" autofocus class="form-control"
                            value="{{ old('q2', $reviewtow->q2) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q3') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q3" autofocus class="form-control"
                            value="{{ old('q3', $reviewtow->q3) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q4') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q4" autofocus class="form-control"
                            value="{{ old('q4', $reviewtow->q4) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q5') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q5" autofocus class="form-control"
                            value="{{ old('q5', $reviewtow->q5) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q6') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q6" autofocus class="form-control"
                            value="{{ old('q6', $reviewtow->q6) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q7') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q7" autofocus class="form-control"
                            value="{{ old('q7', $reviewtow->q7) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q8') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q8" autofocus class="form-control"
                            value="{{ old('q8', $reviewtow->q8) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q9') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q9" autofocus class="form-control"
                            value="{{ old('q9', $reviewtow->q9) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q10') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q10" autofocus class="form-control"
                            value="{{ old('q10', $reviewtow->q10) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q11') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q11" autofocus class="form-control"
                            value="{{ old('q11', $reviewtow->q11) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q12') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q12" autofocus class="form-control"
                            value="{{ old('q12', $reviewtow->q12) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q13') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q13" autofocus class="form-control"
                            value="{{ old('q13', $reviewtow->q13) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q14') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q14" autofocus class="form-control"
                            value="{{ old('q14', $reviewtow->q14) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q15') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q15" autofocus class="form-control"
                            value="{{ old('q15', $reviewtow->q15) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q16') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q16" autofocus class="form-control"
                            value="{{ old('q16', $reviewtow->q16) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q17') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q17" autofocus class="form-control"
                            value="{{ old('q17', $reviewtow->q17) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q18') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q18" autofocus class="form-control"
                            value="{{ old('q18', $reviewtow->q18) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q19') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q19" autofocus class="form-control"
                            value="{{ old('q19', $reviewtow->q19) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q20') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q20" autofocus class="form-control"
                            value="{{ old('q20', $reviewtow->q20) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.q21') }} <span class="text-danger">*</span></label>
                        <input type="text" name="q21" autofocus class="form-control"
                            value="{{ old('q21', $reviewtow->q21) }}" disabled>
                    </div>



                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.message2') }} <span class="text-danger">*</span></label>
                        <input type="text" name="message" autofocus class="form-control"
                            value="{{ old('message', $reviewtow->message) }}" disabled>
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
