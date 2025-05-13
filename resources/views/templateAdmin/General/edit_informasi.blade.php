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
                    @foreach ($informasi as $no => $info)
                    <div class="row">
                        <div class="col-12 col-lg-6">

                        <form method="POST" action="{{ url('/update' . $info->id) }}"> @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Nama Toko</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control nama_toko" name="nama_toko" placeholder="" value="{{$info->nama_toko}}">
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Email</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text" class="form-control email" placeholder="" name="email" value="{{$info->email}}">
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">No Telefon</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text"  class="form-control no_telefon" placeholder="" name="nomer_telepon" value="{{$info->nomer_telepon}}">
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Jam Buka</h5>
                                </div>
                                <div class="card-body">
                                    <input type="text"  class="form-control jam_buka" placeholder="" name="jam_buka" value="{{$info->jam_buka}}">
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Deskripsi</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control" class="deskripsi" rows="5" name="deskripsi" value="{{$info->deskripsi}}" placeholder="Textarea">{{ old('deskripsi', $info->deskripsi) }}</textarea>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Deskripsi</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control" class="deskripsi_toko" rows="5" name="deskripsi_toko" value="{{$info->deskripsi_toko}}" placeholder="Textarea">{{ old('deskripsi_toko', $info->deskripsi_toko) }}</textarea>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Alamat</h5>
                                </div>
                                <div class="card-body">
                                    <textarea class="form-control" class="deskripsi_toko" rows="2" value="{{$info->alamat}}" placeholder="Textarea" name="alamat">{{ old('alamat', $info->alamat) }}</textarea>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-outline-primary form-control" id="">
                            </form>
                            @endforeach
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>


</body>

</html>
