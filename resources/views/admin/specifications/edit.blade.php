@php $name = 'specifications' @endphp
@extends('layouts.admin.app')
@section('content')


    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{ __("custom.Specifications Edit") }} | {{$specification->name}}</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.'.$name.'.update', $specification) }}">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')


                    {{--name--}}
                    <div class="form-group">
                        <label>{{__("custom.Specifications Name en")}} <span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en', $specification->name_en) }}" >
                        <input type="hidden" value="{{ $specification }}">
                    </div>

                    {{--name--}}
                    <div class="form-group">
                        <label>{{__("custom.Specifications Name ar")}} <span class="text-danger">*</span></label>
                        <input type="text" name="name_ar" autofocus class="form-control" value="{{ old('name_ar', $specification->name_ar) }}" >
                        <input type="hidden" value="{{ $specification }}">
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
