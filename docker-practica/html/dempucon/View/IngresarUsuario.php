<?php
session_start();
if(isset($_SESSION["usuario"]["nombreUsuario"])){?>



<?php include('Default/head.php'); ?>
<?php include('Default/menu.php') ?>

<?php include '../Controller/UsuarioController.php';?>

<div class="starter-template">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <!--Form de Region,Ciudad, Calle-->
            <form class="" action="AutentificarUsuario.php" method="POST">
              <!--Titulos tabla-->
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
              <tr>

                <?php $matrizUsuario = UsuarioController::leerUsuario();?>

                <?php
                 foreach ($matrizUsuario as $usuario):?>
                 <td><?php echo $usuario["ID_USUARIO"] ?></td>
                 <td>
                   <select class="" name="">

                     <option value="">
                       <?php

                       if ($usuario["administrador"] == 1) {

                           echo "Admin";
                           echo "<option value='2'>No admin  </option>";

                       }else {
                           echo "No admin";
                           echo "<option value='1'>Admin  </option>";
                       }

                       ?>

                     </option>

                   </select>


                 </td>
                 <!--td><input type="text" name=""  size="1" value="<?php //echo $usuario["administrador"] ?>" ></td-->
                 <td><input type="text" name=""  size="7" value="<?php echo $usuario["nombreUsuario"] ?>" ></td>
                 <td><input type="text" name=""  size="8" value="<?php echo $usuario["apellidoPaternoUsuario"]?>" ></td>
                 <td><input type="text" name=""  size="8" value="<?php echo $usuario["apellidoMaternoUsuario"]?>" ></td>
                 <td><input type="text" name=""  size="7" value="<?php echo $usuario["usuarioUsuario"]?>" ></td>
                 <td><input type="text" name=""  size="7" value="<?php echo $usuario["passwordUsuario"]?>" ></td>
                 <td><?php echo $usuario["fechaModificacionUsuario"]?></td>
                 <td><input type="text" name=""  size="7" value="<?php echo $usuario["ocupacionUsuario"]?>" ></td>
                <td class="bot"><a href="EliminarUsuario.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?>"> <input type="button" name="del"id="del" class="btn btn-success" size="2" value="Eliminar"></a></td>
                <td class="bot"><a href="actualizarUsuario.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?>
                  & administrador=<?php echo $usuario["administrador"] ?>
                  & nombreUsuario=<?php echo $usuario["nombreUsuario"]?>
                  & apellidoPaternoUsuario= <?php echo $usuario["apellidoPaternoUsuario"]?>
                  & apellidoMaternoUsuario=<?php $usuario["apellidoMaternoUsuario"]?>
                  & usuarioUsuario = <?php echo $usuario["usuarioUsuario"]?>
                  & passwordUsuario=<?php echo $usuario["passwordUsuario"]?>
                  & fechaModificacionUsuario=<?php echo $usuario["fechaModificacionUsuario"]?>
                  & ocupacionUsuario=<?php echo $usuario["ocupacionUsuario"]?>
                  "> <input type="button" name="up" class="btn btn-success" id="up" size="2" value="actualizar"></a></td>
              </tr>
              <?php endforeach?>

              <!--Input enviaran por submit-->
              <tr>
                <!--input Region-->
                <td></td>
                <td><select class="" name="">
                  <option value="2">No admin</option>
                  <option value="1">Admin</option>
                </select></td>
                <td><input type="text" name="txtNombre" size="7" class="centrado"></td>
                <td><input type="text" name="txtApellidoP" size="7" class="centrado"></td>
                <td><input type="text" name="txtApellidoM" size="7" class="centrado"></td>
                <td><input type="text" name="txtUsuario" size="7" class="centrado"></td>
                <td><input type="text" name="txtPassword" size="7" class="centrado"></td>
                <td></td>
                <td><input type="text" name="txtOcupacion" size="7" class="centrado"></td>
                <td class="bot"><button type="submit" class="btn btn-success" name="button">Insertar</button> </td>
              </tr>
              <!--<!-----------------><!--inico de paginacion-------->
              </table>
              <tr>
                <td>
              <?php require('../Helper/PaginacionUsuario.php');?>
                  <!------------------------------------------------------------------------------------------>
              <?php
                  echo     "<!--Paginacion-->";
                  echo "<div class='bottom'>";
                  echo "<nav aria-label='Page navigation example'>";
                  echo "<ul class='pagination justify-content-center'>";
                  echo "<li class='page-item disabled'>";
                  echo "<a class='page-link' href='#' tabindex='-1'>Previous</a>";
                  echo "</li>";?>
              <?php
                 for ($i=1; $i <= $total_pagina ; $i++) {

                  echo "<li class='page-item'><a class='page-link' href='?pagina=".$i."'>".$i."</a></li>";
                }?>

              <?php
                  echo "<li class='page-item'>";
                  echo "<a class='page-link' href='#'>Next</a>";
                  echo "</li>";
                  echo "</ul>";
                  echo "</nav>";
                  echo "</div>";?>
                </td>
              </tr>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>


<br>
<br><br><br><br>

<br>
<br><br><br><br>



<?php include 'Default/footer.php' ?>


<?php
}else{
  echo "no se puede ver";
}
?>
