<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/loginAssets/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(assets/loginAssets/images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login #10</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Registrarse</h3>
		      	<form action="{{'register'}}" method="POST" class="signin-form">
					@csrf
                    <div class="form-group">
                        <input type="text" class="form-control" type="text" placeholder="Ingrese un nombre" name="name" required>
                    </div>
		      		<div class="form-group">
		      			<input type="text" class="form-control" type="email" placeholder="Correo Electronico" name="email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Contrasena" name="password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
                <div class="form-group">
                    <input id="password-field" type="password" class="form-control" placeholder="Confirmar Contrasena" name="password_confirmation" required>
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Crear Cuenta</button>
	            </div>
	          </form>
{{-- 	          <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div> --}}
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="assets/loginAssets/js/jquery.min.js"></script>
  <script src="assets/loginAssets/js/popper.js"></script>
  <script src="assets/loginAssets/js/bootstrap.min.js"></script>
  <script src="assets/loginAssets/js/main.js"></script>

	</body>
</html>

