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

    {{-- EDIT MODAL --}}
    <div id="editModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="card-title fw-semibold mb-4 text-black">Edit {{ Str::singular($page_title) }}</h5>
                    <form id="editForm">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label class="required-input">Title</label>
                                <input type="text" class="form-control" id="title_edit" name="title_edit" tabindex="1"
                                    required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="required-input">Details</label>
                                <textarea class="form-control" id="description_edit" name="description_edit" tabindex="2" rows="5"></textarea>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success btnUpdate">Save</button>
                </div>
            </div>
        </div>
    </div>

    {{-- CREATE FORM --}}
    <div class="row">
        <div class="col-md-12 collapse" id="create_card">
            <div class="card ">
                <div class="card-header">
                    <h4> <span id="create_card_title">New</span> {{ Str::singular($page_title) }}</h4>
                </div>

                <form id="createForm" data-parsley-validate>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="required-input">Title</label>
                                <input type="text" class="form-control" id="title" name="title" tabindex="1"
                                    required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="required-input">Description</label>
                                <textarea class="form-control" id="description" name="description" tabindex="2" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-light" data-toggle="collapse" data-parent="#create_card"
                            id="create_cancel_btn">Cancel <i class="fas fa-times"></i></button>
                        <button type="submit" class="btn btn-success ml-1" id="create_btn">Create <i
                                class="fas fa-check"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- END OF CREATE FORM --}}

    {{-- DATATABLE --}}
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="card-title fw-semibold">List of Announcement/s</h5>
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#create_card"
                    aria-expanded="false" aria-controls="create_card">Add
                    {{ Str::singular($page_title) }} <span><i class="ti ti-plus"></i></span></button>
            </div>
            <table class="table table-hover table-sm" id="dataTable" style="width:100%">
                <thead>
                    <tr class="text-dark">
                        <th class="not-export-column">ID</th>
                        <th class="not-export-column">Created at</th>
                        <th width="20%">Title</th>
                        <th>Description</th>
                        <th class="not-export-column">Action</th>
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
            var BASE_API = API_URL + '/announcements'

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
                    "columns": [{
                            data: "id"
                        },
                        {
                            data: "created_at"
                        },
                        {
                            data: "title",
                        },
                        {
                            data: "description",
                        },
                        {
                            data: "deleted_at",
                            render: function(data, type, row) {
                                if (data == null) {
                                    return `<div>
                                        <button id="${row.id}" type="button" class="btn btn-sm btn-warning btnEdit">Edit</button>
                                        <button id="${row.id}" type="button" class="btn btn-sm btn-danger btnDelete">Delete</button>
                                        </div>`;
                                } else {
                                    return '<button class="btn btn-danger btn-sm">Activate</button>';
                                }
                            }
                        }
                    ],
                    "aoColumnDefs": [{
                            "bVisible": false,
                            "aTargets": [0, 1],
                        },
                        {
                            "className": "dt-right",
                            "targets": [-1]
                        }
                    ],
                    "order": [
                        [1, "desc"]
                    ],

                    // EXPORTING AS PDF
                    'dom': 'Blrtip',
                    'buttons': {
                        dom: {
                            button: {
                                tag: 'button',
                                className: ''
                            }
                        },
                        buttons: [{
                            extend: 'pdfHtml5',
                            text: 'Export as PDF',
                            orientation: 'landscape',
                            pageSize: 'LEGAL',
                            exportOptions: {
                                // columns: ':visible',
                                columns: ":not(.not-export-column)",
                                modifier: {
                                    order: 'current'
                                }
                            },
                            className: 'btn btn-sm btn-dark my-2',
                            titleAttr: 'PDF export.',
                            extension: '.pdf',
                            download: 'open', // FOR NOT DOWNLOADING THE FILE AND OPEN IN NEW TAB
                            title: function() {
                                return "List of {{ $page_title }}"
                            },
                            filename: function() {
                                return "List of {{ $page_title }}"
                            },
                            customize: function(doc) {
                                doc.styles.tableHeader.alignment = 'left';
                            }
                        }, ]
                    },
                })

                // TO ADD BUTTON TO DIV TABLE ACTION
                dataTable.buttons().container().appendTo('#tableActions');
            }
            // END OF DATATABLE FUNCTION

            // REFRESH DATATABLE FUNCTION
            function refresh() {
                $('#dataTable').DataTable().ajax.reload()
            }
            // REFRESH DATATABLE FUNCTION

            // CREATE FUNCTION
            $('#createForm').on('submit', function(e) {
                e.preventDefault()

                // VARIABLES
                var form_url = BASE_API

                // FORM DATA
                var form = $("#createForm").serializeArray();

                var form_data = {}
                $.each(form, function() {
                    form_data[[this.name]] = this.value;
                })
                console.log(form_data)

                // ajax opening tag
                $.ajax({
                    url: form_url,
                    method: "POST",
                    data: JSON.stringify(form_data),
                    dataType: "JSON",
                    headers: {
                        "Accept": "application/json",
                        "Content-Type": "application/json",
                        "Authorization": API_TOKEN,
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        notification('success', "{{ Str::singular($page_title) }}")
                        $("#createForm").trigger("reset")
                        $("#create_card").collapse("hide")
                        refresh();
                    },
                    error: function(error) {
                        console.log(error)
                        if (error.responseJSON.errors == null) {
                            swalAlert('warning', error.responseJSON.message)
                        } else {
                            $.each(error.responseJSON.errors, function(key, value) {
                                swalAlert('warning', value)
                            });
                        }
                    }
                    // ajax closing tag
                })
            });
            // END OF CREATE FUNCTION

            // EDIT FUNCTION
            $(document).on('click', '.btnEdit', function() {
                var id = this.id;
                var form_url = BASE_API + '/' + id;

                $.ajax({
                    url: form_url,
                    method: "GET",
                    headers: {
                        "Accept": "application/json",
                        "Content-Type": "application/json",
                        "Authorization": API_TOKEN,
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        $('.btnUpdate').attr('id', data.id)
                        $('#title_edit').val(data.title)
                        $('#description_edit').val(data.description)
                        $('#editModal').modal('show');
                    },
                    error: function(error) {
                        console.log(error)
                        if (error.responseJSON.errors == null) {
                            swalAlert('warning', error.responseJSON.message)
                        } else {
                            $.each(error.responseJSON.errors, function(key, value) {
                                swalAlert('warning', value)
                            });
                        }
                    }
                    // ajax closing tag
                })

            })
            // END OF EDIT FUNCTION

            // UPDATE FUNCTION
            $(document).on('click', '.btnUpdate', function() {
                var id = this.id;
                console.log(id)
                var form_url = BASE_API + '/' + id;

                // FORM DATA
                var form = $("#editForm").serializeArray();
                let form_data = {}

                $.each(form, function() {
                    form_data[[this.name.slice(0, -5)]] = this.value;
                })
                console.log("🚀 ~ file: announcement.blade.php:306 ~ $.each ~ form_data:", form_data)


                // ajax opening tag
                $.ajax({
                    url: form_url,
                    method: "PUT",
                    data: JSON.stringify(form_data),
                    dataType: "JSON",
                    headers: {
                        "Accept": "application/json",
                        "Content-Type": "application/json",
                        "Authorization": API_TOKEN,
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        notification('info', "{{ Str::singular($page_title) }}")
                        refresh();
                        $('#editModal').modal('hide');
                        console.log(data)
                    },
                    error: function(error) {
                        console.log(error)
                        if (error.responseJSON.errors == null) {
                            swalAlert('warning', error.responseJSON.message)
                        } else {
                            $.each(error.responseJSON.errors, function(key, value) {
                                swalAlert('warning', value)
                            });
                        }
                    }
                    // ajax closing tag
                })
            })
            // END OF UPDATE FUNCTION

            // DEACTIVATE FUNCTION
            $(document).on("click", ".btnDelete", function() {
                var id = this.id;
                let form_url = BASE_API + '/' + id

                $.ajax({
                    url: form_url,
                    method: "GET",
                    headers: {
                        "Accept": "application/json",
                        "Content-Type": "application/json",
                        "Authorization": API_TOKEN,
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },

                    success: function(data) {
                        console.log(data)
                        Swal.fire({
                            title: "Are you sure?",
                            text: "You won't able to revert this.",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "red",
                            confirmButtonText: "Yes, remove it!",
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $.ajax({
                                    url: BASE_API + '/destroy/' + data.id,
                                    method: "DELETE",
                                    headers: {
                                        "Accept": "application/json",
                                        "Authorization": API_TOKEN,
                                        "Content-Type": "application/json",
                                        'X-CSRF-TOKEN': $(
                                            'meta[name="csrf-token"]').attr(
                                            'content')
                                    },

                                    success: function(data) {
                                        notification('error',
                                            "{{ Str::singular($page_title) }}"
                                        )
                                        refresh();
                                    },
                                    error: function(error) {
                                        $.each(error.responseJSON.errors,
                                            function(key, value) {
                                                swalAlert('warning',
                                                    value)
                                            });
                                        console.log(error)
                                        console.log(
                                            `message: ${error.responseJSON.message}`
                                        )
                                        console.log(
                                            `status: ${error.status}`)
                                    }
                                    // ajax closing tag
                                })
                            }
                        });
                    },
                    error: function(error) {
                        $.each(error.responseJSON.errors, function(key, value) {
                            swalAlert('warning', value)
                        });
                        console.log(error)
                        console.log(`message: ${error.responseJSON.message}`)
                        console.log(`status: ${error.status}`)
                    }
                    // ajax closing tag
                })
            });
            // END OF DEACTIVATE FUNCTION

            // FUNCTION CALLING
            dataTable();
        })
        // END OF SCRIPT TAG
    </script>
@endsection
