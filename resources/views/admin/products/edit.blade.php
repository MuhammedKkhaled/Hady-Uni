@php $name = 'products' @endphp
@extends('layouts.admin.app')
@section('content')


<div class="card card-custom gutter-b example example-compact">
    <div class="card-header">
        <h3 class="card-title text-capitalize">{{$name}} | Edit {{$product->name}}</h3>
    </div>
    <div class="card-body">

        <form method="post" action="{{ route('admin.'.$name.'.update', $product->id) }}" enctype="multipart/form-data">
            <div class="card-body">
                @csrf
                @method('put')
                @include('admin.partials._errors')

                {{--Title--}}
                <div class="form-group">
                    <label>Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" autofocus class="form-control" value="{{ old('name', $product->name) }}" required>
                </div>



                {{--description--}}
                <div class="form-group">
                    <label>Description <span class="text-danger">*</span></label>
                    <textarea name="description" class="form-control" cols="30" rows="10">{{ old('description', $product->description) }}</textarea>
                </div>

                {{--Price--}}
                <div class="form-group">
                    <label>price <span class="text-danger">*</span></label>
                    <input type="text" name="price" autofocus class="form-control" value="{{ old('price', $product->price) }}" required>
                </div>

                {{--image--}}
                <div class="form-group">
                    <label class="text-capitalize">Main Images</label>
                    <input type="file" name="image" id="input-file-now" class="dropify" @if(isset($product)) data-default-file="{{$product->image_path}}" data-show-remove="false" @endif data-height="585"/>
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




