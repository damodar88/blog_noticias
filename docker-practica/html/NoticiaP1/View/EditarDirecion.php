<?php include('Default/head.php'); ?>

<?php include('Default/menu.php') ?>

<div class="starter-template">
<br></br>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
        <div class="panel-body">


<form class="" action="Autentificar/AutentificarRegion.php" method="POST">

  <table class="table">
  <thead>
    <tr>
      <th scope="col">Region</th>
      <th scope="col">Nº</th>
      <th scope="col">Comuna</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td><?php echo $usuario[""] ?></td>
      <td><?php echo $usuario[""] ?></td>
      <td><?php echo $usuario[""] ?></td>
      <td class="bot"><a href="borrar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?>"> <input type="button" class="btn btn-success" name="del"id="del" size="2" value="Eliminar"></a></td>
      <td class="bot"><a href="editar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?> & nom=<?php echo $usuario["nombreUsuario"]?>
        & ape= <?php echo $usuario["apellidoPaternoUsuario"]?> & dir=<?php $usuario["apellidoMaternoUsuario"]?>"> <input type="button" class="btn btn-success" name="up" id="up" size="2" value="actualizar"></a></td>
    </tr>

  </tbody>

  <tbody>
    <tr>
      <td><?php echo $usuario[""] ?></td>
      <td><?php echo $usuario[""] ?></td>
      <td><?php echo $usuario[""] ?></td>
      <td class="bot"><a href="borrar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?>"> <input type="button" class="btn btn-success" name="del"id="del" size="2" value="Eliminar"></a></td>
      <td class="bot"><a href="editar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?> & nom=<?php echo $usuario["nombreUsuario"]?>
        & ape= <?php echo $usuario["apellidoPaternoUsuario"]?> & dir=<?php $usuario["apellidoMaternoUsuario"]?>"> <input type="button" class="btn btn-success" name="up" id="up" size="2" value="actualizar"></a></td>
    </tr>



  </tbody>
  <tr>
    <!--input Region-->
    <td><input type="text" name="txtNombreRegion" size="7" class="centrado"></td>
    <td><input type="text" name="txtNuemroRegion" size="7" class="centrado"></td>
    <td><input type="text" name="txtComunaRegion" size="7" class="centrado"></td>

    <td class="bot"><button type="submit" class="btn btn-success" name="button">Insertar</button></td>

  </tr>
  </table>

</form>


        </div>
      </div>

    </div>
  </div>

</div>



<?php include('Default/footer.php') ?>
