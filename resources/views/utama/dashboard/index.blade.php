@extends('utama.layout.apputama')

@section('content')

<div class="container-fluid py-4">
    <div class="row">

     <!-- Total Pengguna -->
     <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card h-100"> <!-- Tambahkan h-100 -->
            <div class="card-body d-flex flex-column justify-content-between p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Pengguna</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{ $totalpengguna }}
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Simulasi Rakit Komputer -->
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card h-100"> <!-- Tambahkan h-100 -->
            <div class="card-body d-flex flex-column justify-content-between p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Simulasi Rakit Komputer</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{ $total_simulasi }}
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-success shadow text-center border-radius-md">
                            <i class="ni ni-laptop text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Rekomendasi Rakit Komputer -->
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card h-100"> <!-- Tambahkan h-100 -->
            <div class="card-body d-flex flex-column justify-content-between p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Rekomendasi Rakit</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{ $total_rekomendasi }}
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-warning shadow text-center border-radius-md">
                            <i class="ni ni-settings text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Komponen -->
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card h-100"> <!-- Tambahkan h-100 -->
            <div class="card-body d-flex flex-column justify-content-between p-3">
                <div class="row">
                    <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Komponen</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{ $totalkomponen }}
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                            <i class="bi bi-cpu text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        
    </div>

    <!-- Chart untuk Total Rekomendasi dalam 7 Hari -->
    <div class="row mt-4">
        <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="card z-index-2">
                <div class="card-body p-3">
                    <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
                        <div class="chart">
                            <canvas id="chart-bars_rekomendasi" class="chart-canvas" height="170"></canvas>
                        </div>
                    </div>
                    <h6 class="ms-2 mt-4 mb-0"> Total Rekomendasi Rakit Komputer dalam 7 Hari Terakhir </h6>
                </div>
            </div>
        </div>

        <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="card z-index-2">
                <div class="card-body p-3">
                    <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
                        <div class="chart">
                            <canvas id="chart-bars_simulasi" class="chart-canvas" height="170"></canvas>
                        </div>
                    </div>
                    <h6 class="ms-2 mt-4 mb-0"> Total Simulasi Rakit Komputer dalam 7 Hari Terakhir </h6>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Chart untuk Rekomendasi
    var ctxRekomendasi = document.getElementById("chart-bars_rekomendasi").getContext("2d");

    var chartDataRekomendasi = {
        labels: {!! json_encode($labels) !!},
        datasets: [{
            label: "Total Rekomendasi Rakit Komputer",
            backgroundColor: "rgba(75, 192, 192, 0.6)", 
            borderColor: "rgba(75, 192, 192, 1)",
            borderWidth: 2,
            data: {!! json_encode($values_rekomendasi) !!}
        }]
    };

    new Chart(ctxRekomendasi, {
        type: "bar",
        data: chartDataRekomendasi,
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: "Jumlah Rekomendasi"
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: "Tanggal"
                    }
                }
            }
        }
    });

    // Chart untuk Simulasi
    var ctxSimulasi = document.getElementById("chart-bars_simulasi").getContext("2d");

    var chartDataSimulasi = {
        labels: {!! json_encode($labels) !!},
        datasets: [{
            label: "Total Simulasi Rakit Komputer",
            backgroundColor: "rgba(255, 99, 132, 0.6)", 
            borderColor: "rgba(255, 99, 132, 1)",
            borderWidth: 2,
            data: {!! json_encode($values_simulasi) !!}
        }]
    };

    new Chart(ctxSimulasi, {
        type: "bar",
        data: chartDataSimulasi,
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: "Jumlah Simulasi"
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: "Tanggal"
                    }
                }
            }
        }
    });
</script>
@endsection
