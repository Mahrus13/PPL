<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cow Doc</title>
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
		@error('judul') <div class="alert alert-primary" role="alert">{{$message}}</div> @enderror
		@error('tanggal') <div class="alert alert-primary" role="alert">{{$message}}</div> @enderror
		@error('deskripsi') <div class="alert alert-primary" role="alert">{{$message}}</div> @enderror
    <div class="container-login100">
      <div class="wrap-login100 col-md-100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="{{asset('/images/sapi.png')}}" alt="IMG">
        </div>

        <form class="login100-form validate-form" action="/artikel/{{$artikel->id}}" method="POST" enctype="multipart/form-data">
          @csrf
          {{method_field('PUT')}}
          <span class="login100-form-title">
            Edit Artikel
          </span>
          <div class="wrap-input100" data-validate = "Valid email is required: ex@abc.xyz">
            <label> <h4> Judul </h4> </label><br>
            <input type="text" id="hf-email" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{$artikel->judul}}">
          </div>
					<div class="wrap-input100" data-validate = "Valid email is required: ex@abc.xyz">
            <label> <h4> Tanggal </h4> </label><br>
            <input type="date" id="hf-email" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{$artikel->tanggal}}">
          </div>
          <div class="wrap-input100" data-validate = "Valid email is required: ex@abc.xyz">
            <label> <h4> Deskripsi </h4> </label><br>
            <textarea name="deskripsi" rows="8" cols="80" id="hf-email" class="form-control @error('deskripsi') is-invalid @enderror">{{$artikel->deskripsi}}</textarea>
          </div>

          <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn">
              SUbmit
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
