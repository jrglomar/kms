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
                            <div class="form-group col-md-4">
                                <label class="required-input">First Name</label>
                                <input type="text" class="form-control" id="first_name_edit" name="first_name_edit"
                                    tabindex="1" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="required-input">Middle Name</label>
                                <input type="text" class="form-control" id="middle_name_edit" name="middle_name_edit"
                                    tabindex="1">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="required-input">Last Name</label>
                                <input type="text" class="form-control" id="last_name_edit" name="last_name_edit"
                                    tabindex="1" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="required-input">Birthdate</label>
                                <input type="date" class="form-control" id="birthdate_edit" name="birthdate_edit"
                                    tabindex="1" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="required-input">Gender</label>
                                <select class="form-control" id="gender_edit" name="gender_edit" tabindex="1">
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="required-input">Height(cm)</label>
                                <input type="number" class="form-control" id="height_edit" name="height_edit"
                                    tabindex="1" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="required-input">Weight(kg)</label>
                                <input type="number" class="form-control" id="weight_edit" name="weight_edit"
                                    tabindex="1" required>
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
                <div class="card-header bg-info">
                    <h4 class="text-light"> <span id="create_card_title">New</span> {{ Str::singular($page_title) }}</h4>
                </div>

                <form id="createForm" data-parsley-validate>
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="required-input">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" tabindex="1"
                                    required>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="required-input">Middle Name</label>
                                <input type="text" class="form-control" id="middle_name" name="middle_name"
                                    tabindex="1">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="required-input">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" tabindex="1"
                                    required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label class="required-input">Birthdate</label>
                                <input type="date" class="form-control" id="birthdate" name="birthdate"
                                    tabindex="1" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="required-input">Gender</label>
                                <select class="form-control" id="gender" name="gender" tabindex="1">
                                    <option value="" disabled selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="required-input">Height(cm)</label>
                                <input type="number" class="form-control" id="height" name="height" tabindex="1"
                                    required>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="required-input">Weight(kg)</label>
                                <input type="number" class="form-control" id="weight" name="weight" tabindex="1"
                                    required>
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
                <h5 class="card-title fw-semibold">List of Individual Records/s</h5>
                <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#create_card"
                    aria-expanded="false" aria-controls="create_card">Add
                    {{ Str::singular($page_title) }} <span><i class="ti ti-plus"></i></span></button>
            </div>
            <table class="table table-hover table-sm table-borderless" id="dataTable" style="width:100%">
                <thead>
                    <tr class="text-dark">
                        <th class="not-export-column">ID</th>
                        <th class="not-export-column">Created at</th>
                        <th>ID Number</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Birthdate</th>
                        <th>Gender</th>
                        <th>Height(cm)</th>
                        <th>Weight(kg)</th>
                        <th>BMI</th>
                        <th>BMI Category</th>
                        <th class="not-export-column">Action</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
                <tfoot>
                    <tr class="text-dark">
                        <th class="not-export-column">ID</th>
                        <th class="not-export-column">Created at</th>
                        <th>ID Number</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Birthdate</th>
                        <th>Gender</th>
                        <th>Height(cm)</th>
                        <th>Weight(kg)</th>
                        <th>BMI</th>
                        <th>BMI Category</th>
                        <th class="not-export-column">Action</th>
                    </tr>
                </tfoot>
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
            var BASE_API = API_URL + '/individual_records'

            function check_bmi_category(bmi) {
                let bmi_category = '';

                switch (true) {
                    case (bmi < 18.5):
                        bmi_category = "Underweight";
                        break;
                    case (bmi < 25):
                        bmi_category = "Normal Weight";
                        break;
                    case (bmi < 30):
                        bmi_category = "Overweight";
                        break;
                    case (bmi < 35):
                        bmi_category = "Obese Class I";
                        break;
                    case (bmi < 40):
                        bmi_category = "Obese Class II";
                        break;
                    default:
                        bmi_category = "Obese Class III";
                }

                return bmi_category;
            }

            // DATATABLE FUNCTION
            function dataTable() {
                // FOR FOOTER GENERATE OF INPUT
                $('#dataTable tfoot th').each(function(i) {
                    var title = $('#dataTable thead th').eq($(this).index()).text();
                    $(this).html('<input size="15" class="form-control" type="text" placeholder="' + title +
                        '" data-index="' + i + '" />');
                });

                dataTable = $('#dataTable').DataTable({
                    "ajax": {
                        url: BASE_API + '/datatable'
                    },
                    // "searching": false,
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
                            data: "id_number",
                        },
                        {
                            data: "first_name",
                        },
                        {
                            data: "middle_name",
                        },
                        {
                            data: "last_name",
                        },
                        {
                            data: "birthdate",
                            render: function(data, type, row) {
                                return moment(data).format('ll')
                            }
                        },
                        {
                            data: "gender",
                        },
                        {
                            data: "height",
                            render: function(data, type, row) {
                                return data + "cm"
                            }
                        },
                        {
                            data: "weight",
                            render: function(data, type, row) {
                                return data + "kg"
                            }
                        },
                        {
                            data: "bmi",
                        },
                        {
                            data: "bmi_category",
                            render: function(data, type, row) {
                                const bmiCategoryClasses = {
                                    "Underweight": "bg-success",
                                    "Normal Weight": "bg-primary",
                                    "Overweight": "bg-warning",
                                    "Obese Class I": "bg-danger",
                                    "Obese Class II": "bg-danger",
                                    "Obese Class III": "bg-danger"
                                };

                                const bmiClass = bmiCategoryClasses[data] || "bg-success";

                                return `<span class="badge rounded-1 fw-semibold ${bmiClass}">${data}</span>`;
                            }
                        },
                        {
                            data: "deleted_at",
                            render: function(data, type, row) {
                                console.log(data)
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


                })

                // FOOTER FILTER
                $(dataTable.table().container()).on('keyup', 'tfoot input', function() {
                    console.log(this.value)
                    console.log(dataTable)
                    dataTable
                        .column($(this).data('index'))
                        .search(this.value)
                        .draw();
                });

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

                // BMI COMPUTATION
                let bmi = (form_data.weight / (form_data.height * form_data.height)) * 10000;
                form_data.bmi = bmi;
                form_data.bmi_category = check_bmi_category(bmi);

                form_data.status = 'Active';

                form_data.id_number = (Math.floor(Date.now() * Math.random())).toString().slice(0, 9);

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
                        $('#first_name_edit').val(data.first_name)
                        $('#middle_name_edit').val(data.middle_name)
                        $('#last_name_edit').val(data.last_name)
                        $('#birthdate_edit').val(data.birthdate)
                        $('#gender_edit').val(data.gender)
                        $('#height_edit').val(data.height)
                        $('#weight_edit').val(data.weight)
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
                let bmi = (form_data.weight / form_data.height / form_data.height) * 10000

                form_data.bmi = bmi;
                form_data.bmi_category = check_bmi_category(bmi)

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
