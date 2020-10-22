<?php session_start();

if (isset($_SESSION['Usuario'])) {
	header('Location: index.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$Usuario = filter_var(strtolower($_POST['Usuario']), FILTER_SANITIZE_STRING);
	$Clave = $_POST['Clave'];
	$Clave = hash('sha512', $Clave);

	try{
		$conexion = new PDO('mysql:host=sql395.main-hosting.eu;dbname=u601553382_Transporte2020', 'u601553382_bonfigli', 'Transporte2020');
	}catch (PDOException $e){
		echo "Error:" . $e->getMessage();
	}

	$statement = $conexion->prepare('
		SELECT * FROM personas WHERE Usuario = :Usuario AND Clave = :Clave'
	);
	$statement->execute(array(
		':Usuario' => $Usuario,
		':Clave' => $Clave
	));

	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['Usuario'] = $Usuario;
		header('Location: index.php');
	}else{
		$errores .= '<li>Datos Incorrectos</li>';
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/login.css">
	<title>Login | Transporte Bonfigli SRL</title>
</head>
<body>
	<section id="pantalla-dividida">
		<div class="izquierda">
			<a href="http://www.transportebonfigli.com.ar/index.html" target="_blank"><img src="assets/images/logo.png" id="logo" title="Transporte Bonfigili SRL"></a>
			<p class="texto-registrate">
				¿Aún no tienes cuenta? <a href="registrate.php">Registrate</a>
			</p>
		</div>

		<div class="derecha">
			<div class="contenedor">
				<h1 class="titulo">Iniciar Sesión</h1>
				<hr class="border">

				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
					<div class="form-group">
						<i class="icono izquierda fa fa-user"></i><input type="text" name="Usuario" class="usuario" placeholder="Usuario">
					</div>

					<div class="form-group">
						<i class="icono izquierda fa fa-lock"></i><input type="password" name="Clave" class="password_btn" placeholder="Contraseña">
						<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
					</div>

					<?php if(!empty($errores)): ?>
						<div class="error">
							<ul>
								<?php echo $errores;?>
							</ul>
						</div>
					<?php endif; ?>
				</form>

				<p class="recupero">
					<a href="#">¿Has olvidado tu contraseña?</a>
				</p>
			</div>

			<p class="texto-contacto">
				2020 &copy;<a href="http://www.transportebonfigli.com.ar/index.html" target="_blank">Transporte Bonfigli SRL</a>								
				<a href="http://www.transportebonfigli.com.ar/servicios.html" target="_blank">| Servicios</a>
				<a href="http://www.transportebonfigli.com.ar/contacto.html" target="_blank">| Contacto</a>	
			</p>
		</div>
	</section>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>