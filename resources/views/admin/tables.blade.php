@extends('admin')
@section('head')
    <link href="{{ asset('web_assets/admin/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('web_assets/admin/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}"
        rel="stylesheet" type="text/css" />
    <style>
        tbody tr td {
            vertical-align: middle;
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Database Tables</h4>

                    <table id="tables_table" class="table dt-responsive nowrap w-100  order-column">
                        <thead>
                            <tr>
                                <th>Sr.</th>
                                <th>Name</th>

                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($tables as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->Tables_in_emd_model_v2 }}</td>

                                    <td>
                                        <a href="#" class="btn btn-info">CSV</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div> <!-- end card body-->
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script defer src="{{ asset('web_assets/admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script defer src="{{ asset('web_assets/admin/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script defer src="{{ asset('web_assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}">
    </script>
    <script>
        $(document).ready(function() {
            $("#tables_table").dataTable();
        });
    </script>
@endsection
