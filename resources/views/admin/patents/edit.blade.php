@php $name = 'patents' @endphp
@extends('layouts.admin.app')
@section('content')


    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{$name}} | Edit {{ $patent->{'title_'.LaravelLocalization::getCurrentLocale()} }}</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.'.$name.'.update', $patent->id) }}" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')

                    {{--Title--}}
                    <div class="form-group">
                        <label>{{__("custom.News Title en")}}  <span class="text-danger">*</span></label>
                        <input type="text" name="title_en" autofocus class="form-control" value="{{ old('title_en', $patent->title_en) }}" >
                    </div>


                    {{--Title--}}
                    <div class="form-group">
                        <label>{{__("custom.News Title ar")}}  <span class="text-danger">*</span></label>
                        <input type="text" name="title_ar" autofocus class="form-control" value="{{ old('title_ar', $patent->title_ar) }}" >
                    </div>

                    {{--description--}}
                    <div class="form-group">
                        <label> {{ __("custom.patent Content en") }} <span class="text-danger">*</span></label>
                        <textarea name="content_en" class="form-control" cols="30" rows="10" id="content-textarea">{{ old('content_en', $patent->content_en) }}</textarea>
                    </div>


                    {{--description--}}
                    <div class="form-group">
                        <label> {{ __("custom.patent Content ar") }} <span class="text-danger">*</span></label>
                        <textarea name="content_ar" class="form-control" cols="30" rows="10" id="content-textarea">{{ old('content_ar', $patent->content_ar) }}</textarea>
                    </div>

                    {{-- Name --}}
                    <div class="form-group">
                        <label>{{ __("custom.Instructor's name") }} en<span class="text-danger">*</span></label>
                        <input type="text" name="Instructor_en" autofocus class="form-control" value="{{ old('Instructor_en', $patent->Instructor_en) }}" >
                    </div>

                    {{-- Name --}}
                    <div class="form-group">
                        <label>{{ __("custom.Instructor's name") }} ar<span class="text-danger">*</span></label>
                        <input type="text" name="Instructor_ar" autofocus class="form-control" value="{{ old('Instructor_ar', $patent->Instructor_ar) }}" >
                    </div>

                    {{-- Name --}}
                    <div class="form-group">
                        <label>{{ __("custom.Donor") }} en<span class="text-danger">*</span></label>
                        <input type="text" name="Donor_en" autofocus class="form-control" value="{{ old('Donor_en', $patent->Donor_en) }}" >
                    </div>

                    {{-- Name --}}
                    <div class="form-group">
                        <label>{{ __("custom.Donor") }} ar<span class="text-danger">*</span></label>
                        <input type="text" name="Donor_ar" autofocus class="form-control" value="{{ old('Donor_ar', $patent->Donor_ar) }}" >
                    </div>
                    {{-- Name --}}
                    <div class="form-group">
                        <label>{{ __("custom.the year") }} <span class="text-danger">*</span></label>
                        <input type="number" name="year" autofocus class="form-control" value="{{ old('year', $patent->year) }}" >
                    </div>
                    
                    <div class="form-group">
                        <label for="department_id"> {{ __('custom.Department Name') }}</label>
                        <select id="department_id" name="department_id" class="form-control">
                            <option value="0" disabled selected>-- Select --</option>

                            @foreach ($departments as $department)
                            <option value="{{ $department->id }}"
                                {{ $patent->department->{'name_' . LaravelLocalization::getCurrentLocale()} == $department->{'name_' . LaravelLocalization::getCurrentLocale()} ? 'selected' : '' }}>
                                {{ $department->{'name_' . LaravelLocalization::getCurrentLocale()} }}
                            </option>
                            @endforeach

                        </select>
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
            .create( document.querySelector( '#content-textarea' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection


