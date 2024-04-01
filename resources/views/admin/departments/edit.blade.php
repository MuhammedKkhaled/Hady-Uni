@php $name = 'departments' @endphp
@extends('layouts.admin.app')
@section('content')
    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{ $name }} | Edit {{ $department->name }}</h3>
        </div>
        <div class="card-body">

            <form method="post" action="{{ route('admin.' . $name . '.update', $department) }}" enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')

                    {{-- Title --}}
                    <div class="form-group">
                        <label>{{ __('custom.Department Name en') }} <span class="text-danger">*</span></label>
                        <input type="text" name="name_en" autofocus class="form-control"
                            value="{{ old('name_en', $department->name_en) }}" required>
                    </div>

                    {{-- Title --}}
                    <div class="form-group">
                        <label>{{ __('custom.Department Name ar') }} <span class="text-danger">*</span></label>
                        <input type="text" name="name_ar" autofocus class="form-control"
                            value="{{ old('name_ar', $department->name_ar) }}" required>
                    </div>

                    {{-- department_definition --}}
                    <div class="form-group">
                        <label>{{ __('custom.Department Definition en') }}<span class="text-danger">*</span></label>
                        <input type="text" name="department_definition_en" autofocus class="form-control"
                            value="{{ old('department_definition_en', $department->department_definition_en) }}" required>
                    </div>


                    {{-- department_definition --}}
                    <div class="form-group">
                        <label>{{ __('custom.Department Definition ar') }}<span class="text-danger">*</span></label>
                        <input type="text" name="department_definition_ar" autofocus class="form-control"
                            value="{{ old('department_definition_ar', $department->department_definition_ar) }}" required>
                    </div>


                    {{-- department_message --}}
                    <div class="form-group">
                        <label>{{ __('custom.Department Message en') }} <span class="text-danger">*</span></label>
                        <input type="text" name="department_message_en" autofocus class="form-control"
                            value="{{ old('department_message_en', $department->department_message_en) }}" required>
                    </div>


                    {{-- department_message --}}
                    <div class="form-group">
                        <label>{{ __('custom.Department Message ar') }} <span class="text-danger">*</span></label>
                        <input type="text" name="department_message_ar" autofocus class="form-control"
                            value="{{ old('department_message_ar', $department->department_message_ar) }}" required>
                    </div>

                    {{-- department_vision --}}
                    <div class="form-group">
                        <label>{{ __('custom.Department Vision en') }} <span class="text-danger">*</span></label>
                        <input type="text" name="department_vision_en" autofocus class="form-control"
                            value="{{ old('department_vision_en', $department->department_vision_en) }}" required>
                    </div>

                    {{-- department_vision --}}
                    <div class="form-group">
                        <label>{{ __('custom.Department Vision ar') }} <span class="text-danger">*</span></label>
                        <input type="text" name="department_vision_ar" autofocus class="form-control"
                            value="{{ old('department_vision_ar', $department->department_vision_ar) }}" required>
                    </div>

                    {{-- Title --}}
                    <div class="form-group">
                        <label>{{ __('custom.Department Goals en') }}<span class="text-danger">*</span></label>
                        <input type="text" name="department_goals_en" autofocus class="form-control"
                            value="{{ old('department_goals_en', $department->department_goals_en) }}" required>
                    </div>


                    {{-- Title --}}
                    <div class="form-group">
                        <label>{{ __('custom.Department Goals ar') }}<span class="text-danger">*</span></label>
                        <input type="text" name="department_goals_ar" autofocus class="form-control"
                            value="{{ old('department_goals_ar', $department->department_goals_ar) }}" required>
                    </div>


                    {{-- department_goals --}}
                    <div class="form-group">
                        <label for="department_head_word_en">{{ __('custom.department_head_word_en') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="department_head_word_en" name="department_head_word_en" autofocus
                            class="form-control"
                            value="{{ old('department_head_word_en', $department->department_head_word_en) }}" required>
                    </div>

                    {{-- department_goals --}}
                    <div class="form-group">
                        <label for="department_head_word_ar">{{ __('custom.department_head_word_ar') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" id="department_head_word_ar" name="department_head_word_ar" autofocus
                            class="form-control"
                            value="{{ old('department_head_word_ar', $department->department_head_word_ar) }}" required>
                    </div>


                    {{-- Specifications --}}
                    <div class="form-group">
                        <label for="specification_name_en"> {{ __('custom.Specification Name en') }} </label>
                        <select id="specification_name_en" name="specification_name_en" class="form-control">
                            @foreach ($specifications as $specification)
                                <option value="{{ $specification->name_en }}"
                                    {{ $department->specification_name_en == $specification->name_en ? 'selected' : '' }}>
                                    {{ $specification->name_en }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Specifications --}}
                    <div class="form-group">
                        <label for="specification_name_ar"> {{ __('custom.Specification Name ar') }} </label>
                        <select id="specification_name_ar" name="specification_name_ar" class="form-control">
                            @foreach ($specifications as $specification)
                                <option value="{{ $specification->name_ar }}"
                                    {{ $department->specification_name_ar == $specification->name_ar ? 'selected' : '' }}>
                                    {{ $specification->name_ar }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>{{ __('custom.Minimum Percent') }} </label>
                        <input type="text" name="minimum_percent" autofocus class="form-control"
                            value="{{ old('minimum_percent', $department->minimum_percent) }}">
                    </div>

                    {{-- Maximum Percent --}}
                    <div class="form-group">
                        <label> {{ __('custom.Maximum Percent') }} <span class="text-danger">*</span></label>
                        <input type="text" name="maximum_percent" autofocus class="form-control"
                            value="{{ old('maximum_percent', $department->maximum_percent) }}" required>
                    </div>

                    {{-- price --}}
                    <div class="form-group">
                        <label>{{ __('custom.Price') }}<span class="text-danger">*</span></label>
                        <input type="number" name="price" autofocus class="form-control"
                            value="{{ old('price', $department->price) }}" required>
                    </div>

                    {{-- image --}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __('custom.Department Image') }}</label>
                        <input type="file" name="image" id="input-file-now" class="dropify"
                            @if (isset($department)) data-default-file="{{ $department->image_path }}" data-show-remove="false" @endif
                            data-height="585" />
                    </div>

                    {{-- file --}}
                    <div class="form-group">
                        <label class="text-capitalize">{{ __('custom.Department File') }} </label>
                        <input type="file" name="file" id="input-file-now" class="dropify"
                            @if (isset($department)) data-default-file="{{ $department->file_path }}" data-show-remove="false" @endif
                            data-height="585" />
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
