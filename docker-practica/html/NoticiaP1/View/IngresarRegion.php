<?php session_start();?>
<?php
if(isset($_SESSION["usuario"]["nombreUsuario"])){?>


  <?php include('Default/head.php'); ?>

    <?php include('Default/menu.php') ?>

<?php include '../Controller/RegionController.php' ?>

<div class="starter-template">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <!--Form de Region,Ciudad, Calle-->
            <form class="" action="AutentificarRegion.php" method="POST">
              <!--Titulos tabla-->
              <table class="table">
              <thead>
                <tr>
                  <th scope="col">Region</th>
                  <th scope="col">Nº</th>
                  <th scope="col">Comuna</th>
                </tr>
              </thead>
              <tr>

                <?php $matrizRegion = RegionController::leerRegion();  ?>

                <?php
                foreach ($matrizRegion as $region):
                ?>
                <td><?php echo $region["nombreRegion"] ?></td>
                <td><?php echo $region["numeroRegion"] ?></td>
                <td><?php echo $region["comunaRegion"] ?></td>
                <td class="bot"><a href="borrar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?>"> <input type="button" name="del"id="del" class="btn btn-success" size="2" value="Eliminar"></a></td>
                <td class="bot"><a href="editar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?> & nom=<?php echo $usuario["nombreUsuario"]?>& ape= <?php echo $usuario["apellidoPaternoUsuario"]?> & dir=<?php $usuario["apellidoMaternoUsuario"]?>"> <input type="button" name="up" class="btn btn-success" id="up" size="2" value="actualizar"></a></td>
              </tr>
              <?php endforeach ?>

              <!--Input enviaran por submit-->
              <tr>
                <!--input Region-->
                <td><input type="text" name="txtnombreRegion" size="7" class="centrado"></td>
                <td><input type="text" name="txtnumeroRegion" size="7" class="centrado"></td>
                <td><input type="text" name="txtcomunaRegion" size="7" class="centrado"></td>
                <td class="bot"><button type="submit" class="btn btn-success" name="button">Insertar</button> </td>
              </tr>
              <!--<!-----------------><!--inico de paginacion-------->
              </table>
              <tr>
                <td>
              <?php require('../Helper/Paginacion.php'); ?>
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
<?php
}else{
  echo "no se puede ver";
 }
?>
