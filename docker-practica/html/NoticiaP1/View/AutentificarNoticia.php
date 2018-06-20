<?php
session_start();
if(isset($_SESSION["usuario"]["nombreUsuario"])){?>

<?php

include '../Controller/NoticiaController.php';


$date = new DateTime("2018-06-20", new DateTimeZone('America/Santiago'));

date_default_timezone_set('America/Santiago');



if(isset($_POST["txttitulo"]) && isset($_POST["txtseccion"]) && isset($_POST["txtnotica"]) && isset($_FILES['imagen'])){


    if ($_FILES['imagen']['error']) {
      // code...
      switch ($_FILES['imagen']['error']) {

        case '1': //error exceso tamaño de la imagen

          //echo "El tamaño de la imagen supera el tamaño permitido";
          header("location:ingresarNoticia.php");

          break;

        case '2'://eror exceso tamaño de archivo

          //echo "El tamaño del archivo supera tamaño permitido (post_max_size de php.ini)";
          header("location:ingresarNoticia.php");
          break;

        case '3':

          //echo "El envio se a interrumpido durante durante la transmicion";
          header("location:ingresarNoticia.php");
          break;

        case '4': //error no se a enviado el archivo

        //  echo "El tamaño es nulo o no se a enviado archivo";
        header("location:ingresarNoticia.php");
          break;
      }

    }else {

      //  echo "No hay errores en la transferencia de archivos. <br/>";




        if ((isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error']==UPLOAD_ERR_OK))){

            $destino_de_ruta="imagenes/";

            move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_de_ruta.$_FILES['imagen']['name']);

            //echo "El archivo".$_FILES['imagen']['name']."Se a copiado en el directorio de imagenes";

        }else {

          //  echo "El archivo no se a copiado en el directorio de imagenes";

        }

    }

    //echo "dato ID---:".$_SESSION["usuario"]["ID_USUARIO"]."<br></br>";
    //var_dump($_SESSION["usuario"]);
    $noticiaTitulo  = (htmlentities(addslashes($_POST["txttitulo"])));
    $noticiaSecion  = (htmlentities(addslashes($_POST["txtseccion"])));
    $noticiaNoticia = (htmlentities(addslashes($_POST["txtnotica"])));
    $noticiaImagen  = (htmlentities(addslashes($_FILES["imagen"]['name'])));
    $noticiaFecha   = (Date("Y-m-d H:i:s"));
    $noticiaIdusuario = (htmlentities(addslashes($_SESSION["usuario"]["ID_USUARIO"])));

    NoticiaController::ingresarNoticia($noticiaTitulo,$noticiaSecion,$noticiaNoticia,$noticiaImagen,$noticiaFecha,$noticiaIdusuario);




}else {
  //echo "error";

}header("location:index.php");?>



<?php
}else{
  echo "no se puede ver";
}
?>
