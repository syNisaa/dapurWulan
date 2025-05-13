@include('templateAdmin.assetAdmin.cssAdmin')
<style>
    .fancybox__container .fancybox__content {
        max-width: 80vw;
        max-height: 80vh;
    }
</style>

<body>
    <div class="wrapper">
        @include('templateAdmin.sidebar')

        <div class="main">
            @include('templateAdmin.navbar')

            <main class="content">
                <div class="container-fluid p-0">

                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Produksi Rumahan</h1>
                        <a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html">
                            Produk yang ditawarkan di Dapur Wulan
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-xl-12">
                            <div class="card">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Produk Dapur Wulan </h5>
                                </div>
                                <div class="card-body h-100" style="overflow-x: auto;">
                                    <a href="/adminProductDataTambah" class="btn btn-outline-success">Tambah Data</a>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama Produk</th>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">Harga</th>
                                                <th scope="col">Gambar</th>
                                                <th scope="col">Status Pesan</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($produk as $no => $p)
                                            <tr>
                                                <td>{{$p->nama_produk}}</td>
                                                <td>{{$p->jenis->nama_jenisproduk}}</td>
                                                <td style="text-align: justify;">{{$p->deskripsi}}</td>
                                                <td>{{$p->harga}}</td>
                                                <td>
                                                    <a href="{{ asset('gambar/produkpoto/' . $p->gambar) }}" data-fancybox="gallery" data-width="800" data-height="600">
                                                        <img src="{{ asset('gambar/produkpoto/' . $p->gambar) }}" alt="gambar produk" style="width: 40px; height: auto;">
                                                    </a>
                                                </td>

                                                <td>
                                                    @if($p->status_pesan == "available")
                                                    <form action="{{ route('produk.updateStatus', [$p->id, 'sold out']) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-outline-success" onclick="return confirm('Stok Produk Habis? ')" style="width: 100%;">Available</button>
                                                    </form>
                                                    @else
                                                    <form action="{{ route('produk.updateStatus', [$p->id, 'available']) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-outline-warning" onclick="return confirm('Produk Sudah Bisa Dibeli? ')" style="width: 100%;">Sold Out</button>
                                                    </form>
                                                    @endif
                                                    <!-- <button type="button" class="btn btn-outline-secondary">{{$p->status_pesan}}</button> -->
                                                </td>
                                                <td>
                                                    <a href="{{ url('/produkedit'.$p->id) }}" class="btn btn-outline-primary">Edit Data</a>
                                                    <form action="{{ url('/produk/delete/' . $p->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Yakin mau hapus produk ini?')">Hapus</button>
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