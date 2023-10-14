@extends('layouts.app')

{{-- SIDEBAR --}}
@section('sidebar')
    @include('layouts.common.admin-sidebar')
@endsection

{{-- NAVBAR --}}
@section('header')
    @include('layouts.common.admin-header')
@endsection

{{-- CONTENT --}}
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="card-title fw-semibold">List of User Account/s</h5>
                <button id="btn-add-user" type="button" class="btn btn-primary m-1">Add User <span><i
                            class="ti ti-plus"></i></span></button>
            </div>
            <table class="table table-bordered table-sm" id="dataTable" style="width:100%">
                <thead>
                    <tr>
                        <th class="not-export-column">ID</th>
                        <th class="not-export-column">Created at</th>
                        <th>Date Created</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th class="text-center not-export-column">Action</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
@endsection

{{-- SCRIPTS --}}
@section('scripts')
    <script>
        // START SCRIPT TAG
        $(document).ready(function() {

            // GLOBAL VARIABLE
            var APP_URL = "{{ env('APP_URL') }}"
            var API_URL = "{{ env('API_URL') }}"
            var API_TOKEN = localStorage.getItem("API_TOKEN")
            var BASE_API = API_URL + '/user'

            // DATATABLE FUNCTION
            function dataTable() {
                dataTable = $('#dataTable').DataTable({
                    "ajax": {
                        url: BASE_API + '/datatable'
                    },
                    "processing": true,
                    "serverSide": true,
                    "lengthMenu": [
                        [10, 25, 50, -1],
                        [10, 25, 50, "All"]
                    ],
                    "headers": {
                        "Accept": "application/json",
                        "Content-Type": "application/json",
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    "columns": [

                    ],
                    "aoColumnDefs": [{
                        "bVisible": false,
                        "aTargets": [0, 1]
                    }],
                    "order": [
                        [1, "desc"]
                    ],
                })
            }
            // END OF DATATABLE FUNCTION


            // FUNCTION CALLING
            dataTable();
        })
        // END OF SCRIPT TAG
    </script>
@endsection
