<?php session_start(); ?>
<?php


include('../Controller/ComentarioController.php');



  /*
  $nombre = $_GET["txtNombre"];
  $comentario = $_GET["txtcomentario"];
  $id = $_GET["id"];

  echo "nombre lector---:".$nombre;
  echo "<br>";
  echo "cometario----:".$comentario;
  echo "<br>";

  echo "id noticia----:".$id;
  echo "<br>";
   */




   $nombreLector = (htmlentities(addslashes($_GET["txtNombre"])));



  //establesemos la zona horaria para el ingreso de fechas
  $date = new DateTime("2018-06-20", new DateTimeZone('America/Santiago'));
  date_default_timezone_set('America/Santiago');

  //me sercioro de que no vengan vacios
  if(isset($_GET["txtNombre"])
  && isset($_GET["txtcomentario"])
  && isset($_GET["id"])){


  //absorbo en bariables lo que viene por POST de la vista
  $fechaComentario = (Date("Y-m-d H:i:s"));
  $idLectorComentario = (htmlentities(addslashes()));
  $idNoticiaComentario = (htmlentities(addslashes($_GET["id"])));
  $comentario = (htmlentities(addslashes($_GET["txtcomentario"])));

  //ejecuto el metodo mandando datos a contolador
  ComentarioController::ingresarComentario($fechaComentario,$idNoticiaComentario,$comentario);


  }else {
    echo "error";
  }


?>
