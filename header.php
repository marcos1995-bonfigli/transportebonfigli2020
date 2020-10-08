<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/d73086788b.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/header.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<div class="left">
				<a href="http://www.transportebonfigli.com.ar/index.html" target="_blank"><img src="assets/images/logo.png" id="logo" title="Transporte Bonfigili SRL"></a>
			</div>

			<div class="medium">
				
			</div>

			<div class="right">
				<div class="dropdown">
					<i class="far fa-bell" style="font-size:20px; color:#B8711B"></i>
					<i class="far fa-question-circle" style="font-size:20px; color:#B8711B"></i>
					<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['usuario']; ?> <i class="far fa-user" style="font-size:20px; color:#B8711B"></i></button>
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<a class="dropdown-item" href="#"><i class="fas fa-user-cog"></i> Mis Datos</a>
						<a class="dropdown-item" href="#"><i class="fas fa-lock"></i> Contraseña</a>
						<a class="dropdown-item" href="logout.php"><i class="fas fa-window-close"></i> Cerrar Sesion</a>
					</div>
				</div>
			</div>
		</div>
	</header>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>