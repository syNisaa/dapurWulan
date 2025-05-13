@include('templateAdmin.assetAdmin.cssAdmin')

<body>
    <div class="wrapper">
        @include('templateAdmin.sidebar')

        <div class="main">
            @include('templateAdmin.navbar')

            <main class="content">
                <div class="container-fluid p-0">
                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Informasi seputar Dapur Wulan</h1>
                        <a class="badge bg-dark text-white ms-2" href="/" target="_blank">Lihat Company Profile</a>
                    </div>

                    <div class="row">
                        <div class="col-12 col-lg-6">
                            
                        @foreach ($ordere as $no => $order)
                            <form method="POST" action="{{ url('/updateOrder/' . $order->id) }}">
                                @csrf
                                {{-- Tambahkan jika method PATCH di route --}}
                                {{-- @method('PATCH') --}}

                                {{-- Nama Pelanggan --}}
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Nama Pelanggan</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="form-control" name="nama_pelanggan" placeholder="Nama Pelanggan" value="{{ old('nama_pelanggan', $order->nama_pelanggan) }}">
                                    </div>
                                </div>

                                {{-- Produk Pesanan --}}
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Produk Yang Dipesan</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="form-control" name="produk_pesanan" placeholder="Nama Produk" value="{{ old('produk_pesanan', $order->produk_pesanan) }}">
                                    </div>
                                </div>

                                {{-- Total Harga --}}
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Total Harga</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="form-control" name="total_harga" placeholder="Harga Keseluruhan" value="{{ old('total_harga', $order->total_harga) }}">
                                    </div>
                                </div>

                                {{-- Tanggal Pesanan --}}
                                <div class="card mb-3">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Tanggal Pesanan</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="date" class="form-control" name="tanggal_pesanan" value="{{ old('tanggal_pesanan', \Carbon\Carbon::parse($order->tanggal_pesanan)->format('Y-m-d')) }}">
                                    </div>
                                </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            {{-- Alamat --}}
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Alamat</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control" rows="5" name="alamat" placeholder="Alamat">{{ old('alamat', $order->alamat) }}</textarea>
                                </div>
                            </div>

                            {{-- Tanggal Pengambilan --}}
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Tanggal Pengambilan</h5>
                                </div>
                                <div class="card-body">
                                    <input type="date" class="form-control" name="tanggal_pengambilan" value="{{ old('tanggal_pengambilan', \Carbon\Carbon::parse($order->tanggal_pengambilan)->format('Y-m-d')) }}">
                                </div>
                            </div>

                            {{-- Metode Pembayaran --}}
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Metode Pembayaran</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control" name="metode_pembayaran" placeholder="Metode Pembayaran" value="{{ old('metode_pembayaran', $order->metode_pembayaran) }}">
                                </div>
                            </div>

                            {{-- Tombol Submit --}}
                            <input type="submit" class="btn btn-outline-primary form-control" value="Update Data">
                            </form>
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
