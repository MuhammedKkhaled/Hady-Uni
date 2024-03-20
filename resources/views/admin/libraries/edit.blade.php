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

                    {{-- Categories --}}
                    <div class="form-group">
                        <label for="cate">{{ __("custom.Categories Name") }} <span class="text-danger">*</span></label>
                        <select class="form-control" id="cate" name="category_id">
                            <option value="0" selected disabled>-- Choose category --</option>
                            @foreach($categories as $categorie)
                                <option
                                    value="{{ $categorie->id}}" {{ $library->category_id == $categorie->id ? 'selected' : ''   }}> {{ $categorie->{'name_'. LaravelLocalization::getCurrentLocale()} }} </option>
                            @endforeach
                        </select>
                    </div>


                    {{-- Name --}}
                    <div class="form-group">
                        <label>{{ __("custom.Library Name en") }}<span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control"
                               value="{{ old('name_en' , $library->name_en) }}" required>
                    </div>

                    {{-- Name --}}
                    <div class="form-group">
                        <label>{{ __("custom.Library Name ar") }} <span class="text-danger">*</span></label>
                        <input type="text" name="name_ar" autofocus class="form-control"
                               value="{{ old('name_ar' , $library->name_ar) }}" required>
                    </div>

                    {{--Specifications--}}
                    <div class="form-group">
                        <label for="specialization_name_en">Specialization Name </label>
                        <select id="specialization_name_en" name="specialization_name_en" class="form-control">
                            @foreach($specifications as $specification)
                                <option
                                    value="{{ $specification->name_en }}" {{ $library->specialization_name_en == $specification->name_en ? 'selected' : '' }}>
                                    {{ $specification->name_en }}
                                </option>
                            @endforeach
                        </select>
                    </div>

        {{--Specifications--}}
                    <div class="form-group">
                        <label for="specialization_name_ar">Specialization Name </label>
                        <select id="specialization_name_ar" name="specialization_name_ar" class="form-control">
                            @foreach($specifications as $specification)
                                <option
                                    value="{{ $specification->name_ar }}" {{ $library->specialization_name_ar == $specification->name_ar ? 'selected' : '' }}>
                                    {{ $specification->name_ar }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Date --}}
                    <div class="form-group">
                        <label for="published_at">File Published Date<span class="text-danger">*</span></label>
                        <input type="date" name="published_at" id="published_at" autofocus class="form-control"
                               value="{{ $library->published_at }}" required>
                    </div>


                    {{--image--}}
                    <div class="form-group">
                        <label class="text-capitalize">Conference Image</label>
                        <input type="file" name="file" id="input-file-now" class="dropify"
                               @if(isset($library)) data-default-file="{{$library->file_path}}" data-show-remove="false"
                               @endif  data-height="355"/>
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
