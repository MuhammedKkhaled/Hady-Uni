@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@php $name = 'categories' @endphp
@extends('layouts.admin.app')
@section('content')

    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{$name}} |
                Edit {{$category->{'name_'.LaravelLocalization::getCurrentLocale()} }}</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.'.$name.'.update', $category) }}" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')

                    {{-- Name --}}
                    <div class="form-group">
                        <label>{{ __("custom.Department Name en") }}<span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control"
                               value="{{ old('name_en',$category->name_en) }}">
                    </div>

                    {{-- Name --}}
                    <div class="form-group">
                        <label>{{ __("custom.Department Name ar") }}<span class="text-danger">*</span></label>
                        <input type="text" name="name_ar" autofocus class="form-control" value="{{ old('name_ar',$category->name_ar) }}">
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




