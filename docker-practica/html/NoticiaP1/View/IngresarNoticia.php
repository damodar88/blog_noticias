<?php include('Default/head.php'); ?>

<?php include('Default/menu.php') ?>


<br><br>

<form action="AutentificarNoticia.php" method="post" enctype="multipart/form-data" name="form1">
<table >
  <tr>
    <td>Título:
    <label for="campo_titulo"></label></td>
  	<td><input type="text" name="txttitulo" id="txttitulo"></td>
	</tr>

	<tr>
		<td>Seccion:
    <label for="campo_seccion"></label></td>
		<td><input type="text" name="txtseccion" id="seccionNoticia"></td>
	</tr>

  <tr><td>Comentarios:
    <label for="area_comentarios"></label></td>
    <td><textarea name="txtnotica" id="txtnotica" rows="10" cols="50"></textarea></td>
    </tr>
    <input type="hidden" name="MAX_TAM" value="2097152">
  <tr>
  <td colspan="2" align="center">Seleccione una imagen con tamaño inferior a 2 MB</td></tr>
  <tr>
    <td colspan="2" align="left"><input type="file" name="imagen" id="imagen"></td>
    </tr>
    <tr>
    <td colspan="2" align="center">
    <input type="submit" name="btn_enviar" id="btn_enviar" value="Enviar"></td></tr>

  </table>
</form>



<?php

  include '../Controller/NoticiaController.php';

  $noticia = new  NoticiaController();

  $tabla_noticia = $noticia->getNoticia();


?>

<?php
  //require('model/Paginacion.php');

?>
<?php if ($_SESSION["usuario"]["administrador"] == '1') {?>

    <table class="table" align="center">
    <tr>
      <td class="primera fila">Imagen</td>
      <td class="primera fila">Titulo</td>
      <td class="primera fila">Noticia</td>
      <td class="primera fila">Seccion</td>
      <td class="primera fila">Fecha</td>
      <td class="primera fila">Eliminar</td>
      <td class="primera fila">Actualizar</td>
    </tr>

    <?php foreach ($tabla_noticia as $valor){ ?>

      <tr>
        <td><?php echo $valor->getReferenImagenNoticia();?></td>
        <td><?php echo $valor->getTituloNoticia();?></td>
        <td><?php echo $valor->getNoticiaNoticia();?></td>
        <td><?php echo $valor->getSecionNoticia();?></td>
        <td><?php echo $valor->getFechaNoticia();?></td>
        <td class="bot"><a href="borrar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?>"> <input type="button" name="del"id="del" class="btn btn-success" size="2" value="Eliminar"></a></td>
        <td class="bot"><a href="editar.php?ID_USUARIO=<?php echo $usuario["ID_USUARIO"]?> & nom=<?php echo $usuario["nombreUsuario"]?>& ape= <?php echo $usuario["apellidoPaternoUsuario"]?> & dir=<?php $usuario["apellidoMaternoUsuario"]?>"> <input type="button" name="up" class="btn btn-success" id="up" size="2" value="actualizar"></a></td>
      </tr>

    <?php } ?>

    <tr>
      <!--input Region-->
      <td><input type="text" name="txtnombreRegion" size="10" class="centrado"></td>
      <td><input type="text" name="txtnombreRegion" size="10" class="centrado"></td>
      <td><input type="text" name="txtnombreRegion" size="10" class="centrado"></td>
      <td><input type="text" name="txtnumeroRegion" size="10" class="centrado"></td>
      <td><input type="text" name="txtcomunaRegion" size="10" class="centrado"></td>
      <td class="bot"><button type="submit" class="btn btn-success" name="button">Insertar</button> </td>
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


  <?php }else{ ?>



  <?php } ?>



<?php include('Default/footer.php') ?>
