@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@php $name = 'libraries' @endphp
@extends('layouts.admin.app')
@section('content')

    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{$name}} | Edit {{$library->name}}</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.'.$name.'.update', $library->id) }}"
                  enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')

                    {{-- Name --}}
                    <div class="form-group">
                        <label for="name_en">{{ __("custom.Library Name en") }} <span class="text-danger">*</span></label>
                        <input type="text" id="name_en" name="name_en" autofocus class="form-control"
                               value="{{ old('name_en') }}" >
                    </div>

                    {{-- Name --}}
                    <div class="form-group">
                        <label for="name_ar">{{ __("custom.Library Name ar") }} <span class="text-danger">*</span></label>
                        <input type="text" id="name_ar" name="name_ar" autofocus class="form-control"
                               value="{{ old('name_ar') }}" >
                    </div>
                    
                    {{-- Name --}}
                    <div class="form-group">
                        <label for="publisher_en">جهة النشر بلانجليزي <span class="text-danger">*</span></label>
                        <input type="text" id="publisher_en" name="publisher_en" autofocus class="form-control"
                               value="{{ old('publisher_en') }}" >
                    </div>

                    {{-- Name --}}
                    <div class="form-group">
                        <label for="publisher_ar">جهة النشر بلعربي<span class="text-danger">*</span></label>
                        <input type="text" id="publisher_ar" name="publisher_ar" autofocus class="form-control"
                               value="{{ old('publisher_ar') }}" >
                    </div>

                    {{-- Date --}}
                    <div class="form-group">
                        <label for="published_at"> File Published Data <span class="text-danger">*</span></label>
                        <input type="date" name="published_at" id="published_at" autofocus class="form-control"
                               >
                    </div>

                    {{-- Specialization --}}
                    <div class="form-group">
                        <label for="specialization_name_en"> الفسم<span class="text-danger">*</span></label>
                        <select class="form-control" id="specialization_name_en" name="specialization_name_en">
                            <option value="0" selected disabled>-- Choose Specialization in English --</option>
                            @foreach($depratments as $depratment)
                                <option
                                    value="{{ $depratment->name_en  }} "> {{ $depratment->name_en }} </option>
                            @endforeach
                        </select>
                    </div>

                {{-- Specialization --}}
                    <div class="form-group">
                        <label for="specialization_name_ar">الفسم<span class="text-danger">*</span></label>
                        <select class="form-control" id="specialization_name_ar" name="specialization_name_ar">
                            <option value="0" selected disabled>-- Choose Specialization --</option>
                            @foreach($depratments as $depratment)
                            <option
                                value="{{ $depratment->name_ar  }} "> {{ $depratment->name_ar }} </option>
                        @endforeach
                        </select>
                    </div>

                    {{--image--}}
                    <div class="form-group">
                        <label class="text-capitalize">اللينك</label>
                        <input type="text" id="file" name="file" autofocus class="form-control"
                               value="{{ old('file') }}" >
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
