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
    <!--  Row 1 -->
    <div class="row pt-5">
        <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
                <div class="card-body pt-3 p-4">
                    <h6 class="fw-semibold fs-4">Total User Accounts</h6>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6><span id="userAccountCount" class="badge bg-dark rounded-3 fw-semibold"></span></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
                <div class="card-body pt-3 p-4">
                    <h6 class="fw-semibold fs-4">Total Indidual Records</h6>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6><span id="individualRecordCount" class="badge bg-primary rounded-3 fw-semibold"></span></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
                <div class="card-body pt-3 p-4">
                    <h6 class="fw-semibold fs-4">Total Feeding Programs</h6>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6><span id="feedingProgramCount" class="badge bg-warning rounded-3 fw-semibold"></span></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
                <div class="card-body pt-3 p-4">
                    <h6 class="fw-semibold fs-4">Total Announcements</h6>
                    <div class="d-flex align-items-center justify-content-between">
                        <h6><span id="announcementCount" class="badge bg-success rounded-3 fw-semibold"></span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ROW 2 --}}
    <div class="row">
        <div class="col-lg-8 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Records Overview</h5>
                        </div>
                        <div>
                            <select class="form-select">
                                <option value="1">March 2023</option>
                                <option value="2">April 2023</option>
                                <option value="3">May 2023</option>
                                <option value="4">June 2023</option>
                            </select>
                        </div>
                    </div>
                    <div id="chart"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-hidden">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-9 fw-semibold">Current BMI Categories</h5>
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h4 class="fw-semibold mb-3"></h4>
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="round-8 bg-success rounded-circle me-2 d-inline-block"></span>
                                        <p id="underWeightPie" class="text-dark me-1 fs-3 mb-0"></p>
                                        <p class="fs-3 mb-0">Underweight</p>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                                        <p id="normalWeightPie" class="text-dark me-1 fs-3 mb-0"></p>
                                        <p class="fs-3 mb-0">Normal Weight</p>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="round-8 bg-warning rounded-circle me-2 d-inline-block"></span>
                                        <p id="overWeightPie" class="text-dark me-1 fs-3 mb-0"></p>
                                        <p class="fs-3 mb-0">Overweight</p>
                                    </div>
                                    <div class="d-flex align-items-center mb-3">
                                        <span class="round-8 bg-danger rounded-circle me-2 d-inline-block"></span>
                                        <p id="obesePie" class="text-dark me-1 fs-3 mb-0"></p>
                                        <p class="fs-3 mb-0">Obese</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex justify-content-center">
                                        <div id="breakup"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <!-- Monthly Earnings -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row alig n-items-start">
                                <div class="col-8">
                                    <h5 class="card-title mb-9 fw-semibold"> Monthly Earnings </h5>
                                    <h4 class="fw-semibold mb-3">$6,820</h4>
                                    <div class="d-flex align-items-center pb-1">
                                        <span
                                            class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-arrow-down-right text-danger"></i>
                                        </span>
                                        <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                                        <p class="fs-3 mb-0">last year</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                                            <i class="ti ti-currency-dollar fs-6"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="earning"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- SCRIPTS --}}
@section('scripts')
    <script src="{{ asset('import/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('import/assets/js/dashboard.js') }}"></script>
    <script>
        $(document).ready(function() {

            // GLOBAL VARIABLE
            const APP_URL = "{{ env('APP_URL') }}"
            const API_URL = "{{ env('API_URL') }}"
            const API_TOKEN = localStorage.getItem("API_TOKEN")
            const BASE_API = API_URL + '/individual_records'

            let categoryCounts;
            let seriesCount;

            function renderThePieChart(seriesCount) {
                console.log(seriesCount)

                const totalSum = seriesCount.reduce((accumulator, currentValue) => accumulator + currentValue, 0);

                const percentages = seriesCount.map(value => Math.round((value / totalSum) * 100));

                $('#underWeightPie').html(percentages[0] + '%')
                $('#normalWeightPie').html(percentages[1] + '%')
                $('#overWeightPie').html(percentages[2] + '%')
                $('#obesePie').html(percentages[3] + '%')

                console.log('Percentages:', percentages);
                // =====================================
                // Breakup
                // =====================================
                let breakup = {
                    color: "#adb5bd",
                    series: seriesCount,
                    labels: ["Underweight", "Normal Weight", "Overweight", "Obese"],
                    chart: {
                        width: 180,
                        type: "donut",
                        fontFamily: "Plus Jakarta Sans', sans-serif",
                        foreColor: "#adb0bb",
                    },
                    plotOptions: {
                        pie: {
                            startAngle: 0,
                            endAngle: 360,
                            donut: {
                                size: "75%",
                            },
                        },
                    },
                    stroke: {
                        show: false,
                    },

                    dataLabels: {
                        enabled: false,
                    },

                    legend: {
                        show: false,
                    },
                    colors: ["#13deb9", "#5d87ff", "#ffae1f", "#fa896b"],

                    responsive: [{
                        breakpoint: 991,
                        options: {
                            chart: {
                                width: 150,
                            },
                        },
                    }, ],
                    tooltip: {
                        theme: "dark",
                        fillSeriesColor: false,
                    },
                };
                let chart = new ApexCharts(document.querySelector("#breakup"), breakup);

                chart.render();

            }

            function getCounts() {
                let form_url = BASE_API;

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
                        categoryCounts = data.reduce(function(counts, person) {
                            if (counts.hasOwnProperty(person.bmi_category)) {
                                counts[person.bmi_category]++;
                            }
                            return counts;
                        }, {
                            'Underweight': 0,
                            'Normal Weight': 0,
                            'Overweight': 0,
                            'Obese Class I': 0,
                            'Obese Class II': 0,
                            'Obese Class III': 0,
                        });


                        seriesCount = [categoryCounts['Underweight'], categoryCounts['Normal Weight'],
                            categoryCounts['Overweight'], categoryCounts['Obese Class I'] +
                            categoryCounts['Obese Class II'] + categoryCounts['Obese Class III'],
                        ]

                        renderThePieChart(seriesCount)
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



            function getMultipleCounts() {
                let form_url = API_URL + '/dashboard/getCounts';

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

                        $('#userAccountCount').html(data.userCount)
                        $('#individualRecordCount').html(data.individualRecordCount)
                        $('#feedingProgramCount').html(data.feedingProgramCount)
                        $('#announcementCount').html(data.announcementCount)
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

            getCounts()
            getMultipleCounts()

        })
    </script>
@endsection
