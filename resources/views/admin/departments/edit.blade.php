@php $name = 'departments' @endphp
@extends('layouts.admin.app')
@section('content')


    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{$name}} | Edit {{$department->name}}</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.'.$name.'.update', $department) }}" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')

                    {{--Title--}}
                    <div class="form-group">
                        <label>Department Name  <span class="text-danger">*</span></label>
                        <input type="text" name="name" autofocus class="form-control" value="{{ old('name', $department->name) }}" required>
                    </div>

                    {{--department_definition--}}
                    <div class="form-group">
                        <label>Department Definition  <span class="text-danger">*</span></label>
                        <input type="text" name="department_definition" autofocus class="form-control" value="{{ old('department_definition', $department->department_definition) }}" required>
                    </div>

                    {{--department_message--}}
                    <div class="form-group">
                        <label>Department Message<span class="text-danger">*</span></label>
                        <input type="text" name="department_message" autofocus class="form-control" value="{{ old('department_message', $department->department_message) }}" required>
                    </div>

                    {{--department_vision--}}
                    <div class="form-group">
                        <label>Department Vision  <span class="text-danger">*</span></label>
                        <input type="text" name="department_vision" autofocus class="form-control" value="{{ old('department_vision', $department->department_vision) }}" required>
                    </div>

                    {{--Title--}}
                    <div class="form-group">
                        <label>Department Goals  <span class="text-danger">*</span></label>
                        <input type="text" name="department_goals" autofocus class="form-control" value="{{ old('department_goals', $department->department_goals) }}" required>
                    </div>

                    {{--Specifications--}}
                    <div class="form-group">
                        <label for="Specifications"> Specification Name </label>
                        <select id="Specifications" name="specification_name" class="form-control">
                            @foreach($specifications as $specification)
                            <option value="{{ $specification->name }}" {{ $department->specification_name == $specification->name ? 'selected' : '' }}>
                                {{ $specification->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Minimum Percentage</label>
                        <input type="text" name="minimum_percent" autofocus class="form-control" value="{{ old('minimum_percent', $department->minimum_percent) }}">
                    </div>

                    {{-- Maximum Percent --}}
                    <div class="form-group">
                        <label> Maximum Percentage <span class="text-danger">*</span></label>
                        <input type="text" name="maximum_percent" autofocus class="form-control" value="{{ old('maximum_percent' , $department->maximum_percent) }}" required>
                    </div>

                    {{-- price --}}
                    <div class="form-group">
                        <label> Price For Join the Department <span class="text-danger">*</span></label>
                        <input type="number" name="price" autofocus class="form-control" value="{{ old('price' , $department->price) }}" required>
                    </div>

                    {{--image--}}
                    <div class="form-group">
                        <label class="text-capitalize">Main Department Images</label>
                        <input type="file" name="image" id="input-file-now" class="dropify" @if(isset($department)) data-default-file="{{$department->image_path}}" data-show-remove="false" @endif data-height="585"/>
                    </div>

                    {{--file--}}
                    <div class="form-group">
                        <label class="text-capitalize">Main Department File </label>
                        <input type="file" name="file" id="input-file-now" class="dropify" @if(isset($department)) data-default-file="{{$department->file_path}}" data-show-remove="false" @endif data-height="585"/>
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
