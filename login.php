<?php session_start();

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password);

	try{
		$conexion = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
	}catch (PDOException $e){
		echo "Error:" . $e->getMessage();
	}

	$statement = $conexion->prepare('
		SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password'
	);
	$statement->execute(array(
		':usuario' => $usuario,
		':password' => $password
	));

	$resultado = $statement->fetch();
	if ($resultado !== false) {
		$_SESSION['usuario'] = $usuario;
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
						<i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
					</div>

					<div class="form-group">
						<i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Contraseña">
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
</body>
</html>