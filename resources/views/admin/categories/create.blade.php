@php $name = 'categories' @endphp
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
                        <label>{{ __("custom.categoriesen") }}<span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en') }}" >
                    </div>
                    {{-- Name --}}
                    <div class="form-group">
                        <label>{{ __("custom.categoriesar") }}<span class="text-danger">*</span></label>
                        <input type="text" name="name_ar" autofocus class="form-control" value="{{ old('name') }}" >
                    </div>
                    
                    <div class="form-group">
                        <label for="type"> {{ __('custom.type') }}</label>
                        <select id="type" name="type" class="form-control">
                            <option value="0" disabled selected>-- Select type --</option>
                            <option value="1">{{ __('custom.frontend.sustainable') }}
                            </option>
                            <option value="2">{{ __('custom.frontend.quality') }}
                            </option>
                        </select>
                    </div>

                </div>

                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection




