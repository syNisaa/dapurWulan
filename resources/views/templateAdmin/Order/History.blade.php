@include('templateAdmin.assetAdmin.cssAdmin')

<body>
    <div class="wrapper">
        @include('templateAdmin.sidebar')

        <div class="main">
            @include('templateAdmin.navbar')

            <main class="content">
                <div class="container-fluid p-0">

                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Riwayat Pesanan</h1>
                        <a class="badge bg-success text-white ms-2" href="#">
                            Yang sudah selesai
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <a href="{{ route('laporanPdfSelesai') }}" target="_blank" class="btn btn-success">
                                        <i class="fa fa-file-pdf"></i> Export PDF
                                    </a>
                                </div>
                                <div class="card-body h-100"  style="overflow-x: auto;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama Pelanggan</th>
                                                <th scope="col">Produk Pesanan</th>
                                                <th scope="col">Total Harga</th>
                                                <th scope="col">Tanggal Pesanan</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Metode Pembayaran</th>
                                                <th scope="col">Tanggal Pengambilan</th>
                                                <th scope="col">Status Pesan</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($history as $no => $p)
                                            <tr>
                                                <td>{{$p->nama_pelanggan}}</td>
                                                <td>{{$p->produk_pesanan}}</td>
                                                <td>Rp. {{$p->total_harga}}</td>
                                                <td>{{$p->tanggal_pesanan}}</td>
                                                <td>{{$p->alamat}}</td>
                                                <td>{{$p->metode_pembayaran}}</td>
                                                <td>{{$p->tanggal_pengambilan}}</td>
                                                <td class="text-success">{{$p->status}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>


</body>

</html>