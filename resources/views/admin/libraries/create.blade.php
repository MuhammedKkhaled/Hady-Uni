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

                    {{-- Name --}}
                    <div class="form-group">
                        <label for="name_en">{{ __("custom.Research Title") }} en<span class="text-danger">*</span></label>
                        <input type="text" id="name_en" name="name_en" autofocus class="form-control"
                               value="{{ old('name_en') }}" >
                    </div>

                    {{-- Name --}}
                    <div class="form-group">
                        <label for="name_ar">{{ __("custom.Research Title") }} ar<span class="text-danger">*</span></label>
                        <input type="text" id="name_ar" name="name_ar" autofocus class="form-control"
                               value="{{ old('name_ar') }}" >
                    </div>
                    
                    {{-- Name --}}
                    <div class="form-group">
                        <label for="publisher_en">{{ __("custom.Publisher") }} en<span class="text-danger">*</span></label>
                        <input type="text" id="publisher_en" name="publisher_en" autofocus class="form-control"
                               value="{{ old('publisher_en') }}" >
                    </div>

                    {{-- Name --}}
                    <div class="form-group">
                        <label for="publisher_ar">{{ __("custom.Publisher") }} ar<span class="text-danger">*</span></label>
                        <input type="text" id="publisher_ar" name="publisher_ar" autofocus class="form-control"
                               value="{{ old('publisher_ar') }}" >
                    </div>

                    {{-- Date --}}
                    <div class="form-group">
                        <label for="published_at">{{ __("custom.date of publication") }}<span class="text-danger">*</span></label>
                        <input type="date" name="published_at" id="published_at" autofocus class="form-control"
                               >
                    </div>

                    {{-- Specialization --}}
                    <div class="form-group">
                        <label for="specialization_name_en"> {{ __("custom.department") }} EN<span class="text-danger">*</span></label>
                        <input type="text" name="specialization_name_en" id="specialization_name_en" autofocus class="form-control"
                               >

                    </div>

                {{-- Specialization --}}
                    <div class="form-group">
                        <label for="specialization_name_ar">{{ __("custom.department") }} AR<span class="text-danger">*</span></label>
                        <input type="text" name="specialization_name_ar" id="specialization_name_ar" autofocus class="form-control"
                               >
                    </div>

                    {{--image--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Link") }}</label>
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

@section('js')
    <script>
        ClassicEditor
            .create(document.querySelector('#content-textarea'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection



