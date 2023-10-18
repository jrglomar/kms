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
            <div class="row">
                <div class="col-md-12">
                    <h5 class="card-title fw-semibold mb-4 text-center">Feeding Program Details</h5>
                    <div class="card">
                        <div class="card-body">
                            <h5 id="title" class="card-title mb-4"></h5>
                            <p>When: <span id="date_of_program" class="card-text"></span></p>
                            <p>Where: <span id="location" class="card-text"></span></p>
                            <p>Details: <span id="description" class="card-text"></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <h5 class="card-title fw-semibold mb-4 text-center">Registered Individuals</h5>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover table-sm" id="dataTable" style="width:100%">
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
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- SCRIPTS --}}
@section('scripts')
    <script>
        $(document).ready(function() {

            // GLOBAL VARIABLE
            var APP_URL = "{{ env('APP_URL') }}"
            var API_URL = "{{ env('API_URL') }}"
            var API_TOKEN = localStorage.getItem("API_TOKEN")
            var BASE_API = API_URL + '/feeding_programs'

            const feeding_program_id = "{{ $feeding_program_id }}"

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
                        url: API_URL + '/feeding_program_ir_logs/search/' + feeding_program_id,
                        // dataSrc: ''
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
                            data: "individual_records.id"
                        },
                        {
                            data: "individual_records.created_at"
                        },
                        {
                            data: "individual_records.id_number",
                        },
                        {
                            data: "individual_records.first_name",
                        },
                        {
                            data: "individual_records.middle_name",
                        },
                        {
                            data: "individual_records.last_name",
                        },
                        {
                            data: "individual_records.birthdate",
                            render: function(data, type, row) {
                                return moment(data).format('ll')
                            }
                        },
                        {
                            data: "individual_records.gender",
                        },
                        {
                            data: "individual_records.height",
                            render: function(data, type, row) {
                                return data + "cm"
                            }
                        },
                        {
                            data: "individual_records.weight",
                            render: function(data, type, row) {
                                return data + "kg"
                            }
                        },
                        {
                            data: "individual_records.bmi",
                        },
                        {
                            data: "individual_records.bmi_category",
                            render: function(data, type, row) {
                                let bmi_category
                                if (data == "Underweight")
                                    bmi_category =
                                    `<span class="btn btn-sm btn-light">${data}</span>`
                                else if (data == "Normal Weight")
                                    bmi_category =
                                    `<span class="btn btn-sm btn-success">${data}</span>`
                                else if (data == "Overweight")
                                    bmi_category =
                                    `<span class="btn btn-sm btn-warning">${data}</span>`
                                else if (data == "Obese Class I")
                                    bmi_category =
                                    `<button class="btn btn-sm btn-danger">${data}</button>`
                                else if (data == "Obese Class II")
                                    bmi_category =
                                    `<span class="btn btn-sm btn-danger">${data}</span>`
                                else if (data == "Obese Class III")
                                    bmi_category =
                                    `<span class="btn btn-sm btn-danger">${data}</span>`
                                return bmi_category
                            }
                        },
                        {
                            data: "individual_records.deleted_at",
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
                            "aTargets": [0, 1, 12],
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

            // FETCH DETAILS FUNCTION
            function getFeedingProgramIdRecord(id) {
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
                        console.log(data)
                        $('#title').html(data.title)
                        $('#description').html(data.description)
                        $('#location').html(data.location)
                        let date_formatted = moment(`${data.date_of_program} ${data.time_of_program}`)
                            .format('lll')
                        $('#date_of_program').html(date_formatted)
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

            }
            // END OF EDIT FUNCTION

            // FUNCTION CALLING
            getFeedingProgramIdRecord(feeding_program_id)
            dataTable()

        })
    </script>
@endsection
