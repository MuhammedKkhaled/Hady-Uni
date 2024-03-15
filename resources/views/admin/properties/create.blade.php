@php $name = 'properties' @endphp
@extends('layouts.admin.app')
@section('content')


    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">Create |  {{$name}}</h3>
        </div>
        <div class="card-body">
            <form class="form" action="{{ route('admin.'.$name.'.store') }}" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('post')
                    @include('admin.partials._errors')

                    {{-- Name --}}
                    <div class="form-group">
                        <label for="teacher_id">Teacher Name  <span class="text-danger">*</span></label>

                        <select name="teacher_id" id="teacher_id" class="form-control">
                            <option value="0" selected disabled> -- Choose Teacher -- </option>
                          @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}"> {{ $teacher->name }} </option>
                          @endforeach
                        </select>
                    </div>

                    {{-- property_title --}}
                    <div class="form-group">
                        <label for="property_title">Property Title <span class="text-danger">*</span></label>
                        <input type="text" id="property_title" name="property_title" placeholder="Enter Property Title" autofocus class="form-control" value="{{ old('property_title') }}" required>
                    </div>

                    {{-- property_desc --}}
                    <div class="form-group">
                        <label for="property_desc"> Property Description <span class="text-danger">*</span></label>
                        <textarea name="property_desc" id="property_desc" class="form-control" value="{{ old('property_desc') }}" required></textarea>
                    </div>

                    {{-- type --}}
                    <div class="form-group">
                        <label for="facebook">Property Type</label>
                        <input type="radio" name="type" value="experience" class="form-control">Experience
                        <input type="radio" name="type" value="achievements" class="form-control">Achievements
                        <input type="radio" name="type" value="qualifications" class="form-control">Qualifications
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
