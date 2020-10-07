<?php session_start();

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/choferes.css">
<script type="text/javascript" src="assets/js/menu.js"></script>
<title>Gestor de Choferes | Transporte Bonfigli SRL</title>

<?php require 'header.php'; ?>

<?php require 'menu.php'; ?>

    <div class="contenedorTitulo">
        <h6>Gestor de Choferes</h6>
	</div>

    <div class="abm">     
        <a href='chofer_edit.php?tipo=A' class='alta'><i class='fa fa-user'></i> Alta Chofer</a>
        <a href='delete_chofer.php' class='eliminar'><i class='fa fa-ban'></i> Eliminar</a>
    </div>
<div class="contenedorTabla">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Tipo de Documento</th>
                <th scope="col">Nro de Documento</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Email</th>
                <th scope="col">Telefono</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tomas</td>
                <td>Gonzalez</td>
                <td>DNI</td>
                <td>42567845</td>
                <td>20/04/1990</td>
                <td>tomigcorpo@gmail.com</td>
                <td>3512375890</td>
                <td>
                    <a href="chofer_edit.php?tipo=E">
                        <button type="button" class="btn btn-dark"><i class="fas fa-user-edit"></i></button>
                    </a>
                </td>
            </tr>
            <tr>
                <td>Marcos</td>
                <td>Bonfigli</td>
                <td>DNI</td>
                <td>42521643</td>
                <td>16/05/1998</td>
                <td>marcosbonfigli95@gmail.com</td>
                <td>3514563782</td>
                <td>
                    <a href="chofer_edit.php?tipo=E">
                        <button type="button" class="btn btn-dark"><i class="fas fa-user-edit"></i></button>
                    </a>
                </td>
            </tr>
            <tr>
                <td>Lucas</td>
                <td>Fara</td>
                <td>DNI</td>
                <td>38456732</td>
                <td>12/08/1996</td>
                <td>lucasgfara@gmail.com</td>
                <td>3514821432</td>
                <td>
                    <a href="chofer_edit.php?tipo=E">
                        <button type="button" class="btn btn-dark"><i class="fas fa-user-edit"></i></button>
                    </a>
                </td>
            </tr>
            <tr>
                <td>Nicolas</td>
                <td>Coronel</td>
                <td>DNI</td>
                <td>42474174</td>
                <td>07/04/2000</td>
                <td>nicocoro15@gmail.com</td>
                <td>3512543569</td>
                <td>
                    <a href="chofer_edit.php?tipo=E">
                        <button type="button" class="btn btn-dark"><i class="fas fa-user-edit"></i></button>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
