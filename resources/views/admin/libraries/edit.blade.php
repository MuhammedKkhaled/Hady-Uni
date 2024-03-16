@php $name = 'libraries' @endphp
@extends('layouts.admin.app')
@section('content')


    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{$name}} | Edit {{$library->name}}</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.'.$name.'.update', $library->id) }}" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')


                    {{-- Categories --}}
                    <div class="form-group">
                        <label for="cate">Categories Name <span class="text-danger">*</span></label>
                        <select class="form-control" id="cate" name="category_id">
                            <option value="0" selected disabled>-- Choose category -- </option>
                            @foreach($categories as $categorie)
                                <option value="{{ $categorie->id}}" {{ $library->category_id == $categorie->id ? 'selected' : ''   }}> {{ $categorie->name }} </option>
                            @endforeach
                        </select>
                    </div>


                    {{-- Name --}}
                    <div class="form-group">
                        <label>Library Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" autofocus class="form-control" value="{{ old('name' , $library->name) }}" required>
                    </div>

                    {{--Specifications--}}
                    <div class="form-group">
                        <label for="specification_name">Specialization Name </label>
                        <select id="specification_name" name="specification_name" class="form-control">
                            @foreach($specifications as $specification)
                                <option value="{{ $specification->name }}" {{ $library->specification_name == $specification->name ? 'selected' : '' }}>
                                    {{ $specification->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Date --}}
                    <div class="form-group">
                        <label for="published_at">File Published Date<span class="text-danger">*</span></label>
                        <input type="date" name="published_at" id="published_at" autofocus class="form-control" value="{{ $library->published_at }}" required>
                    </div>


                    {{--image--}}
                    <div class="form-group">
                        <label class="text-capitalize">Conference Image</label>
                        <input type="file" name="file" id="input-file-now" class="dropify" @if(isset($library)) data-default-file="{{$library->file_path}}" data-show-remove="false" @endif  data-height="355"/>
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
