<?php
session_start();
if(isset($_SESSION["usuario"]["nombreUsuario"])){?>

<?php

include '../Controller/NoticiaController.php';

$date = new DateTime('1024' ,new DateTimeZone('America/Santiago'));
date_default_timezone_set('America/Santiago');



$idNoticia=$_GET['ID_NOTICIA'];
$refImagen=$_FILES['imagen'];
$nombreImagen=$_GET['nombreImagen'];
$titulo=$_GET['titulo'];
$noticia=$_GET['noticaNoticia'];
$seccion=$_GET['seccion'];
$usuarioI=$_SESSION["usuario"]["ID_USUARIO"];

echo "El ID_Noticia es --:";
var_dump($idNoticia);
echo "<br>";
echo "imagen adjunta--:";
var_dump($refImagen);
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

/*
  //me sercioro de que no vengan vacios
if(isset($_GET['ID_NOTICIA'])
  && isset($_FILES['imagen'])
  && isset($_GET['titulo'])
  && isset($_GET['noticia'])
  && isset($_GET['seccion'])
  && isset($_SESSION["usuario"]["ID_USUARIO"])){

    //absorbo en bariables lo que viene por POST de la vista
    $idNoticia=(htmlentities(addslashes($_GET['ID_NOTICIA'])));
    $refImagen=$_FILES['imagen']['name'];
    $titulo=(htmlentities(addslashes($_GET['titulo'])));
    $noticia=(htmlentities(addslashes($_GET['noticia'])));
    $seccion=(htmlentities(addslashes($_GET['seccion'])));
    $noticiaFecha=(Date("Y-m-d H:i:s"));
    $noticiaIdusuario=(htmlentities(addslashes($_SESSION["usuario"]["ID_USUARIO"])));


    //ejecuto el metodo mandando datos a contolador
    NoticiaController::modificarNoticia($idNoticia,$refImagen,$titulo,$noticia,$seccion,$noticiaFecha,$noticiaIdusuario);

    //echo "<script> location.replace('IngresarNoticia.php'); </script>";

    echo "salio bien";
  }else {
  //echo "<script> location.replace('index.php'); </script>";
  echo "error";

  }
*/


?>


<?php
}else{echo "no se puede ver";}?>
