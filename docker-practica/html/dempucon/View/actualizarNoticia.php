<?php
session_start();
if(isset($_SESSION["usuario"]["nombreUsuario"])){?>

<?php

include '../Controller/NoticiaController.php';

$date = new DateTime('1024' ,new DateTimeZone('America/Santiago'));
date_default_timezone_set('America/Santiago');



$idNoticia=$_GET['ID_NOTICIA'];
$refImagen=$_GET['referenciaImagen'];
$titulo=$_GET['titulo'];
$noticia=$_GET['noticia'];
$seccion=$_GET['seccion'];
$usuarioI=$_SESSION["usuario"]["ID_USUARIO"];

echo "El ID_Noticia es ---------:";
var_dump($idNoticia);
echo "<br>";
var_dump($refImagen);
echo "<br>";
var_dump($titulo);
echo "<br>";
var_dump($noticia);
echo "<br>";
var_dump($seccion);
echo "<br>";
var_dump($usuarioI);

/*
  //me sercioro de que no vengan vacios
if(isset($_GET['ID_NOTICIA']) & isset($_GET['referenciaImagen']) & isset($_GET['titulo']) & isset($_GET['noticia']) & isset($_GET['seccion'])){

    //absorbo en bariables lo que viene por POST de la vista
    $idNoticia=(htmlentities(addslashes($_GET['ID_NOTICIA'])));
    $refImagen=(htmlentities(addslashes($_GET['referenciaImagen'])));
    $titulo=(htmlentities(addslashes($_GET['titulo'])));
    $noticia=(htmlentities(addslashes($_GET['noticia'])));
    $seccion=(htmlentities(addslashes($_GET['seccion'])));
    $noticiaFecha=(Date("Y-m-d H:i:s"));
    $noticiaIdusuario=(htmlentities(addslashes($_SESSION["usuario"]["ID_USUARIO"])));


    //ejecuto el metodo mandando datos a contolador
    NoticiaController::modificarNoticia($idNoticia,$refImagen,$titulo,$noticia,$seccion,$noticiaFecha,$noticiaIdusuario);

    echo "<script> location.replace('IngresarNoticia.php'); </script>";


  }else {
  echo "<script> location.replace('index.php'); </script>";

  }

*/

?>


<?php
}else{echo "no se puede ver";}?>
