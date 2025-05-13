
<link href="assetsAdmin/css/app.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

@include('templateAdmin.assetAdmin.cssAdmin')

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Selamat Datang!</h1>
							<p class="lead">
								Masuk ke akunmu, untuk mengelola Dapur Wulan!
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form method="POST" action="{{ route('login') }}">
										@csrf
										<div class="mb-3">
											<label class="form-label">Email</label>
											<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

											@error('email')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
										</div>
										<div class="mb-3">
											<label class="form-label">Password</label>
											<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

										@error('password')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
										</div>
										<div>
											<div class="form-check align-items-center">
												<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

												<label class="form-check-label" for="remember">
													{{ __('Remember Me') }}
												</label>
											</div>
										</div>
										<div class="d-grid gap-2 mt-3">
											<button type="submit" class="btn btn-primary">
												{{ __('Login') }}
											</button>
			
											@if (Route::has('password.request'))
												<a class="btn btn-link" href="{{ route('password.request') }}">
													{{ __('Lupa Password?') }}
												</a>
											@endif
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="text-center mb-3">
							Tidak punya akun? <a href="/">Kembali</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

    @include('templateAdmin.assetAdmin.jsAdmin')


</body>