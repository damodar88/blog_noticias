<?php session_start(); ?>
<?php


include('../Controller/ComentarioController.php');


  //establesemos la zona horaria para el ingreso de fechas
  $date = new DateTime("2018-06-20", new DateTimeZone('America/Santiago'));
  date_default_timezone_set('America/Santiago');

  //me sercioro de que no vengan vacios
  if(isset($_POST["txtcoemtario"])
  && isset($_POST["txtnombreLector"])
  && isset($_POST["txtidNoticia"])
  && isset($_POST["txtidLector"])){

    //absorbo en bariables lo que viene por POST de la vista
    $comentario = (htmlentities(addslashes($_POST["txtnombreCalle"])));
    $nombreComentario = (htmlentities(addslashes($_POST["txtnumeroCalle"])));
    $idNoticiaComentario = (htmlentities(addslashes($_POST["txtnumeroCalle"])));
    $idLectorComentario = (htmlentities(addslashes($_POST["txtnumeroCalle"])));
    $fechaComentario = (Date("Y-m-d H:i:s"));


    //ejecuto el metodo mandando datos a contolador
    ComentarioController::ingresarComentario($comentario,$nombreComentario,$idNoticiaComentario,$idLectorComentario,$fechaComentario);


  }else {
    echo "error";
  }


?>
