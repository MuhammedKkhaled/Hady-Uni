@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@php $name = 'classifications' @endphp
@extends('layouts.admin.app')
@section('content')

    <div class="card card-custom gutter-b example example-compact">
        <div class="card-header">
            <h3 class="card-title text-capitalize">{{$name}} |  Edit</h3>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('admin.'.$name.'.update', $classification->id) }}"
                  enctype="multipart/form-data">
                <div class="card-body">
                    @csrf
                    @method('put')
                    @include('admin.partials._errors')
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.frontend.webometrics_classification") }}<br><span class="text-danger">pdf , docx*</span></label>
                        <input type="file" name="webometrics" id="input-file-now" class="dropify" data-height="355"/>
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.frontend.greenmetrics_classification") }}<br><span class="text-danger">pdf , docx*</span></label>
                        <input type="file" name="greenmetrics" id="input-file-now" class="dropify"  data-height="355"/>
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.frontend.Scopus_classification") }}<br><span class="text-danger">pdf , docx*</span></label>
                        <input type="file" name="scopus" id="input-file-now" class="dropify"  data-height="355"/>
                    </div>
                    <div class="form-group">
                        <label class="text-capitalize">{{ __("custom.frontend.Scival_classification") }}<br><span class="text-danger">pdf , docx*</span></label>
                        <input type="file" name="scival" id="input-file-now" class="dropify" data-height="355"/>
                    </div>

                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-primary mr-2">{{ __("custom.Submit") }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
