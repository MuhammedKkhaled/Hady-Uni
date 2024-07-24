@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@php $name = 'tops' @endphp
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
                        <label for="name_en">{{ __('custom.top Name en') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="name_en" name="name_en" autofocus class="form-control"
                            value="{{ old('name_en') }}">
                    </div>


                    {{-- Name --}}
                    <div class="form-group">
                        <label for="name_ar">{{ __('custom.top Name ar') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="name_ar" name="name_ar" autofocus class="form-control"
                            value="{{ old('name_ar') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="year">{{ __("custom.Year") }} <span
                                class="text-danger">*</span></label>
                        <input type="date" id="year" name="year" autofocus class="form-control"
                               required>
                    </div>

                    <div class="form-group">
                        <label>{{ __("custom.frontend.ranking") }}  <span class="text-danger">*</span></label>
                        <input type="number" name="ranking" autofocus class="form-control" min="0" max="10">
                    </div>
                    
                    <div class="form-group">
                        <label>{{ __("custom.frontend.success percent") }}  <span class="text-danger">*</span></label>
                        <input type="number" name="average" autofocus class="form-control" step="any" min="0" max="100" >
                    </div>
                    {{-- file --}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __('custom.Main Image') }} <span class="text-danger">PNG ,
                                JPg*</span></label>
                        <input type="file" name="image" id="input-file-now" class="dropify"
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
