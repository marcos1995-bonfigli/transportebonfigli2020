<?php session_start();

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/choferes.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<title>Gestor de Choferes | Transporte Bonfigli SRL</title>

<?php require 'header.php'; ?>

<?php require 'menu.php'; ?>

    <div class="contenedorTitulo">
        <h6>Gestor de Choferes</h6>
        <div class="dropdown">
            <li><a href="#">Staff</a></li>
            <li><a href="#">Vencimientos</a></li>
            <li><a href="#">Vtos. Agrupados Pendientes</a></li>
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Configuraciones</button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#"></a>
                <a class="dropdown-item" href="#"></a>
                <a class="dropdown-item" href="#"></a>
            </div>
        </div>
    </div>

    <div class="abm">   
        <?php 
            $barrabotones = "";

            $barrabotones = $barrabotones."<a href='#' class='alta' data-toggle='modal' data-target='#modalAltaChofer' data-link='chofer_edit.php?tipo=A'><i class='fa fa-user'></i> ".gettext("Alta Chofer")."</a>";
            
            $barrabotones = $barrabotones."<a href='#' class='eliminar' data-toggle='modal' data-target='#modalEliminarChofer' data-link='delete_chofer.php'><i class='fa fa-ban'></i> ".gettext("Eliminar")."</a>";

            echo $barrabotones;
        ?>

        <div id="filtros">
            <label><input type="text" id="filtros_nombres" name="filtros_nombres" placeholder="Nombres" /></label>  
            <label><input type="text" id="filtros_apellido" name="filtros_apellidos" placeholder="Apellido" /></label>   
            <button type="button" style="font-size: 11px;" class="btn btn-dark" id="filtros_buscar" value="Buscar"><i class="flaticon-search"></i><?php echo gettext("BUSCAR");?></button>
            <button type="button" style="font-size: 11px;" class="btn btn-dark" id="filtros_limpiar" value="Limpiar"><i class="flaticon-circle"></i><?php echo gettext("LIMPIAR");?></button>
        </div>

    </div>

    <div class="modal fade" id="modalAltaChofer" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Alta Chofer |</h5>
                    <i class="fas fa-times-circle" data-dismiss="modal"></i>
                </div>
                
                <div class="modal-body" style="height: 400px;">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                        </div>
                        <input type="text" class="textos" name="dni" id="#dni" placeholder="DNI">
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                        </div>
                        <input type="text" class="textos" name="nombres" id="#nombres" placeholder="Nombres">
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-user"></i></span>
                        </div>
                        <input type="text" class="textos" name="apellidos" id="#apellidos" placeholder="Apellidos">
                    </div>

                   <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                        </div>
                        <input type="text" class="textos" name="fechaNacimiento" id="#fechaNacimiento" readonly placeholder="Fecha de Nacimiento">
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-at"></i></span>
                        </div>
                        <input type="email" class="textos" name="email" id="#email" placeholder="Email">
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                        </div>
                        <input type="tel" class="textos" name="telefono" id="#telefono" placeholder="Teléfono">
                    </div>
                </div>

                <div class="modal-footer">
                    <a href='#' class="guardar"><i class='fa fa-check'></i> <?php echo gettext("Guardar");?> </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEliminarChofer" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar |</h5>
                    <i class="fas fa-times-circle" data-dismiss="modal"></i>
                </div>
                
                <div class="modal-body" style="height: 300px;">      
                    <div class="alert alert-custom alert-warning" role="alert" style="color: #B8711B;">
                        <div class="alert-text"><i class="fas fa-exclamation-triangle"></i> CUIDADO: Con este cambio se eliminarán los choferes seleccionados.</div>
                    </div>

                    <div>
                        <p style="text-align: center;">¿Realmente desea eliminar los datos?</p>
                    </div>
                </div>

                <div class="modal-footer">
                    <a href='#' class="guardar"><i class="fas fa-trash-alt"></i> <?php echo gettext("Eliminar");?> </a>
                </div>
            </div>
        </div>
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
                    <a href="#" data-toggle="modal" data-target="#modalAltaChofer" data-link="chofer_edit.php?tipo=E">
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
                    <a href="#" data-toggle="modal" data-target="#modalAltaChofer" data-link="chofer_edit.php?tipo=E">
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
                    <a href="#" data-toggle="modal" data-target="#modalAltaChofer" data-link="chofer_edit.php?tipo=E">
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
                    <a href="#" data-toggle="modal" data-target="#modalAltaChofer" data-link="chofer_edit.php?tipo=E">
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
