@php $name = 'products' @endphp
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
                    <label>Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" autofocus class="form-control" value="{{ old('name') }}" required>
                </div>

                {{--description--}}
                <div class="form-group">
                    <label>Description <span class="text-danger">*</span></label>
                    <textarea name="description" class="form-control" cols="30" rows="10">{{ old('description') }}</textarea>
                </div>

                {{-- Price --}}
                <div class="form-group">
                    <label>Price <span class="text-danger">*</span></label>
                    <input type="text" name="price" autofocus class="form-control" value="{{ old('price') }}" required>
                </div>

                {{--image--}}
                <div class="form-group">
                    <label class="text-capitalize">Main Image</label>
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




