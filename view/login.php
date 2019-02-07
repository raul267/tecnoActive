<!DOCTYPE html>
<html lang="en">
<head>
	<title>PDVChile</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="assets/login/image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/login/css/main.css">
	<link rel="shortcut icon" href="assets/login/images/fondoLogin.ico" />
<!--===============================================================================================-->
</head>

<body style="background-image: url('assets/login/images/fondoCortado.jpg');">

	<div class="limiter">
		<div class="container-login100"  style="opacity:0.9;">
			<div class="wrap-login100 p-b-160 p-t-50">
				<div class="text-center">
					<img src="assets/login/images/fondoLogin.png" alt="" style="height:300px; width:300px;">
				</div>
				<form class="login100-form validate-form" method="post" action="?c=Usuario&a=Ingresar">
					<span class="login100-form-label p-b-43" style="font-weight:bold; color:green">
						Bienvenidos al sistema de gestión de PDV CHILE
					</span>
					<div class="wrap-input100 rs1 validate-input" data-validate = "Debe ingresar su nombre de usuario">
						<input class="input100" type="text" id="txtNombre" name="txtNombre" required>
						<label for="txtNombre" class="label-input100">Usuario</label>
					</div>


					<div class="wrap-input100 rs2 validate-input" data-validate="Debe ingresar su contraseña">
						<input class="input100" type="password" id="txtPassword"name="txtPassword" required>
						<span class="label-input100">Clave</span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn"name="btnIngresar" value="Ingresar">
					</div>

					<div class="text-center w-full p-t-23">
						<a href="#" class="txt1">
							Recuperar contraseña
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="page-header">
		<label style="color:white; ">
			Desarrollado por: <a href="https://www.tecnoactive.cl"><img style="display:inline-block; width:301; height:30px;"src="assets/login/images/logotecno.png" alt=""></a>
		</label>

	</div>




<!--===============================================================================================-->
	<script src="assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/login/js/main.js"></script>

</body>
</html>
