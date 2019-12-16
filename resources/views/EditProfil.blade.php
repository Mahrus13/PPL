<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ubah</title>
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
					<img src="{{asset('storage/'.Auth::user()->foto)}}" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="/users/{{Auth::user()->id}}" method="POST">
          @csrf
          {{method_field('PUT')}}
					<span class="login100-form-title">
						Edit Profile
					</span>
            <label><h4>Name</h4></label>
            <h5><input class="form-control" type="text" name="name" value="{{$users->name}}"></h5>
            <label><h4>Email</h4></label>
            <h5><input class="form-control" type="text" name="email" value="{{($users->email)}}"></h5>
            <label><h4>Tanggal Lahir</h4></label>
            <h5><input class="form-control" type="date" name="ttl" value="{{($users->tanggal_lahir)}}"></h5>
						<label><h4>No.Telp</h4></label>
						<h5><input class="form-control" type="text" name="phone" value="{{($users->phone)}}"><br>
            <label><h4>Alamat</h4></label>
            <h5><input class="form-control" type="text" name="alamat" value="{{($users->alamat)}}">
					  <div class="container-login100-form-btn">
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
