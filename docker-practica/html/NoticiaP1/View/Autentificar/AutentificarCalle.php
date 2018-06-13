<?php


include('../Controller/CalleController.php');


  //header('Conntent-type: application/json');

  $resultadoRegion= array();
  //me sercioro de que no vengan vacios
  if(
      isset($_POST["txtnombreCalle"]) &&
      isset($_POST["txtnumeroCalle"])

    ){

    //absorbo en bariables lo que viene por POST de la vista
    $calleNombre = $_POST["txtnombreCalle"];
    $calleNumero = $_POST["txtnumeroCalle"];

    //ejecuto el metodo mandando datos a contolador
    CalleController::ingresarCalle($calleNombre,$calleNumero);


  }else {
    echo "error";
  }











?>
