@extends('admin_layouts.app')
@section('content')
<div class="row  p-lg-5 p-md-4 p-sm-2 p-2"  style="background-color: black">


            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-6 col-6 mt-lg-4 mt-md-3 mt-sm-2 mt-2" >
                    <div class="card   mb-2" style="background-color: rgb(19, 101, 252)">
                            <div class="text-white p-1 pt-2 d-flex justify-content-around">
                                <h4  class="text-white "><i class="fa-solid fa-money-check-dollar fs-1"></i></h4>
                                <h4 class="text-white "> Balance</h4>
                            </div>
                            <div class="pt-lg-5 pt-md-4 pt-sm-3 pt-3 pe-lg-3 pe-md-3 pe-sm-2 pe-1 text-center">
                                <h4 class="mb-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3 text-white ">{{ number_format(auth()->user()->balanceFloat) }}</h4>
                            </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-1">
                            <p class="mb-0 text-white"><span class="text-success text-sm font-weight-bolder"></span>latest update</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-6 mt-lg-4 mt-md-3 mt-sm-2 mt-2" >
                    <div class="card bg-danger  mb-2" >
                            <div class="text-white p-1 pt-2 d-flex justify-content-around">
                                <h4  class="text-white ">  <i class="fa-solid  fa-user fs-1"></i></h4>
                                @if(auth()->user()->hasRole('Admin'))
                                <h4 class="text-white "> Master</h4>
                                @else
                                <h4 class="text-white "> Agents</h4>
                                @endif
                            </div>
                            <div class="pt-lg-5 pt-md-4 pt-sm-3 pt-3 pe-lg-3 pe-md-3 pe-sm-2 pe-1 text-center">
                                @if(auth()->user()->hasRole('Admin'))
                                <div class="text-center ">
                                    <h4 class="mb-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3 text-white">{{$master_count}}</h4>
                                </div>
                                @else
                                <div class="text-center ">
                                    <h4 class="mb-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3 text-white">{{$agent_count}}</h4>
                                </div>
                                @endif
                            </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-1">
                            <p class="mb-0 text-white"><span class="text-success text-sm font-weight-bolder"></span>latest update</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-6 mt-lg-4 mt-md-3 mt-sm-2 mt-2" >
                    <div class="card  bg-gradient-success  mb-2" >
                            <div class="text-white p-1 pt-2 d-flex justify-content-around">
                                <h4  class="text-white "><i class="fa-solid fa-users fs-1"></i></h4>
                                <h4 class="text-white "> Players</h4>
                            </div>
                            <div class="pt-lg-5 pt-md-4 pt-sm-3 pt-3 pe-lg-3 pe-md-3 pe-sm-2 pe-1 text-center">
                                <h4 class="mb-0 mt-lg-0 mt-md-3 mt-sm-3 mt-3 text-white ">{{$player_count}}</h4>
                            </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-1">
                            <p class="mb-0 text-white"><span class="text-success text-sm font-weight-bolder"></span>latest update</p>
                        </div>
                    </div>
                </div>

        </div>


   @can('admin_access')
        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="row gx-4 mt-4">
                <div class="col-12">
                    <div class="card">
                        <form action="{{ route('admin.balanceUp') }}" method="post">
                            @csrf
                            <div class="card-header p-3 pb-0">
                                <h6 class="mb-1">Update Balance</h6>
                                <p class="text-sm mb-0">
                                    Owner can update balance.
                                </p>
                            </div>
                            <div class="card-body p-3">
                                <div class="input-group input-group-static my-lg-4  my-md-3 my-sm-2 my-2">
                                    <label>Amount</label>
                                    <input type="integer" class="form-control" name="balance">
                                </div>

                                <div class="text-end">
                                    <button class="btn bg-gradient-dark mb-0 ">Update </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endcan



    @endsection
    @section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.32/dist/sweetalert2.all.min.js"></script>
    <script src="https://demos.creative-tim.com/material-dashboard-pro/assets/js/plugins/chartjs.min.js"></script>
    <script src="https://demos.creative-tim.com/material-dashboard-pro/assets/js/plugins/jkanban/jkanban.js"></script>
    <script>
        var errorMessage = @json(session('error'));
        var successMessage = @json(session('success'));

        console.log(successMessage);
    </script>
    <script>
        @if(session() -> has('success'))
        Swal.fire({
            icon: 'success',
            title: successMessage,
            showConfirmButton: false,
            timer: 1500
        })
        @elseif(session() -> has('error'))
        Swal.fire({
            icon: 'error',
            title: errorMessage,
            showConfirmButton: false,
            timer: 1500
        })
        @endif
    </script>
    <script>
        var ctx2 = document.getElementById("chart-pie").getContext("2d");
        // Pie chart
        new Chart(ctx2, {
            type: "pie",
            data: {
                labels: ['Deposit', 'Withdraw'],
                datasets: [{
                    label: "Transaction",
                    weight: 9,
                    cutout: 0,
                    tension: 0.9,
                    pointRadius: 2,
                    borderWidth: 1,
                    backgroundColor: ['#17c1e8', '#e91e63'],
                    data: [10, 20],
                    fill: false
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            color: '#c1c4ce5c'
                        },
                        ticks: {
                            display: false
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            color: '#c1c4ce5c'
                        },
                        ticks: {
                            display: false,
                        }
                    },
                },
            },
        });
    </script>
    @endsection
