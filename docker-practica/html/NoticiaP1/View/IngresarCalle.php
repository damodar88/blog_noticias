
<?php session_start(); ?>
  <?php include('Default/head.php'); ?>

    <?php include('Default/menu.php') ?>



<div class="starter-template">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <!--Form de Region,Ciudad, Calle-->
            <form class="" action="AutentificarCalle.php" method="POST">
              <!--Titulos tabla-->
              <table class="table">
              <thead>
                <tr>
                  <th scope="col">Calle</th>
                  <th scope="col">Nº</th>
                </tr>
              </thead>
              <tbody>
                <tr>

                  <?php include '../Controller/CalleController.php' ?>

                  <?php $matrizCalle = CalleController::leerCalle();  ?>

                  <?php
                  echo var_dump($matrizCalle);
                  foreach ($matrizCalle as $calle):
                  ?>
                  <td><?php echo $calle["nombreCalle"] ?></td>
                  <td><?php echo $calle["numeroCalle"] ?></td>
                  <td class="bot"><a href="borrar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?>"> <input type="button" name="del"id="del" class="btn btn-success" size="2" value="Eliminar"></a></td>
                  <td class="bot"><a href="editar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?> & nom=<?php echo $usuario["nombreUsuario"]?>& ape= <?php echo $usuario["apellidoPaternoUsuario"]?> & dir=<?php $usuario["apellidoMaternoUsuario"]?>"> <input type="button" name="up" class="btn btn-success" id="up" size="2" value="actualizar"></a></td>
                </tr>
              <?php endforeach ?>

              </tbody>
              <!--Input enviaran por submit-->
              <tr>
                <!--Input ciudad-->
                <td><input type="text" name="txtnombreCalle" size="7" class="centrado"></td>
                <td><input type="text" name="txtnumeroCalle" size="7" class="centrado"></td>
                <td class="bot"><button type="submit" class="btn btn-success" name="button">Insertar</button> </td>
              </tr>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('Default/footer.php') ?>
