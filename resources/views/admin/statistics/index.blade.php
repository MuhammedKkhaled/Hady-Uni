@php use Mcamara\LaravelLocalization\Facades\LaravelLocalization; @endphp
@php $name = 'statistics' @endphp
@extends('layouts.admin.app')
@section('content')

    <div class="card card-custom gutter-b">
        <div class="card-header flex-wrap py-3">
            <div class="card-title">
                <h3 class="card-label text-capitalize">
                    {{ __("custom.statistics") }}
                </h3>
            </div>
            <div class="card-toolbar">
            </div>
        </div>
        <div class="card-body">

            <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table datatable table-bordered table-checkable dataTable no-footer dtr-inline "
                               id="{{$name}}-table" role="grid" aria-describedby="kt_datatable_info"
                               style="width: 1233px;">
                            <thead>
                            <tr>
                                <th>{{ __("custom.frontend.graduated") }}</th>
                                <th>{{ __("custom.frontend.student") }}</th>
                                <th>{{ __("custom.frontend.success percent") }}</th>
                                <th>{{ __("custom.Action") }}</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <!--end: Datatable-->
        </div>
    </div>

@endsection






@push('js')

    <script>


        let rolesTable = $('#{{$name}}-table').DataTable({
            dom: "tiplr",
            serverSide: true,
            processing: true,
            ajax: {
                url: '{{ route('admin.'.$name.'.data') }}',
            },
            columns: [
                {data: 'graduated', name: 'graduated'},
                {data: 'students', name: 'students'},
                {data: 'success_percent', name: 'success_percent'},
                {data: 'actions', name: 'actions', searchable: false, sortable: false, width: '20%'},
            ],
            order: [[3, 'desc']],
        });

        $('#data-table-search').keyup(function () {
            rolesTable.search(this.value).draw();
        })
    </script>

@endpush
