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

<?php include('Default/footer.php') ?>
