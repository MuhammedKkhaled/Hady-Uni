@php $name = 'departments' @endphp
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
                        <label>Department Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" autofocus class="form-control" value="{{ old('name') }}" required>
                    </div>

                    {{--Specifications--}}
                    <div class="form-group">
                        <label>Department Specifications <span class="text-danger">*</span></label>
                        <select name="specification_name" class="form-control">
                            <option value="0" selected disabled>-- Select Specification -- </option>
                            @foreach($specifications as $specification)
                                <option value="{{ $specification->name }}"> {{ $specification->name }} </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- minimum percent --}}
                    <div class="form-group">
                        <label> Minimum Percentage </label>
                        <input type="text" name="minimum_percent" autofocus class="form-control" value="{{ old('minimum_percent') }}">
                    </div>

                    {{-- Maximum Percent --}}
                    <div class="form-group">
                        <label> Maximum Percentage <span class="text-danger">*</span></label>
                        <input type="text" name="maximum_percent" autofocus class="form-control" value="{{ old('maximum_percent') }}" required>
                    </div>

                    {{-- price --}}
                    <div class="form-group">
                        <label> Price For Join the Department <span class="text-danger">*</span></label>
                        <input type="number" name="price" autofocus class="form-control" value="{{ old('price') }}" required>
                    </div>


                    {{--image--}}
                    <div class="form-group">
                        <label class="text-capitalize">News Image</label>
                        <input type="file" name="image" id="input-file-now" class="dropify" data-show-remove="false"  data-height="355"/>
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
