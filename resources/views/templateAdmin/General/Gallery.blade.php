@include('templateAdmin.assetAdmin.cssAdmin')

<body>
    <div class="wrapper">
        @include('templateAdmin.sidebar')

        <div class="main">
            @include('templateAdmin.navbar')

            <main class="content">
                <div class="container-fluid p-0">

                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Dokumentasi</h1>
                        <a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html">
                            Semua dokumentasi terkait dapur wulan, ada disini!
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-xl-8">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Galeri Dapur Wulan</h5>
                                </div>

                                <div class="card-body h-100"  style="overflow-x: auto;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Gambar</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($galeri as $ng => $g)
                                            <tr>
                                                <td>{{$g->jenisProduk->nama_jenisproduk}}</td>
                                                <td><img alt="img" src="{{ asset('gambar/galeripoto/' . $g->gambar) }}" style="width: 100px;"></td>
                                                <td>
                                                    <form action="{{ url('/galeri/delete/' . $g->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Yakin mau hapus foto ini?')">Hapus</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Tambah Dokumentasi</h5>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('store.galeri') }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <select class="form-select" name="id_jenis" id="id_jenis" required>
                                            <option value="">-- Pilih Jenis --</option>
                                            @foreach($jenis as $jenis)
                                            <option value="{{ $jenis->id }}">{{ $jenis->nama_jenisproduk }}</option>
                                            @endforeach
                                            <br><input type="file" class="form-control nama_toko mt-3" name="gambarUp">
                                            <br><input type="submit" class="btn btn-outline-primary form-control">
                                    </form>
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