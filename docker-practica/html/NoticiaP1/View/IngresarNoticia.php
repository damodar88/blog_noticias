<?php include('Default/head.php'); ?>

<?php include('Default/menu.php') ?>


<br><br>

<form action="../controller/TransaccionControler.php" method="post" enctype="multipart/form-data" name="form1">
<table >
  <tr>
    <td>Título:
    <label for="campo_titulo"></label></td>
  	<td><input type="text" name="campo_titulo" id="campo_titulo"></td>
	</tr>

	<tr>
		<td>Seccion:
    <label for="campo_seccion"></label></td>
		<td><input type="text" name="campo_Seccion" id="campo_seccion"></td>
	</tr>

  <tr><td>Comentarios:
    <label for="area_comentarios"></label></td>
    <td><textarea name="area_comentarios" id="area_comentarios" rows="10" cols="50"></textarea></td>
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