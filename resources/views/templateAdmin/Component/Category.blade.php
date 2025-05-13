@include('templateAdmin.assetAdmin.cssAdmin')

<body>
    <div class="wrapper">
        @include('templateAdmin.sidebar')

        <div class="main">
            @include('templateAdmin.navbar')

            <main class="content">
                <div class="container-fluid p-0">

                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Category</h1>
                        <a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html">
                            All Category Dapur Wulan
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-xl-8">
                            <div class="card">
                                <div class="card-header">

                                    <h5 class="card-title mb-0">Category Product and Others</h5>
                                </div>
                                <div class="card-body h-100"  style="overflow-x: auto;">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Kategori</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($jenis as $no => $jp)
                                            <tr>
                                                <td>{{$jp->nama_jenisproduk}}</td>
                                                <td>
                                                    <form action="{{ url('/category/delete/' . $jp->id) }}" method="POST" style="display:inline;">
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

                        <div class="col-md-4 col-xl-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Tambah Kategori</h5>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('adminCategoryAdd') }}">
                                        @csrf
                                        <input type="text" name="nama_jenisproduk" class="form-control"
                                            placeholder="input here"><br>
                                        @error('category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                        <input type="submit" class="btn btn-outline-primary form-control" id=""">
                                            </form>
                                </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>

  
</body>

</html>