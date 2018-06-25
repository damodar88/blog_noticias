<?php
session_start();
if(isset($_SESSION["usuario"]["nombreUsuario"])){?>

<?php include('Default/head.php'); ?>

<?php include('Default/menu.php') ?>

<?php include('../Controller/CiudadController.php') ?>

<div class="starter-template">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <!--Form de Region,Ciudad, Calle-->
            <form class="" action="AutentificarCiudad.php" method="POST">
              <!--Titulos tabla-->
              <table class="table">
              <thead>
                <tr>
                  <th scope="col">Ciudad</th>
                  <th scope="col">Localidad</th>
                </tr>
              </thead>
              <tr>

                  <?php  $ciudad = new CiudadController(); ?>

                  <?php $matrizCiudad = CiudadController::leerCiudad();  ?>

                  <?php
                  foreach ($matrizCiudad as $ciudad):
                  ?>
                  <td><?php echo $ciudad["nombreCiudad"] ?></td>
                  <td><?php echo $ciudad["localidadCiudad"] ?></td>
                  <td class="bot"><a href="borrar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?>"> <input type="button" name="del"id="del" class="btn btn-success" size="2" value="Eliminar"></a></td>
                  <td class="bot"><a href="editar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?> & nom=<?php echo $usuario["nombreUsuario"]?>& ape= <?php echo $usuario["apellidoPaternoUsuario"]?> & dir=<?php $usuario["apellidoMaternoUsuario"]?>"> <input type="button" name="up" class="btn btn-success" id="up" size="2" value="actualizar"></a></td>
                </tr>
                <?php endforeach ?>
                <!--Input enviaran por submit-->
                <tr>
                <!--input Region-->
                <!--Input ciudad-->
                  <td><input type="text" name="txtnombreCiudad" size="7" class="centrado"></td>
                  <td><input type="text" name="txtlocalidadCiudad" size="7" class="centrado"></td>
                <td class="bot"><button type="submit" class="btn btn-success" name="button">Insertar</button> </td>
              </tr>
              <td class="bot"><button type="submit" class="btn btn-success" name="button">Siuguiente</button> </td>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('Default/footer.php') ?>
<?php
}else{
	echo "no se puede ver";
 }
?>
