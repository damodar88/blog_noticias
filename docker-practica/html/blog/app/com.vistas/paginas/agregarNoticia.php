<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="../css/bootstrap.min.css"  />
  </head>
  <body>

  <!--form para mandar la noticia a la DB-->
  <form action="" method="post" enctype="" name="formNoticia">
    <table>
      <!--Titulo de la noticia-->
      <tr>
        <td>Titulo noticia:<label for="noticiaTitulo"></label>
        <td><input type="text" name="noticiaTitulo" id="noticiaTitulo" placeholder="Idea principal"></td>
        </td>
      </tr>

      <!--Comentario de la noticia-->
      <div class="form-group">
        <tr>
          <td>Noticia:<label for="areaNoticia" ></label></td>
          <td><textarea name="noticia" id="areaNoticia" cols="50" rows="10" placeholder="Texto de noticia explayado"></textarea></td>
        </tr>
      </div>

      <!--Combobox de seccion noticias-->
      <tr>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <td><label class="input-group-text" for="inputGroupSelect01">Seleccione la seccion:</label></td>
          </div>
          <td>
            <select class="custom-select" id="inputGroupSelect01">
              <option selected>Elija una opcion...</option>
              <option value="Educacion">Educacion</option>
              <option value="Ciencia">Ciencia</option>
              <option value="Inovacion">Inovacion</option>
              <option value="Cultura">Cultura</option>
            </select>
          </td>
        </div>
      </tr>

      <!--Subir la imagen de la noticia-->
      <input type="hidden" name="max_tam" value="2097152">

      <tr>
        <td colspan="2" align="center" >Seleccione una imagen inferior a 2 mb </td>
      </tr>

      <tr>
        <td colspan="2" align="left" > <input type="file" name="imagen" id="imagen">
        </td>
      </tr>
      <!--Mandar el formulario por imput-->
      <tr>
        <td colspan="2" algin="center">
          <input type="submit" name="botonEnviar" id="botonEnviar" value="enviar">
        </td>
      </tr>
      <!--Regresar al home-->
      <tr>
        <td colspan="2" algin="center">
          <a href="blogHome.php">Pgina principal</a>
        </td>
      </tr>

    </table>
  </form>

  </body>
</html>
