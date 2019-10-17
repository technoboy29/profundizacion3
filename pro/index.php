<?php 
    session_start();

    require 'conexion.php';

    if(isset($_SESSION['user_id'])){
        $consultar = $conn->prepare('SELECT id, nombre, contra, FROM usuario WHERE id = :id');
        $consultar->bindParam(':id', $_SESSION['user_id']);
        $consultar->execute();
        $resultados = $consultar->fetch(PD0::FETCH_ASSOC);

        $user = null;

        if(count($resultados) > 0){
            $user = $resultados;
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Form</title>
	<link rel="stylesheet" type="text/css" href="css/styleo.css">
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
                
                <?php if(!empty($user)): ?>
                <br> Bienvenido. <?= $user['nombre'] ?>
                <br> Tu estás satisfactoriamente logueado
                <a href="logout.php">Salir</a>
                <?php else: ?>

				<h2 class="title">Por favor </h2>
           		
            	<a>Elige una de estas opciones</a>
				<a class="btn" href="signin.php"> Iniciar Sesion </a>
                <a class="btn" href="signup.php"> Registrarse </a>
                <a href="logout.php">Salir</a>
                <?php endif; ?>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>