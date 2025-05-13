@include('templateAdmin.assetAdmin.cssAdmin')

<body>
    <div class="wrapper">
        @include('templateAdmin.sidebar')

        <div class="main">
            @include('templateAdmin.navbar')

            <main class="content">
                <div class="container-fluid p-0">

                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Testimoni</h1>
                        <a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html">
                            Pengalaman Pelanggan
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-xl-12">
                            <div class="card">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Berdasarkan pengalaman pelanggan</h5>
                                </div>
                                <div class="card-body h-100"  style="overflow-x: auto;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Nama Makanan</th>
                                                <th scope="col">Deskripsi</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Update Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($testiAdmin as $nt => $testi)
                                            <tr>
                                                <td>{{$testi->nama}}</td>
                                                <td>{{$testi->nama_makanan}}</td>
                                                <td>{{$testi->deskripsi}}</td>
                                                <td>{{$testi->status}}</td>
                                                <td class="align:center;">
                                                @csrf
                                                @method('PUT')
                                                    @if($testi->status == "proses")
                                                    <form action="{{ route('testimoni.updateStatus', [$testi->id, 'acc']) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-outline-primary" style="width: 100%;">Terima</button>
                                                    </form>

                                                    <form action="{{ route('testimoni.updateStatus', [$testi->id, 'decline']) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('PUT')
                                                        <button style="width: 100%;" type="submit" class="btn btn-outline-danger">Tolak</button >
                                                    </form>

                                                    @elseif($testi->status == "acc")
                                                    <form action="{{ route('testimoni.updateStatus', [$testi->id, 'hide']) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('PUT')
                                                        <button style="width: 100%;" type="submit" class="btn btn-outline-danger">Sembunyikan</button>
                                                    </form>
                                                    @elseif($testi->status == "hide")
                                                    <p>-</p>
                                                    @else
                                                    <span>Testimoni tidak memenuhi syarat</span>
                                                    @endif
                                                </form>
                                                </td>
                                                <td>
                                                    <form action="{{ url('/testi/delete/' . $testi->id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Yakin mau hapus kategori ini?')">Hapus</button>
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
