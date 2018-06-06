<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="../controller/TransaccionControler.php" method="post" enctype="multipart/form-data" name="form1">
    <table >
      <tr>
        <td>Nombre:
        <label for="campo_titulo"></label></td>
      	<td><input type="text" name="campo_nombre" id="campo_nombre"></td>
    	</tr>

    	<tr>
    		<td>Meil:
        <label for="campo_meil"></label></td>
    		<td><input type="text" name="campo_meil" id="campo_seccion"></td>
    	</tr>

      <tr><td>Comentarios:
        <label for="area_comentarios"></label></td>
        <td><textarea name="area_comentarios" id="area_comentarios" rows="10" cols="50"></textarea></td>
      </tr>
        <input type="hidden" name="MAX_TAM" value="2097152">
      <tr>
    
      </table>
    </form>




  </body>
</html>
