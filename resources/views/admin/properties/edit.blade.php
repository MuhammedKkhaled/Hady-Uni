@php $name = 'properties' @endphp
@extends('layouts.admin.app')
@section('content')


    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{$name}} | Edit {{$property->name}}</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.'.$name.'.update', $property->id) }}" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')

                    {{-- Name --}}
                    <div class="form-group">
                        <label for="teacher_id">Teacher Name  <span class="text-danger">*</span></label>
                        <select id="teacher_id" name="teacher_id" class="form-control">
                            @foreach($teachers as $teacher)
                                <option value="{{ $teacher->id }}" {{ $property->teacher->name == $teacher->name ? 'selected' : '' }}>
                                    {{ $teacher->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- property_title --}}
                    <div class="form-group">
                        <label for="property_title">Property Title <span class="text-danger">*</span></label>
                        <input type="text" id="property_title" name="property_title" placeholder="Enter Property Title" autofocus class="form-control" value="{{ old('property_title',$property->property_title) }}" required>
                    </div>

                    {{-- property_desc --}}
                    <div class="form-group">
                        <label for="property_desc"> Property Description <span class="text-danger">*</span></label>
                        <textarea name="property_desc" id="property_desc" class="form-control"  required>
                            {{ $property->property_desc }}
                        </textarea>
                    </div>

                    {{-- type --}}
                    <div class="form-group">
                        <label for="facebook">Property Type</label>
                        <input type="radio" name="type" value="experience" class="form-check"  {{ $property->type == 'experience' ? 'checked' : '' }} >Experience
                        <input type="radio" name="type" value="achievements" class="form-check" {{ $property->type == 'achievements' ? 'checked' : '' }}>Achievements
                        <input type="radio" name="type" value="qualifications" class="form-check" {{ $property->type == 'qualifications' ? 'checked' : '' }}  >Qualifications
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
