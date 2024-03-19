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
                        <label>{{ __("custom.Department Name en") }}<span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control" value="{{ old('name_en') }}" required>
                    </div>

                    {{-- Name --}}
                    <div class="form-group">
                        <label>{{ __("custom.Department Name ar") }}<span class="text-danger">*</span></label>
                        <input type="text" name="name_ar" autofocus class="form-control" value="{{ old('name_ar') }}" required>
                    </div>

                    {{--Specifications--}}
                    <div class="form-group">
                        <label>{{ __("custom.Specification Name en") }}<span class="text-danger">*</span></label>
                        <select name="specification_name_en" class="form-control">
                            <option value="0" selected disabled>-- Select Specification -- </option>
                            @foreach($specifications as $specification)
                                <option value="{{ $specification->name_en }}"> {{ $specification->name_en }} </option>
                            @endforeach
                        </select>
                    </div>


                    {{--Specifications--}}
                    <div class="form-group">
                        <label>{{ __("custom.Specification Name ar") }}<span class="text-danger">*</span></label>
                        <select name="specification_name_ar" class="form-control">
                            <option value="0" selected disabled>-- بالرجاء اختيار المواصفات -- </option>
                            @foreach($specifications as $specification)
                                <option value="{{ $specification->name_ar }}"> {{ $specification->name_ar }} </option>
                            @endforeach
                        </select>
                    </div>


                    {{-- department_definition --}}
                    <div class="form-group">
                            <label for="department_definition_en">{{ __("custom.Department Definition en") }} <span class="text-danger">*</span></label>
                        <input type="text" id="department_definition_en" name="department_definition_en" autofocus class="form-control" value="{{ old('department_definition_en') }}" required>
                    </div>

                    {{-- department_definition --}}
                    <div class="form-group">
                        <label for="department_definition_ar">{{ __("custom.Department Definition ar") }} <span class="text-danger">*</span></label>
                        <input type="text" id="department_definition_ar" name="department_definition_ar" autofocus class="form-control" value="{{ old('department_definition_ar') }}" required>
                    </div>


                    {{-- department_message --}}
                    <div class="form-group">
                        <label for="department_message_en">{{ __("custom.Department Message en") }} <span class="text-danger">*</span></label>
                        <input type="text" id="department_message_en" name="department_message_en" autofocus class="form-control" value="{{ old('department_message_en') }}" required>
                    </div>


                    {{-- department_message --}}
                    <div class="form-group">
                        <label for="department_message_ar">{{ __("custom.Department Message ar") }} <span class="text-danger">*</span></label>
                        <input type="text" id="department_message_ar" name="department_message_ar" autofocus class="form-control" value="{{ old('department_message_ar') }}" required>
                    </div>

                    {{-- department_vision --}}
                    <div class="form-group">
                        <label for="department_vision_en">{{ __("custom.Department Vision en") }}<span class="text-danger">*</span></label>
                        <input type="text" id="department_vision_en" name="department_vision_en" autofocus class="form-control" value="{{ old('department_vision_en') }}" required>
                    </div>

                    {{-- department_vision --}}
                    <div class="form-group">
                        <label for="department_vision_ar">{{ __("custom.Department Vision ar") }}<span class="text-danger">*</span></label>
                        <input type="text" id="department_vision_ar" name="department_vision_ar" autofocus class="form-control" value="{{ old('department_vision_ar') }}" required>
                    </div>


                    {{-- department_goals --}}
                    <div class="form-group">
                        <label for="department_goals_en">{{ __("custom.Department Goals en") }} <span class="text-danger">*</span></label>
                        <input type="text" id="department_goals_en" name="department_goals_en" autofocus class="form-control" value="{{ old('department_goals_en') }}" required>
                    </div>

                    {{-- department_goals --}}
                    <div class="form-group">
                        <label for="department_goals_ar">{{ __("custom.Department Goals ar") }} <span class="text-danger">*</span></label>
                        <input type="text" id="department_goals_ar" name="department_goals_ar" autofocus class="form-control" value="{{ old('department_goals_ar') }}" required>
                    </div>


                    {{-- minimum percent --}}
                    <div class="form-group">
                        <label> {{ __("custom.Minimum Percent") }} </label>
                        <input type="text" name="minimum_percent" autofocus class="form-control" value="{{ old('minimum_percent') }}">
                    </div>

                    {{-- Maximum Percent --}}
                    <div class="form-group">
                        <label> {{ __("custom.Maximum Percent") }} <span class="text-danger">*</span></label>
                        <input type="text" name="maximum_percent" autofocus class="form-control" value="{{ old('maximum_percent') }}" required>
                    </div>

                    {{-- price --}}
                    <div class="form-group">
                        <label> {{ __("custom.Price") }} <span class="text-danger">*</span></label>
                        <input type="number" name="price" autofocus class="form-control" value="{{ old('price') }}" required>
                    </div>


                    {{--image--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Department Image") }}</label>
                        <input type="file" name="image" id="input-file-now" class="dropify" data-show-remove="false"  data-height="355"/>
                    </div>

                    {{--file--}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.Department File") }} <span class="text-danger">PDF,DOCX*</span></label>
                        <input type="file" name="file" id="input-file-now" class="dropify" data-show-remove="false"  data-height="355"/>
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
