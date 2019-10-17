<!DOCTYPE html>
<html lang="en">
<head>
	<title>Crud 2</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						CRUD
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Nombre de la red es requerida">
						<span class="label-input100">Nombre de la red</span>
						<input class="input100" type="text" name="username" placeholder="Red">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Numero de equipos es requerido">
						<span class="label-input100">Numero de equipos</span>
						<input class="input100" type="text" name="pass" placeholder="Numero de equipo">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-23" data-validate="Numero de bits es requerido">
						<span class="label-input100">Numero de bits</span>
						<input class="input100" type="text" name="pass" placeholder="Numero de bits">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Direccion de red es requerido">
						<span class="label-input100">Direccion de red</span>
						<input class="input100" type="text" name="pass" placeholder="Direccion de red">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate="Numero de equipos es requerido">
						<span class="label-input100">Numero de equipos</span>
						<input class="input100" type="text" name="pass" placeholder="Numero de equipos">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate="Numero de bits es requerido">
						<span class="label-input100">Numero de bits</span>
						<input class="input100" type="text" name="pass" placeholder="Numero de bits">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate="Direccion de red es requerido">
						<span class="label-input100">Direccion de red</span>
						<input class="input100" type="text" name="pass" placeholder="Direccion de red">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate="Direccion de broadcast es requerido">
						<span class="label-input100">Direccion de broadcast</span>
						<input class="input100" type="text" name="pass" placeholder="Direccion de broadcast">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-23" data-validate="Primer equipo es requerido">
						<span class="label-input100">Primer equipo</span>
						<input class="input100" type="text" name="pass" placeholder="Primer equipo">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate="Ultimo equipo es requerido">
						<span class="label-input100">Ultimo equipo</span>
						<input class="input100" type="text" name="pass" placeholder="Ultimo equipo">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate="Puerta de enlace es requerido">
						<span class="label-input100">Puerta de enlace</span>
						<input class="input100" type="text" name="pass" placeholder="Puerta de enlace">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate="Prefijo es requerido">
						<span class="label-input100">Prefijo</span>
						<input class="input100" type="text" name="pass" placeholder="Prefijo">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="wrap-input100 validate-input m-b-23" data-validate="Mascara es requerido">
						<span class="label-input100">Mascara</span>
						<input class="input100" type="text" name="pass" placeholder="Mascara">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					<div class="text-right p-t-8 p-b-31">
						<a href="logout.php">
							Salir
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Crear
							</button>
						</div>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Ver
							</button>
						</div>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Actualizar
							</button>
						</div>
					</div>
					<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Eliminar
							</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main1.js"></script>

</body>
</html>