<?php
session_start();
if(isset($_SESSION["usuario"]["nombreUsuario"])){?>

<?php

include '../Controller/NoticiaController.php';

$date = new DateTime('1024' ,new DateTimeZone('America/Santiago'));
date_default_timezone_set('America/Santiago');


$refImagen=$_FILES["img"]['name'];
$idNoticia=$_POST['ID_NOTICIA'];
$nombreImagen=$_POST['nombreImagen'];
$titulo=$_POST['titulo'];
$noticia=$_POST['noticaNoticia'];
$seccion=$_POST['seccion'];
$usuarioI=$_SESSION["usuario"]["ID_USUARIO"];


/*
echo "El ID_Noticia es --:";
var_dump($idNoticia);
echo "<br>";
echo "imagen adjunta--:";
var_dump($ref_Imagen);
echo "<br>";
echo "imagen nombre--:";
var_dump($nombreImagen);
echo "<br>";
echo "titulo noticia--:";
var_dump($titulo);
echo "<br>";
echo "noticia noticia--:";
var_dump($noticia);
echo "<br>";
echo "seccion noticia--:";
var_dump($seccion);
echo "<br>";
echo "usuario id Foranea--:";
var_dump($usuarioI);
*/

  //me sercioro de que no vengan vacios
if(isset($_FILES["img"])
&& isset($_POST['ID_NOTICIA'])
&& isset($_POST['titulo'])
&& isset($_POST['noticaNoticia'])
&& isset($_POST['seccion'])){


    if($refImagen == ''){

        //imagen es nula
        //$nombreImagen;
        //absorbo en bariables lo que viene por POST de la vista
        $idNoticia=(htmlentities(addslashes($_POST['ID_NOTICIA'])));
        $refImagen=(htmlentities(addslashes($_POST['nombreImagen'])));
        $titulo=(htmlentities(addslashes($_POST['titulo'])));
        $noticia=(htmlentities(addslashes($_POST['noticaNoticia'])));
        $seccion=(htmlentities(addslashes($_POST['seccion'])));
        $noticiaFecha=(Date("Y-m-d H:i:s"));
        $noticiaIdusuario=(htmlentities(addslashes($_SESSION["usuario"]["ID_USUARIO"])));

        //ejecuto el metodo mandando datos a contolador
        NoticiaController::modificarNoticia($idNoticia,$refImagen,$titulo,$noticia,$seccion,$noticiaFecha,$noticiaIdusuario);

        echo "<script> location.replace('IngresarNoticia.php'); </script>";
        //echo "<br>";
        //echo "--salio bien";

    }else {

      $carpetaDestino = $_SERVER['DOCUMENT_ROOT'].'/dempucon/View/imagenes/';

      move_uploaded_file($_FILES['img']['tmp_name'],$carpetaDestino.$ref_Imagen);

      //absorbo en bariables lo que viene por POST de la vista
      $idNoticia=(htmlentities(addslashes($_POST['ID_NOTICIA'])));
      $refImagen=$_FILES['img']['name'];
      $titulo=(htmlentities(addslashes($_POST['titulo'])));
      $noticia=(htmlentities(addslashes($_POST['noticaNoticia'])));
      $seccion=(htmlentities(addslashes($_POST['seccion'])));
      $noticiaFecha=(Date("Y-m-d H:i:s"));
      $noticiaIdusuario=(htmlentities(addslashes($_SESSION["usuario"]["ID_USUARIO"])));


      //ejecuto el metodo mandando datos a contolador
      NoticiaController::modificarNoticia($idNoticia,$refImagen,$titulo,$noticia,$seccion,$noticiaFecha,$noticiaIdusuario);

      echo "<script> location.replace('IngresarNoticia.php'); </script>";

    }

  }else {
  //echo "<script> location.replace('index.php'); </script>";
  echo "<br>";
  echo "--error";

  }



?>


<?php
}else{echo "no se puede ver";}?>
