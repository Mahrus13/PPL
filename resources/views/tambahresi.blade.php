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
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('/images/icon/sapi.png')}}" alt="IMG">
				</div>

        <form class="login100-form validate-form" action="/keranjang/{{$data->id}}" method="POST" enctype="multipart/form-data">
          @csrf
          {{method_field('PUT')}}
					<h3>Masukkan No.Resi</h3> <br>
					@error('resi') <div class="alert alert-primary" role="alert">{{$message}}</div> @enderror
          <div class="row form-group">
              <div class="col col-md-3">
                  <label for="hf-email" class=" form-control-label">No.Resi</label>
              </div>
              <div class="col-12 col-md-9">
                  <input type="number" id="hf-email" name="resi" class="form-control @error('email') is-invalid @enderror" value="{{$data->resi}}">
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
