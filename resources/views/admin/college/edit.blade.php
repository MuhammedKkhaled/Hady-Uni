@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@php $name = 'college' @endphp
@extends('layouts.admin.app')
@section('content')

    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{$name}} | Edit {{$college->name}}</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.'.$name.'.update', $college->id) }}"
                  enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')

                    {{-- Name --}}
                    <div class="form-group">
                        <label for="book_number">رقم الكتاب<span class="text-danger">*</span></label>
                        <input type="text" id="book_number" name="book_number" autofocus class="form-control"
                        value="{{ old('book_number', $college->book_number) }}" >
                    </div>

                    {{-- Name --}}
                    <div class="form-group">
                        <label for="book_name_en">اسم الكتاب بلانجليزي <span class="text-danger">*</span></label>
                        <input type="text" id="book_name_en" name="book_name_en" autofocus class="form-control"
                        value="{{ old('book_name_en', $college->book_name_en) }}" >
                    </div>

                    {{-- Name --}}
                    <div class="form-group">
                        <label for="book_name_ar">اسم الكتاب بلعربي <span class="text-danger">*</span></label>
                        <input type="text" id="book_name_ar" name="book_name_ar" autofocus class="form-control"
                        value="{{ old('book_name_ar', $college->book_name_ar) }}" >
                    </div>
                    
                    {{-- Name --}}
                    <div class="form-group">
                        <label for="auther_name_en">اسم الكاتب بلانجليزي<span class="text-danger">*</span></label>
                        <input type="text" id="auther_name_en" name="auther_name_en" autofocus class="form-control"
                        value="{{ old('auther_name_en', $college->auther_name_en) }}" >
                    </div>

                    {{-- Name --}}
                    <div class="form-group">
                        <label for="auther_name_ar">اسم الكاتب بلعربي<span class="text-danger">*</span></label>
                        <input type="text" id="auther_name_ar" name="auther_name_ar" autofocus class="form-control"
                        value="{{ old('auther_name_ar', $college->auther_name_ar) }}" >
                    </div>

                    {{-- Specialization --}}
                    <div class="form-group">
                        <label for="specialization_name_en"> الفسم<span class="text-danger">*</span></label>
                        <select class="form-control" id="specialization_name_en" name="specialization_name_en">
                            <option value="0" selected disabled>-- Choose Specialization in English --</option>
                            @foreach($depratments as $depratment)
                                <option
                                    value="{{ $depratment->name_en  }} "> {{ $depratment->name_en }} </option>
                            @endforeach
                        </select>
                    </div>

                {{-- Specialization --}}
                    <div class="form-group">
                        <label for="specialization_name_ar">الفسم<span class="text-danger">*</span></label>
                        <select class="form-control" id="specialization_name_ar" name="specialization_name_ar">
                            <option value="0" selected disabled>-- Choose Specialization --</option>
                            @foreach($depratments as $depratment)
                            <option
                                value="{{ $depratment->name_ar  }} "> {{ $depratment->name_ar }} </option>
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
