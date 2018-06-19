<?php  session_start(); ?>
<?php include('Default/head.php'); ?>

<?php include('Default/menu.php') ?>

<?php include('../Controller/EscuelaController.php') ?>

<div class="starter-template">
  <br></br>
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <!--Form de Region,Ciudad, Calle-->
            <form class="" action="AutentificarEscuela.php" method="POST">
              <!--Titulos tabla-->
              <table class="table">
              <thead>
                <tr>
                  <th scope="col">Nombre Escuela</th>
                  <th scope="col">Codigo Escuela</th>
                  <th scope="col">Region</th>
                  <th scope="col">RegionNª</th>
                  <th scope="col">Comuna</th>
                  <th scope="col">Ciudad</th>
                  <th scope="col">Localidad</th>
                  <th scope="col">Calle</th>
                  <th scope="col">Nªcalle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php  $escuela = new EscuelaController(); ?>

                  <?php $matrizEscuela = EscuelaController::leerEscuela();  ?>

                  <?php
                  foreach ($matrizEscuela as $escuela):
                    ?>
                  <td><?php echo $escuela["nombreEscuela"] ?></td>
                  <td><?php echo $escuela["codigoEscuela"] ?></td>
                  <td><?php echo $escuela["nombreRegion"] ?></td>
                  <td><?php echo $escuela["numeroRegion"] ?></td>
                  <td><?php echo $escuela["comunaRegion"] ?></td>
                  <td><?php echo $escuela["nombreCiudad"] ?></td>
                  <td><?php echo $escuela["localidadCiudad"] ?></td>
                  <td><?php echo $escuela["nombreCalle"] ?></td>
                  <td><?php echo $escuela["numeroCalle"] ?></td>

                  <td class="bot"><a href="borrar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?>"> <input type="button" name="del"id="del" class="btn btn-success" size="2" value="Eliminar"></a></td>
                  <td class="bot"><a href="editar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?> & nom=<?php echo $usuario["nombreUsuario"]?>& ape= <?php echo $usuario["apellidoPaternoUsuario"]?> & dir=<?php $usuario["apellidoMaternoUsuario"]?>"> <input type="button" name="up" class="btn btn-success" id="up" size="2" value="actualizar"></a></td>
                </tr>
                <?php endforeach ?>
              </tbody>
              <!--Input enviaran por submit-->
              <tr>
                <!--Input ciudad-->
                <td><input type="text" name="txtnombreEscuela" size="7" class="centrado"></td>
                <td><input type="text" name="txtnombrecodigoEscuela" size="7" class="centrado"></td>
                <td><input type="text" name="txtnombreRegion" size="7" class="centrado"></td>
                <td><input type="text" name="txtnumeroRegion" size="7" class="centrado"></td>
                <td><input type="text" name="txtcomunaRegion" size="7" class="centrado"></td>
                <td><input type="text" name="txtnombreCiudad" size="7" class="centrado"></td>
                <td><input type="text" name="txtlocalidadCiudad" size="7" class="centrado"></td>
                <td><input type="text" name="txtnombreCalle" size="7" class="centrado"></td>
                <td><input type="text" name="txtnumeroCalle" size="7" class="centrado"></td>
                <!--input escuela-->
                <td class="bot"><button type="submit" class="btn btn-success" name="button">Insertar</button> </td>
              </tr>
            </table>
            <tr>
              <td>
            <?php require('../Helper/PaginacionEscuela.php'); ?>
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
<?php include('Default/footer.php') ?>
