<!DOCTYPE html>
<html lang="en">
<head>
	<title>Detail</title>
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
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
				<img class="card-img-top" src="{{asset('storage/'.$data->foto)}}">
				</div>
				<form class="login100-form validate-form" action="{{route ('keranjang.store')}}" method="POST">
          @csrf
          <label><h4> <b>Nama Produk</b> </h4></label>
					<h5 class="form-control">{{$data->name_produk}}</h5><br>
          <label><h4> <b>Harga</b> </h4></label>
					<h5 class="form-control">Rp.{{($data->price_produk)}}</h5><br>
					<label><h4> <b>Deskripsi</b> </h4></label>
					<h5 class="form-control">{{($data->deskripsi)}}</h5><br>
          <!-- <label><h4> <b>Dokter</b> </h4></label>
					<h5 class="form-control">{{($data->user->name)}}</h5><br><br> -->
          <input type="hidden" name="id" value="{{$data->id}}">
          <input type="hidden" name="name_produk" value="{{$data->name_produk}}">
          <input type="hidden" name="price_produk" value="{{$data->price_produk}}">
					<input type="number" name="qty" class="form-control" id="formGroupExampleInput2" placeholder="Jumlah" min="1" max="{{$data->stock_produk}}" required> <br>
						<button type="submit" class="login100-form-btn">
							Tambah Ke Keranjang
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
