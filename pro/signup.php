<?php
 require 'conexion.php';

 $message= '';

 if(!empty($_POST['nombre']) && !empty ($_POST['contra'])){
    $sql = "INSERT INTO usuario (nombre,contra) VALUES (:nombre, :contra)";
    $stm = $conn->prepare($sql);
	$stm -> bindParam(':nombre',$_POST['nombre']);
	$password = password_hash($_POST['contra'], PASSWORD_BCRYPT);
    $stm -> bindParam(':contra',$password);

    if($stm->execute()){
        $message = 'Creación de usuario satisfactoria';
    }else{
        $message = 'Error en la creación de usuario';
    }
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Form</title>
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
		
			<form action="signup.php" method="POST">
				<img src="img/avatar.svg">
				<h2 class="title">Registrarse</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nombre de usuario</h5>
           		   		<input type="text" class="input" name="nombre">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" class="input" name="contra">
            	   </div>
            	</div>
            	<a href="signin.php">¿Ya tienes una cuenta?</a>
				<input type="submit" class="btn" value="Registrarse">
				<?php if(!empty($message)): ?>
				<p><?= $message ?></p>
				<?php endif; ?>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>