<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tambah Produk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{asset('/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		@error('name_produk') <div class="alert alert-primary" role="alert">{{$message}}</div> @enderror
		@error('stock_produk') <div class="alert alert-primary" role="alert">{{$message}}</div> @enderror
		@error('price_produk') <div class="alert alert-primary" role="alert">{{$message}}</div> @enderror
		@error('deskripsi') <div class="alert alert-primary" role="alert">{{$message}}</div> @enderror
		@error('foto_produk') <div class="alert alert-primary" role="alert">{{$message}}</div> @enderror
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('/images/icon/sapi.png')}}" alt="IMG">
				</div>
        <form class="login100-form validate-form" action="/produk" method="POST" enctype="multipart/form-data">
          @csrf
              <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="hf-email" class=" form-control-label">Produk</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="text" id="hf-email" name="name_produk" class="form-control @error('name_produk') is-invalid @enderror">
                  </div>
              </div>
              <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="hf-email" class=" form-control-label">Stock</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="int" id="hf-email" name="stock_produk" class="form-control @error('stock_produk') is-invalid @enderror">
                  </div>
              </div>
              <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="hf-email" class=" form-control-label">Harga</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="int" id="hf-email" name="price_produk" class="form-control @error('price_produk') is-invalid @enderror">
                  </div>
              </div>
							<div class="row form-group">
                  <div class="col col-md-3">
                      <label for="hf-email" class=" form-control-label">Deskripsi</label>
                  </div>
                  <div class="col-12 col-md-9">
											<textarea id="hf-email" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="8" cols="80"></textarea>
                  </div>
              </div>
							<div class="row form-group">
									<div class="col col-md-3">
											<label for="hf-email" class=" form-control-label">Foto</label>
									</div>
									<div class="col-12 col-md-9">
											<input type="file" name="foto_produk" class="@error('foto_produk') is-invalid @enderror">
									</div>
							</div>
						<button type="submit" class="login100-form-btn">
							Simpan
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">

						</span>
						<a class="txt2" href="#">

						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">

						</a>
					</div>
				</form>
			</div>
		</div>





<!--===============================================================================================-->
	<script src="{{asset('/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
