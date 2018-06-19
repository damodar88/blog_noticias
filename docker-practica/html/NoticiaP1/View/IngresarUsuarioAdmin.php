<?php include 'Default/head.php' ?>

<?php include 'Default/menu.php' ?>


<div class="starter-template">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-body">
          <!--Form envio de datos del usuario-->
          <form class="" action="index.html" method="POST">
            <!--Titulo tabla usuario-->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Administrador</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">ApellidoP.</th>
                  <th scope="col">ApellidoM.</th>
                  <th scope="col">Usuario</th>
                  <th scope="col">Password</th>
                  <th scope="col">fechaModif</th>
                  <th scope="col">Ocupacion</th>
                </tr>
              </thead>
              <!--Datos de lectura de la base datos-->
              <tbody>
                <tr>

                  <?php include '../Controller/UsuarioController.php';?>

                  <?php $matrizUsuario = UsuarioController::leerUsuario(); ?>

                  <?php
                  echo var_dump($matrizUsuario);
                  foreach ($matrizUsuario as $usuario):
                  ?>
                  <!--<td><//?php echo $usuario["ID_USUARIO"] ?></td>-->
                  <td><?php echo $usuario["administrador"] ?></td>
                  <td><?php echo $usuario["nombreUsuario"] ?></td>
                  <td><?php echo $usuario["apellidoPaternoUsuario"]?></td>
                  <td><?php echo $usuario["apellidoMaternoUsuario"]?></td>
                  <td><?php echo $usuario["usuarioUsuario"]?></td>
                  <td><?php echo $usuario["passwordUsuario"]?></td>
                  <td><?php echo $usuario["fechaModificacionUsuario"]?></td>
                  <td><?php echo $usuario["ocupacionUsuario"]?></td>
                  <td></td>
                  <td class="bot"><a href="borrar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?>"> <input type="button" name="del"id="del" class="btn btn-success" size="2" value="Eliminar"></a></td>
                  <td class="bot"><a href="editar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?> & nom=<?php echo $usuario["nombreUsuario"]?>& ape= <?php echo $usuario["apellidoPaternoUsuario"]?> & dir=<?php $usuario["apellidoMaternoUsuario"]?>"> <input type="button" name="up" class="btn btn-success" id="up" size="2" value="actualizar"></a></td>
                </tr>
              <?php endforeach ?>
              </tbody>
              <!--input envio de datos por submit-->
              <tr>
                <td></td>
                <td><input type="text" name="txtAdministrador" size="7" class="centrado"></td>
                <td><input type="text" name="txtNombre" size="7" class="centrado"></td>
                <td><input type="text" name="txtApellidoP" size="7" class="centrado"></td>
                <td><input type="text" name="txtApellidoM" size="7" class="centrado"></td>
                <td><input type="text" name="txtUsuario" size="7" class="centrado"></td>
                <td><input type="text" name="txtPassword" size="7" class="centrado"></td>
                <td><input type="text" name="txtFechaMod" size="7" class="centrado"></td>
                <td><input type="text" name="txtOcupacion" size="7" class="centrado"></td>
                <td class="bot"><button type="submit" class="btn btn-success" name="button">Insertar</button></td>
            </table>
                <tr>
                  <td>
                <?php //require('../Helper/Paginacion.php'); ?>
                    <!------------------------------------------------------------------------------------------>
                <?php
                    echo     "<!--Paginacion-->";
                    echo "<div class='bottom'>";
                    echo "<nav aria-label='Page navigation example'>";
                    echo "<ul class='pagination justify-content-center'>";
                    echo "<li class='page-item disabled'>";
                    echo "<a class='page-link' href='#' tabindex='-1'>Previous</a>";
                    echo "</li>";
                ?>
                <?php
                   for ($i=1; $i <= $total_pagina ; $i++) {

                    echo "<li class='page-item'><a class='page-link' href='?pagina=".$i."'>".$i."</a></li>";
                  }
                ?>
                <?php
                    echo "<li class='page-item'>";
                    echo "<a class='page-link' href='#'>Next</a>";
                    echo "</li>";
                    echo "</ul>";
                    echo "</nav>";
                    echo "</div>";
                  ?>
                  </td>
                </tr>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'Default/footer.php' ?>
