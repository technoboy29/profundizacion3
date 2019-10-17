<?php

session_start();
 require 'conexion.php';

 if (isset($_SESSION['user_id'])) {
    header('location:menu.php');
  }

 if(!empty($_POST['nombre']) && !empty($_POST['contra'])){
	 $consulta= $conn->prepare('SELECT id, nombre, contra FROM usuario WHERE nombre=:nombre');
	 $consulta->bindParam(':nombre', $_POST['nombre']);
	 $consulta->execute();
	 $resultados = $consulta->fetch(PDO::FETCH_ASSOC);
	 $message = '';

	 if(count($resultados) > 0 && password_verify($_POST['contra'], $resultados['contra'])){
		 $_SESSION['user_id'] = $resultados['id'];
		 header("location: menu.php");
	 }else{
		 $message = "Lo siento, no coinciden los datos";
	 }
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign In Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
	<img class="wave" src="img/w.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="signin.php" method="POST">
				<img src="img/avatar.svg">
				<h2 class="title">Iniciar sesión</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nombre de usuario</h5>
           		   		<input type="text" class="input" name="usuario">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" class="input" name="contrasena">
            	   </div>
            	</div>
            	<a href="signup.php">¿No tienes una cuenta?</a>
				<input type="submit" class="btn" value="Iniciar">
				<?php if(!empty($message)) : ?>
				<p><? = $message ?></p>
				<?php endif; ?>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>