@include('templateAdmin.assetAdmin.cssAdmin')

<body>
    <div class="wrapper">
        @include('templateAdmin.sidebar')

        <div class="main">
            @include('templateAdmin.navbar')

            <main class="content">
                <div class="container-fluid p-0">

                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Pesanan</h1>
                        <a class="badge bg-danger text-white ms-2" href="upgrade-to-pro.html">
                            Yang belum selesai
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-xl-12">
                            <div class="card">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Pesanan Pelanggan</h5>
                                </div>
                                <div class="card-body h-100"  style="overflow-x: auto;">

                                    <a href="/adminOrderAdd" type="button" class="btn btn-outline-primary">Tambah Data</a>
                                    <a href="{{ route('laporanPdf') }}" target="_blank" class="btn btn-danger">
                                        <i class="fa fa-file-pdf"></i> Export PDF
                                    </a>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama Pelanggan</th>
                                                <th scope="col">Produk Pesanan</th>
                                                <th scope="col">Total Harga</th>
                                                <th scope="col">Tanggal Pesanan</th>
                                                <th scope="col">Tanggal Pengambilan</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Status Pesan</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pesanan as $no => $p)
                                            <tr>
                                                <td>{{$p->nama_pelanggan}}</td>
                                                <td>{{$p->produk_pesanan}}</td>
                                                <td>Rp. {{$p->total_harga}}</td>
                                                <td>{{$p->tanggal_pesanan}}</td>
                                                <td>{{$p->tanggal_pengambilan}}</td>
                                                <td>{{$p->alamat}}</td>
                                                <td>
                                                    <form action="{{ route('pesanan.updateStatus', [$p->id, 'selesai']) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Pesanan Sudah Selesai?')">{{$p->status}}</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <a href="{{ url('/pesananedit'.$p->id) }}" class="btn btn-outline-success">Edit Data</a> <br>
                                                    <form action="{{ url('/pesanan/delete/' . $p->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Yakin mau hapus pesanan ini?')">Hapus</button>
                                                    </form>
                                                </td>
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