@extends('admin.master')
@section('content')

<style>
    .size {
        width: 100%;
        height: 100%;
    }

    .chart-container {
        width: 100%;
        height: 100%;
        margin: auto;
    }

</style>
<div class="container" style="display: grid; margin-left: -15px;">
    <div class="row" style="height: 90px;">
        <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size"
            href="{{route('patients.create')}}"><i style="font-size: 30px;" class="fa fa-truck-medical"></i> Add
            Patient</a></div>
        <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size"
                href="{{route('patients.index')}}"><i style="font-size: 30px;" class="fa fa-wheelchair"></i> Patient
                Admission</a></div>
        <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size"
                href="{{route('doctor.create')}}"><i style="font-size: 30px;" class="fa fa-user-doctor"></i> Add
                Doctor</a></div>
        <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size"
                href="{{route('show.department')}}"><i style="font-size: 35px;" class="fa fa-apartment"></i> Add
                Department</a></div>
        <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size"
                href="{{route('staffs.create')}}"><i style="font-size: 30px;" class="fa fa-user-nurse"></i> Add
                Staffs</a></div>
    </div>
    <div class="row" style="height: 90px;">
        <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size"
                href="{{route('admissions.index')}}"><i style="font-size: 30px;" class=""></i> Admitted Patients</a></div>
        <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size" href="{{route('services.create')}}"><i
                    style="font-size: 30px;" class="fa fa-bed-bunk"></i>
                Add Services</a></div>
        <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size" href="{{route('beds.create')}}"><i
                    style="font-size: 30px;" class="fa-solid fa-bed"></i>
                Add Bed</a></div>
        <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size"
                href="{{route('tests.create')}}"><i style="font-size: 30px;" class=""></i> Add Test </a></div>
        <div class="col-md-2 card-body" style="padding:3px;"><a class="btn btn-success size" href="{{route('assign.test.create')}}"><i
                    style="font-size: 30px;" class="fa-solid fa-syringe"></i> Assign
                Test</a></div>
    </div>

    <div class="row" style="margin-top: 80px;">
        <div class="col-md-6">
            <div class="card chart-container">
                <canvas id="chart"></canvas>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card chart-container">
                <canvas id="doughnut"></canvas>
            </div>
        </div>

    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script>
    const ctx = document.getElementById("chart").getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["sunday", "monday", "tuesday",
                "wednesday", "thursday", "friday", "saturday"
            ],
            datasets: [{
                label: 'Last week',
                backgroundColor: 'rgba(161, 198, 247, 1)',
                borderColor: 'rgb(47, 128, 237)',
                data: [3000, 4000, 2000, 5000, 8000, 9000, 2000],
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                    }
                }]
            }
        },
    });

</script>
<script>
    const doughnut = document.getElementById("doughnut").getContext('2d');
    const myDoughnut = new Chart(doughnut, {
        type: 'doughnut',
        data: {
            labels: ["rice", "yam", "tomato", "potato", "beans",
                "maize", "oil"
            ],
            datasets: [{
                label: 'food Items',
                data: [30, 40, 20, 50, 80, 90, 20],
                backgroundColor: ["#0074D9", "#FF4136", "#2ECC40",
                    "#FF851B", "#7FDBFF", "#B10DC9", "#FFDC00",
                    "#001f3f", "#39CCCC", "#01FF70", "#85144b",
                    "#F012BE", "#3D9970", "#111111", "#AAAAAA"
                ]
            }]
        },
    });

</script>
@endsection
