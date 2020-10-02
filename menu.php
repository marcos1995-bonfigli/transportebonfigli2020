<?php session_start();

if (isset($_SESSION['usuario'])) {
	'menu.php';
}else{
	header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/d73086788b.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="assets/css/menu.css">
	<title>Principal | Transporte Bonfigli SRL</title>
</head>
<body>
	<header>
		<div class="contenedor">
			<div class="left">
				<a href="http://www.transportebonfigli.com.ar/index.html" target="_blank"><img src="assets/images/logo.png" id="logo" title="Transporte Bonfigili SRL"></a>
			</div>

			<div class="medium">
				<h3>Panel Principal</h3>
			</div>

			<div class="right">
				<ul>
					<li><i class="far fa-bell" style="font-size:20px; color:#B8711B"></i></li>
					<li><i class="far fa-question-circle" style="font-size:20px; color:#B8711B"></i></li>
					<li><?php echo $_SESSION['usuario']; ?> <i class="far fa-user" style="font-size:20px; color:#B8711B"></i></li>
					<li><a href="logout.php">Cerrar Sesion</a></li>
				</ul>
			</div>
		</div>
	</header>

	<nav class ="contenedorMenu">
	    <ul>
	        <a href="#"><li><i class="fas fa-home"></i><br>Menú Principal</li></a>
	        <a href="#"><li><i class="fas fa-truck"></i><br>Gestor de Choferes</li></a>
	        <a href="#"><li><i class="fas fa-paper-plane"></i><br>Registro de Actividades</li></a>
	        <a href="#"><li><i class="fas fa-cog"></i><br>Configuración</li></a>
	    </ul>
	</nav>
</body>
</html>
