<?php


include('../Controller/NoticiaController.php');



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


?>



<?php



?>
