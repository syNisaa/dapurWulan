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
                        <a class="badge bg-dark text-white ms-2" href="/" target="_blank">
                            Lihat Company Profile
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">

                            <form method="POST" action="{{ url('/storeorder') }}">
                                @csrf
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Nama Pelanggan</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="form-control nama_toko" name="nama_pelanggan" placeholder="Nama Pelanggan" value="">
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Produk Yang Dipesan</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="form-control email" placeholder="Nama Produk" name="produk_pesanan" value="">
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Total Harga</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="form-control no_telefon" placeholder="harga keseluruhan" name="total_harga" value="">
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Tanggal Pesanan</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="date" class="form-control jam_buka" placeholder="" name="tanggal_pesanan" value="">
                                    </div>
                                </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Alamat</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control" class="alamat" rows="5" name="alamat" value="" placeholder="Textarea"></textarea>
                                </div>
                            </div>

                            <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Tanggal Pengambilan</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="date" class="form-control jam_buka" placeholder="" name="tanggal_pengambilan" value="">
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Metode Pembayaran</h5>
                                    </div>
                                    <div class="card-body">
                                        <input type="text" class="form-control no_telefon" placeholder="Rencana pembayaran" name="metode_pembayaran" value="">
                                    </div>
                                </div>
                            <input type="submit" class="btn btn-outline-primary form-control" id="">
                            </form>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>


</body>

</html>