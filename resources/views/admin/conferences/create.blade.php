@php $name = 'conferences' @endphp
@extends('layouts.admin.app')
@section('content')


    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{$name}} | Create</h3>
        </div>
        <div class="card-body">
            <form class="form" action="{{ route('admin.'.$name.'.store') }}" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('post')
                    @include('admin.partials._errors')

                    {{-- Name --}}
                    <div class="form-group">
                        <label>{{ __("custom.Conference Title") }} <span class="text-danger">*</span></label>
                        <input type="text" name="title" autofocus class="form-control" value="{{ old('title') }}" required>
                    </div>

                    {{-- Locations --}}
                    <div class="form-group">
                        <label>{{ __("custom.Conference Place") }}<span class="text-danger">*</span></label>
                        <input type="text" name="location" autofocus class="form-control" value="{{ old('location') }}" required>
                    </div>

                    {{-- Date --}}
                    <div class="form-group">
                        <label>{{ __("custom.Conference Date") }}<span class="text-danger">*</span></label>
                        <input type="date" name="date" autofocus class="form-control"  required>
                    </div>

                    {{-- Start Time --}}
                    <div class="form-group">
                        <label>{{ __("custom.start Time") }}<span class="text-danger">*</span></label>
                        <input type="time" name="start_time" autofocus class="form-control"  required>
                    </div>

                    {{-- Date --}}
                    <div class="form-group">
                        <label>{{ __("custom.Conference End Time") }}  <span class="text-danger">*</span></label>
                        <input type="time" name="end_time" autofocus class="form-control"  required>
                    </div>

                    {{--image--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Conference Poster") }}</label>
                        <input type="file" name="image" id="input-file-now" class="dropify" data-show-remove="false"  data-height="355"/>
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



