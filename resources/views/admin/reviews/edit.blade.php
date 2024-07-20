@php $name = 'reviews' @endphp
@extends('layouts.admin.app')
@section('content')
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{ __('custom.frontend.Study in Iraq') }}</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.' . $name . '.update', $review->id) }}"
                enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')
                    <input type="text" name="id" autofocus class="form-control"
                    value="{{ old('name', $review->id) }}" disabled hidden>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.full name') }}<span class="text-danger">*</span></label>
                        <input type="text" name="name" autofocus class="form-control"
                            value="{{ old('name', $review->name) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.phone number') }}<span class="text-danger">*</span></label>
                        <input type="text" name="phone" autofocus class="form-control"
                            value="{{ old('phone', $review->phone) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.Email Address') }} <span class="text-danger">*</span></label>
                        <input type="text" name="email" autofocus class="form-control"
                            value="{{ old('email', $review->email) }}" disabled>
                    </div>
                    
                    <div class="form-group">
                        <label>{{ __('custom.departmentreview') }} <span class="text-danger">*</span></label>
                        <input type="text" name="department_id" autofocus class="form-control"
                            value="{{ old('department_id', $review->sustainable->{'name_' . LaravelLocalization::getCurrentLocale()}) }}"
                            disabled>
                    </div>
                    
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.qualification') }} <span class="text-danger">*</span></label>
                        <input type="text" name="qualification" autofocus class="form-control"
                            value="{{ old('qualification', $review->qualification) }}" disabled>
                    </div>



                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.trac') }}<span class="text-danger">*</span></label>
                        <input type="text" name="trac" autofocus class="form-control"
                            value="{{ old('trac', $review->trac) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.trac_tow') }}<span class="text-danger">*</span></label>
                        <input type="text" name="trac_tow" autofocus class="form-control"
                            value="{{ old('trac_tow', $review->trac_tow) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.rate') }}<span class="text-danger">*</span></label>
                        <input type="text" name="rate" autofocus class="form-control"
                            value="{{ old('rate', $review->rate) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.year') }}<span class="text-danger">*</span></label>
                        <input type="text" name="year" autofocus class="form-control"
                            value="{{ old('year', $review->year) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.work') }}<span class="text-danger">*</span></label>
                        <input type="text" name="work" autofocus class="form-control"
                            value="{{ old('work', $review->work) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.work_state') }} <span class="text-danger">*</span></label>
                        <input type="text" name="work_state" autofocus class="form-control"
                            value="{{ old('work_state', $review->work_state) }}" disabled>
                    </div>

                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.work_link') }} <span class="text-danger">*</span></label>
                        <input type="text" name="work_link" autofocus class="form-control"
                            value="{{ old('work_link', $review->work_link) }}" disabled>
                    </div>
                    {{-- name --}}
                    <div class="form-group">
                        <label>{{ __('custom.message') }} <span class="text-danger">*</span></label>
                        <input type="text" name="message" autofocus class="form-control"
                            value="{{ old('message', $review->message) }}" disabled>
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
