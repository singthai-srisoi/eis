@extends('template')
@section('dashboard')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl" id="kt_content_container">
        <!--begin::Row-->
        <div class="row gy-5 g-xl-10">
            <!--begin::Col-->
            <div class="col-xl-4">
                <!--begin::Mixed Widget 13-->
                <div class="card card-xl-stretch mb-xl-10 theme-dark-bg-body" style="background-color: #F7D9E3">
                    <!--begin::Body-->
                    <div class="card-body d-flex flex-column">
						<div class="d-flex flex-column flex-grow-1">
                    		<h2 style="text-align: center;">Purchase Request Status Counts</h2>
							<div class="d-flex justify-content-center">
                                <canvas id="donutChart"></canvas>
                            </div>
						</div>
					</div>

                       
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Mixed Widget 13-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Container-->
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Retrieve the status counts
    var status1Count = {{ $prCounts['pr_status_1'] }};
    var status2Count = {{ $prCounts['pr_status_2'] }};
    var status3Count = {{ $prCounts['pr_status_3'] }};

    // Create the donut chart
    var donutChart = new Chart(document.getElementById('donutChart'), {
        type: 'doughnut',
        data: {
            labels: ['Pending', 'Approve', 'Reject'],
            datasets: [{
                data: [status1Count, status2Count, status3Count],
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56']
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: true,
                position: 'bottom',
                align: 'center',
                labels: {
                    boxWidth: 10,
                    padding: 15
                }
            },
            plugins: {
                datalabels: {
                    display: true,
                    color: 'white',
                    font: {
                        weight: 'bold'
                    },
                    formatter: function (value, context) {
                        var label = context.chart.data.labels[context.dataIndex];
                        var count = context.dataset.data[context.dataIndex];
                        return label + ': ' + count;
                    },
                    anchor: 'end',
                    align: 'start',
                    offset: 10
                }
            }
        }
    });
</script>
-->
@endsection

