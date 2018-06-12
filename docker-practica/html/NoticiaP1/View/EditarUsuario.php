<?php include('Default/head.php'); ?>

<?php include('Default/menu.php') ?>

<form class="" action="index.html" method="POST">

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

  <tbody>

    <tr>
      <td><?php echo $usuario["ID_USUARIO"] ?></td>
      <td><?php echo $usuario["administrador"] ?></td>
      <td><?php echo $usuario["nombreUsuario"] ?></td>
      <td><?php echo $usuario["apellidoPaternoUsuario"]?></td>
      <td><?php echo $usuario["apellidoMaternoUsuario"]?></td>
      <td><?php echo $usuario["usuarioUsuario"]?></td>
      <td><?php echo $usuario["passwordUsuario"]?></td>
      <td><?php echo $usuario["fechaModificacionUsuario"]?></td>
      <td><?php echo $usuario["ocupacionUsuario"]?></td>
      <td class="bot"><a href="borrar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?>"> <input type="button" name="del"id="del" size="2" value="Eliminar"></a></td>

      <td class="bot"><a href="editar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?> & nom=<?php echo $usuario["nombreUsuario"]?>
        & ape= <?php echo $usuario["apellidoPaternoUsuario"]?> & dir=<?php $usuario["apellidoMaternoUsuario"]?>"> <input type="button" name="up" id="up" size="2" value="actualizar"></a></td>
    </tr>

  </tbody>




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

    <td class="bot"><input type="submit" name="cr" id="cr" value="Insertar"> </td>
  </tr>

  </table>
</form>



<?php include('Default/footer.php') ?>
