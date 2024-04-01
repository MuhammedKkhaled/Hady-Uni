@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@php $name = 'libraries' @endphp
@extends('layouts.admin.app')
@section('content')

    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{$name}} | Create</h3>
        </div>
        <div class="card-body">
            <form class="form" action="{{ route('admin.'.$name.'.store') }}" method="POST"
                  enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('post')
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

                    {{-- Date --}}
                    <div class="form-group">
                        <label for="published_at"> File Published Data <span class="text-danger">*</span></label>
                        <input type="date" name="published_at" id="published_at" autofocus class="form-control"
                               >
                    </div>

                    {{-- Specialization --}}
                    <div class="form-group">
                        <label for="specialization_name_en"> Specialization Name<span class="text-danger">*</span></label>
                        <select class="form-control" id="specialization_name_en" name="specialization_name_en">
                            <option value="0" selected disabled>-- Choose Specialization in English --</option>
                            @foreach($specifications as $specification)
                                <option
                                    value="{{ $specification->name_en  }} "> {{ $specification->name_en }} </option>
                            @endforeach
                        </select>
                    </div>

                {{-- Specialization --}}
                    <div class="form-group">
                        <label for="specialization_name_ar"> Specialization Name<span class="text-danger">*</span></label>
                        <select class="form-control" id="specialization_name_ar" name="specialization_name_ar">
                            <option value="0" selected disabled>-- Choose Specialization --</option>
                            @foreach($specifications as $specification)
                                <option
                                    value="{{ $specification->name_ar   }} "> {{ $specification->name_ar }} </option>
                            @endforeach
                        </select>
                    </div>

                    {{--image--}}
                    <div class="form-group">
                        <label class="text-capitalize">Library File</label>
                        <input type="file" name="file" id="input-file-now" class="dropify" data-show-remove="false"
                               data-height="355"/>
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

@section('js')
    <script>
        ClassicEditor
            .create(document.querySelector('#content-textarea'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection



