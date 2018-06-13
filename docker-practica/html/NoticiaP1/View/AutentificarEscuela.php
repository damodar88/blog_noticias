<?php


include('../Controller/EscuelaController.php');


  //header('Conntent-type: application/json');

  $resultadoRegion= array();
  //me sercioro de que no vengan vacios
  if(
      isset($_POST["txtnombreEscuela"]) &&
      isset($_POST["txtnombrecodigoEscuela"])
    ){

    //absorbo en bariables lo que viene por POST de la vista
    $escuelaNombre = (htmlentities(addslashes($_POST["txtnombreEscuela"])));
    $escuelaCodigo = (htmlentities(addslashes($_POST["txtnombrecodigoEscuela"])));

    //ejecuto el metodo mandando datos a contolador
    EscuelaController::ingresarEscuela($escuelaNombre,$escuelaCodigo);

  }else {
    echo "error";
  }











?>
