@php $name = 'journals' @endphp
@extends('layouts.admin.app')
@section('content')


    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{$name}} | Edit {{$journal->name}}</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.'.$name.'.update', $journal->id) }}" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')



                    {{-- Name --}}
                    <div class="form-group">
                        <label>Library Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" autofocus class="form-control" value="{{ old('name' , $journal->name) }}" required>
                    </div>



                    {{-- Date --}}
                    <div class="form-group">
                        <label for="published_at">File Published Date<span class="text-danger">*</span></label>
                        <input type="date" name="published_at" id="published_at" autofocus class="form-control" value="{{ $journal->published_at }}" required>
                    </div>


                    {{--image--}}
                    <div class="form-group">
                        <label class="text-capitalize">Conference Image</label>
                        <input type="file" name="file" id="input-file-now" class="dropify" @if(isset($journal)) data-default-file="{{$journal->file_path}}" data-show-remove="false" @endif  data-height="355"/>
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
