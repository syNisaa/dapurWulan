<!DOCTYPE html>
<html lang="en">
@include('templateAdmin.assetAdmin.cssAdmin')

<body>
    <div class="wrapper">
        @include('templateAdmin.sidebar')

        <div class="main">
            @include('templateAdmin.navbar')

            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3"><strong>Dashboard</strong> Analisis</h1>

                    <div class="row">
                        <div class="col-xl-6 col-xxl-5 d-flex">
                            <div class="w-100">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Pesanan <span></span></h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="truck"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3">{{$co}}</h1>
                                                <div class="mb-0">
                                                    <span class="text-danger">{{$pesanan}}</span>
                                                    <span class="text-muted">Yang belum Selesai</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Testimoni</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="users"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3">{{$ct}}</h1>
                                                <div class="mb-0">
                                                    <span class="text-success">{{$testiacc}}</span>
                                                    <span class="text-muted"> Sudah disetujui</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Produk</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="dollar-sign"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3">{{$cp}}</h1>
                                                <div class="mb-0">
                                                    <span class="text-success">{{$produkav}}</span>
                                                    <span class="text-muted">Available untuk/ Dibeli</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col mt-0">
                                                        <h5 class="card-title">Jenis Produk</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <div class="stat text-primary">
                                                            <i class="align-middle" data-feather="shopping-cart"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h1 class="mt-1 mb-3">{{$cj}}</h1>
                                                <div class="mb-0">
                                                    <span class="text-danger">100%</span>
                                                    <span class="text-muted">Valid</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-xxl-7">
                            <div class="card flex-fill w-100">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Jumlah Pesanan berdasarkan Bulan</h5>
                                </div>
                                <div class="card-body py-3">
                                    <div class="chart chart-sm">
                                        <canvas id="chartjs-dashboard-line"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
                            <div class="card flex-fill" style="height: 100%; overflow-x:scroll">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Latest Projects</h5>
                                </div>
                                <table class="table table-hover my-0">
                                    <thead>
                                        <tr>
                                            <th>Pesanan</th>
                                            <th class="d-none d-xl-table-cell">Tanggal Pesan</th>
                                            <th class="d-none d-xl-table-cell">Tanggal Ambil</th>
                                            <th>Status</th>
                                            <th class="d-none d-md-table-cell">Total Harga</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($pesan as $no => $p)
                                        <tr>
                                            <td>{{$p->produk_pesanan}}</td>
                                            <td class="d-none d-xl-table-cell">{{$p->tanggal_pesanan}}</td>
                                            <td class="d-none d-xl-table-cell">{{$p->tanggal_pengambilan}}</td>
                                            <td><span class="badge bg-danger">{{$p->status}}</span></td>
                                            <td class="d-none d-md-table-cell">Rp. {{$p->total_harga}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
                            <div class="card flex-fill">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Calendar</h5>
                                </div>
                                <div class="card-body d-flex">
                                    <div class="align-self-center w-100">
                                        <div class="chart">
                                            <div id="datetimepicker-dashboard"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="https://adminkit.io/"
                                    target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted"
                                    href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin
                                        Template</strong></a> &copy;
                            </p>
                        </div>

                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");

            var gradient = ctx.createLinearGradient(0, 0, 0, 225);
            gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
            gradient.addColorStop(1, "rgba(215, 227, 244, 0)");

            new Chart(document.getElementById("chartjs-dashboard-line"), {
                type: "line",
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Pesanan Masuk per Bulan",
                        fill: true,
                        backgroundColor: gradient,
                        borderColor: 'rgba(54, 162, 235, 1)', // ganti dari window.theme.primary
                        data: @json($chartData),
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    legend: {
                        display: false
                    },
                    tooltips: {
                        intersect: false
                    },
                    hover: {
                        intersect: true
                    },
                    plugins: {
                        filler: {
                            propagate: false
                        }
                    },
                    scales: {
                        xAxes: [{
                            // reverse: true, // bisa di-nonaktifkan
                            gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                        }],
                        yAxes: [{
                            ticks: {
                                stepSize: 5
                            },
                            display: true,
                            borderDash: [3, 3],
                            gridLines: {
                                color: "rgba(0,0,0,0.0)"
                            }
                        }]
                    }
                }
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const today = new Date();

            const year = today.getFullYear();
            const month = String(today.getMonth() + 1).padStart(2, '0');
            const day = String(today.getDate()).padStart(2, '0');
            const defaultDate = `${year}-${month}-${day}`;

            document.getElementById("datetimepicker-dashboard").flatpickr({
                inline: true,
                defaultDate: defaultDate,
                prevArrow: "<span title='Previous month'>&laquo;</span>",
                nextArrow: "<span title='Next month'>&raquo;</span>",
            });
        });
    </script>



    @include('templateAdmin.assetAdmin.jsAdmin')

</body>

</html>