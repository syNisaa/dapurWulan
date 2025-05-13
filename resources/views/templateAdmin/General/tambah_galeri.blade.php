@include('templateAdmin.assetAdmin.cssAdmin')

<body>
    <div class="wrapper">
        @include('templateAdmin.sidebar')

        <div class="main">
            @include('templateAdmin.navbar')

            <main class="content">
                <div class="container-fluid p-0">

                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">Gallery</h1>
                        <a class="badge bg-dark text-white ms-2" href="/adminGallery">
                            Back to List Gallery
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Gallery Dapur Wulan</h5>
                                </div>
                                <div class="card-body h-100"  style="overflow-x: auto;">
                                <form method="POST" action="{{ route('adminCategoryAdd') }}">
                                        @csrf    
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Category Name</h5>
                                        </div>
                                        <div class="card-body">
                                                <input type="text" name="category" class="form-control"
                                                    placeholder="input here"><br>
                                                @error('category')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
							        </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Upload Gambar</h5>
                                        </div>
                                        <div class="card-body">
                                                <input type="file" name="file" class="form-control"
                                                    placeholder="input here"><br>
                                                @error('category')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                        </div>
							        </div>
                                </div>

                                <input type="submit" class="btn btn-outline-primary form-control" id=""">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>

    @include('templateAdmin.assetAdmin.jsAdmin')


</body>

</html>
