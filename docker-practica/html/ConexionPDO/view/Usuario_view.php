  <?php
    require('model/Paginacion.php');
  ?>

    <form action="<?php echo "".$SERVER['PHP_SELF'] ;?>" method="post">
      <table width="50%" border="0" align="center">
      <tr>
        <td class="primera fila">ID</td>
        <td class="primera fila">Nombre</td>
        <td class="primera fila">Apellido P</td>
        <td class="primera fila">Apellido M</td>
        <td class="primera fila">usuario</td>
        <td class="primera fila">Ocupacion</td>

      </tr>
        <?php
        foreach ($matrizUsuario as $usuario):
        ?>

        <tr>
          <td><?php echo $usuario["ID_USUARIO"] ?></td>
          <td><?php echo $usuario["nombreUsuario"] ?></td>
          <td><?php echo $usuario["apellidoPaternoUsuario"]?></td>
          <td><?php echo $usuario["apellidoMaternoUsuario"]?></td>
          <td><?php echo $usuario["usuarioUsuario"]?></td>
          <td><?php echo $usuario["ocupacionUsuario"]?></td>
          <td class="bot"><a href="borrar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?>"> <input type="button" name="del"id="del" value="Eliminar"></a></td>
          <td class="bot"><a href="editar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?> & nom=<?php echo $usuario["nombreUsuario"]?>
            & ape= <?php echo $usuario["apellidoPaternoUsuario"]?> & dir=<?php $usuario["apellidoMaternoUsuario"]?>"> <input type="button" name="up" id="up" value="actualizar"></a></td>
        </tr>

        <?php endforeach ?>

        <tr>
          <td></td>
          <td><input type="text" name="nombreUsuario" size="10" class="centrado"></td>
          <td><input type="text" name="apellidoPaternoUsuario" size="10" class="centrado"></td>
          <td><input type="text" name="apellidoMaternoUsuario" size="10" class="centrado"></td>
          <td><input type="text" name="ocupacionUsuario" size="10" class="centrado"></td>
          <td class="bot"><input type="submit" name="cr" id="cr" value="Insertar"> </td>
        </tr>

        <tr>
          <td >
            <?php
//------------------paginacion-----------
              for ($i=1; $i <= $total_pagina ; $i++) {
                // code...
                echo "<a href='?pagina=".$i."'>".$i."</a>   ";
              }

            ?>
          </td>
        </tr>
      </table>
    </form>






  </body>
</html>
