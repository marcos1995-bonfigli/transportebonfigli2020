<?php session_start();

if (isset($_SESSION['usuario'])) {
	'menu.php';
}else{
	header('Location: login.php');
}

?>

<!DOCTYPE html5!>

<html lang="en">
<head>

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Conexion CSS -->
      <link rel="stylesheet" href="assets/css/menu.css">

    <!-- Iconos   -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

      <title>Administrador - Transporte Bonfigli</title>

</head>

 <body>

    <header>

      <nav class="infoUsuario">

        <ul>

          <li><a href="#"><i class="far fa-user"></i> <?php echo $_SESSION['usuario']; ?></a>
        <ul>
          <li><a href="#"><i class="far fa-question-circle"></i> Ayuda</a></li>
         <li><a href="logout.php"><i class="far fa-times-circle"></i> Cerrar Sesión</a></li>
         </ul>
  
        </ul>
        
    </nav>

    

  
      <img src="assets/images/logo.png" alt="">

     
      


    </header>

   

 <nav class ="contenedorMenu">


     <ul>
       

        <a href="#"><li><i class="fas fa-home"></i><br>Menú Principal</li></a>

        <a href="#"><li><i class="fas fa-truck"></i><br>Gestor de Choferes</li></a>

        <a href="#"><li><i class="fas fa-paper-plane"></i><br>Registro de Actividades</li></a>

        <a href="#"><li><i class="fas fa-tools"></i><br>Configuración</li></a>
    </ul>

</nav>









     
 </body>

</html>