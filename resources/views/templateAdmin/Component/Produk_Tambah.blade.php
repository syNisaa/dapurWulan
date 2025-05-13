@include('templateAdmin.assetAdmin.cssAdmin')

<body>
    <div class="wrapper">
        @include('templateAdmin.sidebar')

        <div class="main">
            @include('templateAdmin.navbar')

            <main class="content">
                <div class="container-fluid p-0">
                    <form action="{{ route('store.produk') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <h1 class="h3 d-inline align-middle">Produk Dapur Wulan</h1>
                            <a class="badge bg-dark text-white ms-2" href="/adminProduct">
                                List Produk
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Tambah Produk yang di Tampilkan</h5>
                                    </div>
                                    <div class="card-body h-100">
                                        @csrf
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Nama Produk</h5>
                                            </div>
                                            <div class="card-body">
                                                <input type="text" name="nama_produk" class="form-control"
                                                    placeholder="input here"><br>
                                                @error('product')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Kategori Produk</h5>
                                            </div>
                                            <div class="card-body">
                                                <select class="form-select" name="id_jenis" id="id_jenis" required>
                                                    <option value="">-- Pilih Jenis --</option>
                                                    @foreach($jenis as $jenis)
                                                    <option value="{{ $jenis->id }}">{{ $jenis->nama_jenisproduk }}</option>
                                                    @endforeach
                                                </select>
                                                @error('product')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Deskripsi Produk</h5>
                                            </div>
                                            <div class="card-body">
                                                <textarea class="form-control" class="deskripsi" name="deskripsi" rows="2" value="" placeholder="Textarea"></textarea>
                                                @error('product')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Harga Produk</h5>
                                            </div>
                                            <div class="card-body">
                                                <input type="number" name="harga" class="form-control"
                                                    placeholder="input here"><br>
                                                @error('product')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Status Pesan</h5>
                                            </div>
                                            <div class="card-body">
                                                <select class="form-select" name="status_pesan" id="status_pesan" required>
                                                    <option value="">-- Pilih Status --</option>
                                                    <option value="available">Available</option>
                                                    <option value="sold out">Sold Out</option>

                                                </select>
                                                @error('product')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title mb-0">Gambar Produk</h5>
                                            </div>
                                            <div class="card-body">
                                                <input type="file" name="gambar" class="form-control"
                                                    placeholder="input here"><br>
                                                @error('product')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <input type="submit" class="btn btn-outline-primary form-control" id="">
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