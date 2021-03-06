
  <?php

    include_once('../model/ManejoObjetos.php');
    include_once('../model/EntidadNoticia.php');

    try {

      $miconexion = new PDO('mysql:host=docker-practica_mysql_1;dbname=mydb;', 'root', 'pass');

      $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        if ($_FILES['imagen']['error']) {
          // code...
          switch ($_FILES['imagen']['error']) {

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

            if ((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error']==UPLOAD_ERR_OK))){

                $destino_de_ruta='../imagenes/';

                move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_de_ruta.$_FILES['imagen']['name']);

                echo "El archivo".$_FILES['imagen']['name']."Se a copiado en el directorio de imagenes";

            }else {

                echo "El archivo no se a copiado en el directorio de imagenes";

            }

        }


    $ManejoObjetos = new ManejoObjetos($miconexion);

    $blog = new EntidadNoticia();

    $blog->set_imagen(htmlentities(addslashes($_FILES["imagen"]['name'])));

    $blog->set_fechaNoticia(Date("Y-m-d H:i:s"));

    $blog->set_seccionNoticia(htmlentities(addslashes($_POST["campo_Seccion"])));

    $blog->set_noticia(htmlentities(addslashes($_POST["area_comentarios"])));

    $blog->set_tituloNoticia(htmlentities(addslashes($_POST["campo_titulo"])));

    $ManejoObjetos->insertaContenido($blog);

    echo "<br> Entrada de bloga de blog ingresada correctamente </br>";


    } catch (Exception $e) {

      die("Error---:".$e->getMessage());

    }




  ?>
