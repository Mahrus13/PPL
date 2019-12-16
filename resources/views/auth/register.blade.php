<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
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
		@error('name') <div class="alert alert-primary" role="alert">{{$message}}</div> @enderror
		@error('email') <div class="alert alert-primary" role="alert">{{$message}}</div> @enderror
		@error('tanggal_lahir') <div class="alert alert-primary" role="alert">{{$message}}</div> @enderror
		@error('JK') <div class="alert alert-primary" role="alert">{{$message}}</div> @enderror
		@error('phone') <div class="alert alert-primary" role="alert">{{$message}}</div> @enderror
		@error('alamat') <div class="alert alert-primary" role="alert">{{$message}}</div> @enderror
		@error('password') <div class="alert alert-primary" role="alert">{{$message}}</div> @enderror
		@error('foto') <div class="alert alert-primary" role="alert">{{$message}}</div> @enderror
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/sapi.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
					<span class="login100-form-title">
						Register
					</span>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class=" form-control input100 @error('name') is-invalid @enderror" type="text" name="name" placeholder="Name">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="form-control input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="form-control input100 @error('tanggal_lahir') is-invalid @enderror" type="date" name="tanggal_lahir">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-calendar" aria-hidden="true"></i>
            </span>
          </div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						&nbsp &nbsp &nbsp &nbsp &nbsp
						<label class=" @error('JenisKelamin') is-invalid @enderror">
							<input type="radio" name="JenisKelamin" value="Laki-Laki">Laki-Laki &nbsp &nbsp &nbsp
							<input type="radio" name="JenisKelamin" value="Perempuan">Perempuan
						</label>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="form-control input100 @error('phone') is-invalid @enderror" type="number" name="phone" placeholder="No.Telp">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-phone" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
            <input class="form-control input100 @error('alamat') is-invalid @enderror" type="text" name="alamat" placeholder="Alamat">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-home" aria-hidden="true"></i>
            </span>
          </div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="form-control input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<label> <b>Foto</b> </label>
						<input class="form-control  @error('foto') is-invalid @enderror" type="file" name="foto">
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Register
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
