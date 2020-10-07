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
      <link rel="stylesheet" href="menu.css">
      

    <!-- Iconos   -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


       <!-- jQuery y JS   -->

       <script src=".vscode/jquery-3.5.1.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script type="text/javascript" src="js.js"></script>




     

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


      <img src="images/logo.png" alt="">


    </header>

   

 <nav class ="contenedorMenu">


     <ul>
       

      <li><a  href="#"><i class="fas fa-home"></i><br>Menú Principal</li></a>

      <li><a href="#"><i class="fas fa-users"></i><br>Gestor de Choferes</li></a>

      <li><a href="#"><i class="fas fa-truck"></i><br>Gestor de Camiones</li></a>

      <li><a href="#"><i class="far fa-clipboard"></i><br>Hojas de ruta</li></a>

      <li><a href="#"><i class="fas fa-envelope-open-text"></i></i><br>Enviar E-Mail</li></a>

      <li> <a href="#"><i class="fas fa-tools"></i><br>Configuración</li></a>
    </ul>

</nav>

     
 </body>

</html>