@php $name = 'specifications' @endphp
@extends('layouts.admin.app')
@section('content')


    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{ __("custom.Specifications | Create") }}</h3>
        </div>
        <div class="card-body">
            <form class="form" action="{{ route('admin.'.$name.'.store') }}" method="POST">
                <div class="card-body">
                    @csrf
                    @method('post')
                    @include('admin.partials._errors')
                    {{-- Name --}}

                    <div class="form-group">
                        <label>{{ __("custom.Specifications Name en") }} <span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en') }}" required>
                    </div>

                    <div class="form-group">
                        <label>{{ __("custom.Specifications Name ar") }} <span class="text-danger">*</span></label>
                        <input type="text" name="name_ar" autofocus class="form-control" value="{{ old('name_ar') }}" required>
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

@section('js')
    <script>
        ClassicEditor
            .create( document.querySelector( '#content-textarea' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection



