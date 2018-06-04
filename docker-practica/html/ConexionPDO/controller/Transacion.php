
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <?php

    include('../modelo/ManejoObjetos.php');
    include('../modelo/FormularioNoticiaModel.php');

    try {

      $miconexion = new PDO('mysql:host=docker-practica_mysql_1;dbname=mydb;', 'root', 'pass');

      $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        if ($_FILES['imagen']['error']) {
          // code...
          switch ($_FILE['imagen']['error']) {

            case '1': //error exceso tamaño de la imagen

              echo "El tamaño de la imagen supera el tamaño permitido";

              break;

            case '2'://eror exceso tamaño de archivo

              echo "El tamaño del archivo supera tamaño permitido (post_max_size de php.ini)";

              break;

            case '3':

              echo "El envio se a interrumpido durante durante la transmicion";

              break;

            case '4': //error no se a enviado el archivo

              echo "El tamaño es nulo o no se a enviado archivo";

              break;
          }

        }else {

            echo "No hay errores en la transferencia de archivos. <br/>";

            if ((isset($_FILE['imagen']['name']) && ($_FILE['imagen']['error']==UPLOAD_ERR_OK))){

                $destino_de_ruta='imagenes/';

                move_uploaded_file($_FILE['imagen']['tmp_name'],$destino_de_ruta.$_FILE['imagen']['name']);

                echo "El archivo".$_FILE['imagen']['name']."Se a copiado en el directorio de imagenes";

            }else {

                echo "El archivo no se a copiado en el directorio de imagenes";

            }

        }


    $ManejoObjetos = new ManejoObjetos($miconexion);

    $blog = new FormularioNoticiaModel();

    $blog->set_imagen();

    $blog->set_fechaNoticia();

    $blog->set_seccionNoticia();

    $blog->set_noticia();

    $blog->set_tituloNoticia();


    } catch (Exception $e) {

      die("Error---:".$e->getMessage());

    }




  ?>

  </body>
</html>
