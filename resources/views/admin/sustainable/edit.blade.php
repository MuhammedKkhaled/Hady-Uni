@php $name = 'sustainable' @endphp
@extends('layouts.admin.app')
@section('content')
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{ $name }} | Edit {{ $sustainable->name }}</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.' . $name . '.update', $sustainable) }}" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')

                                        {{-- Categories --}}
                                        <div class="form-group">
                                            <label for="cate">{{ __("custom.Categories Name") }} <span class="text-danger">*</span></label>
                                            <select class="form-control" id="cate" name="category_id">
                                                <option value="0" selected disabled>-- Choose category --</option>
                                                @foreach($categories as $categorie)
                                                    <option
                                                        value="{{ $categorie->id   }}"> {{ $categorie->{"name_".LaravelLocalization::getCurrentLocale() } }} </option>
                                                @endforeach
                                            </select>
                                        </div>
                    
                                        {{-- Name --}}
                                        <div class="form-group">
                                            <label>{{ __("custom.Department Name en") }}<span class="text-danger">*</span></label>
                                            <input type="text" name="titel_en" autofocus class="form-control" value="{{ old('titel_en') }}" >
                                        </div>
                    
                                        {{-- Name --}}
                                        <div class="form-group">
                                            <label>{{ __("custom.Department Name ar") }}<span class="text-danger">*</span></label>
                                            <input type="text" name="titel_ar" autofocus class="form-control" value="{{ old('titel_ar') }}" >
                                        </div>
                    
                                        {{-- department_definition --}}
                                        <div class="form-group">
                                                <label for="department_definition_en">{{ __("custom.Department Definition en") }} <span class="text-danger">*</span></label>
                                            <input type="text" id="department_definition_en" name="department_definition_en" autofocus class="form-control" value="{{ old('department_definition_en') }}" >
                                        </div>
                    
                                        {{-- department_definition --}}
                                        <div class="form-group">
                                            <label for="department_definition_ar">{{ __("custom.Department Definition ar") }} <span class="text-danger">*</span></label>
                                            <input type="text" id="department_definition_ar" name="department_definition_ar" autofocus class="form-control" value="{{ old('department_definition_ar') }}" >
                                        </div>
                    
                    {{-- image --}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __('custom.Department Image') }}</label>
                        <input type="file" name="image" id="input-file-now" class="dropify"
                            @if (isset($sustainable)) data-default-file="{{ $sustainable->image_path }}" data-show-remove="false" @endif
                            data-height="585" />
                    </div>

                    {{-- file --}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __('custom.Department File') }} </label>
                        <input type="file" name="file" id="input-file-now" class="dropify"
                            @if (isset($sustainable)) data-default-file="{{ $sustainable->file_path }}" data-show-remove="false" @endif
                            data-height="585" />
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
