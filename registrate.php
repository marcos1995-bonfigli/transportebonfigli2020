<?php session_start();

if (isset($_SESSION['Usuario'])) {
	header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$Apellido = $_POST['Apellido'];
	$Nombres = $_POST['Nombres'];
	$TipoDocumento = $_POST['TipoDocumento'];
	$NroDocumento = $_POST['NroDocumento'];
	$Id_rol = $_POST['Id_rol'];
	$Eliminado = $_POST['Eliminado'];
	$Usuario = filter_var($_POST['Usuario'], FILTER_SANITIZE_STRING);
	$Clave = $_POST['Clave'];
	$Clave2 = $_POST['Clave2'];

	$errores = '';

	if (empty($Usuario) or empty($Clave) or empty($Clave2)) {
		$errores .= '<li>Por favor rellena todos los datos correctamente</li>';
	} else {
		try{
			$conexion = new PDO('mysql:host=sql395.main-hosting.eu;dbname=u601553382_Transporte2020', 'u601553382_bonfigli', 'Transporte2020');
		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
		
		$statement = $conexion->prepare('SELECT * FROM personas WHERE Usuario = :Usuario LIMIT 1');
		$statement->execute(array(':Usuario' => $Usuario));
		$resultado = $statement->fetch();

		if ($resultado != false) {
			$errores .= '<li>El nombre de usuario ya existe</li>';
		}

		$Clave = hash('sha512', $Clave);
		$Clave2 = hash('sha512', $Clave2);

		if ($Clave != $Clave2) {
			$errores .= '<li>Las contraseñas no son iguales</li>';
		}	
	}

	if ($errores == '') {
		$statement = $conexion->prepare('INSERT INTO personas (Id, Usuario, Clave, Apellido, Nombres, TipoDocumento, NroDocumento, Id_rol, Eliminado) VALUES (null, :Usuario, :Clave, :Apellido, :Nombres, :TipoDocumento, :NroDocumento, :Id_rol, :Eliminado)');
		$statement->execute(array(
			':Usuario' => $Usuario, 
			':Clave' => $Clave,
			':Apellido' => $Apellido, 
			':Nombres' => $Nombres, 
			':TipoDocumento' => $TipoDocumento, 
			':NroDocumento' => $NroDocumento, 
			':Id_rol' => $Id_rol,
			':Eliminado' => $Eliminado
		));

		header('Location: login.php');
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
	<link rel="stylesheet" href="assets/css/registrate.css">
	<title>Registrate | Transporte Bonfigli SRL</title>
</head>
<body>
	<div class="contenedor">
		<h1 class="titulo">Registrate</h1>
		<hr class="border">

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input type="text" name="Apellido" class="usuario" placeholder="Apellido">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input type="text" name="Nombres" class="usuario" placeholder="Nombres">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input type="text" name="TipoDocumento" class="usuario" placeholder="Tipo de Documento">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input type="text" name="NroDocumento" class="usuario" placeholder="N° Documento">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input type="text" name="Id_rol" class="usuario" placeholder="Rol">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input type="text" name="Eliminado" class="usuario" placeholder="Eliminado">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input type="text" name="Usuario" class="usuario" placeholder="Usuario">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" name="Clave" class="password" placeholder="Contraseña">
			</div>

			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" name="Clave2" class="password_btn" placeholder="Repetir Contraseña">
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

		<p class="texto-registrate">
			¿ Ya tienes cuenta ?
			<a href="login.php">Iniciar Sesión</a>
		</p>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>