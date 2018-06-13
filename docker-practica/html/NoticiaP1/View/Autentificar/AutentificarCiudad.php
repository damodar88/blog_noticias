<?php


include('../Controller/CiudadController.php');


  //header('Conntent-type: application/json');

  $resultadoRegion= array();
  //me sercioro de que no vengan vacios
  if(
      isset($_POST["txtnombreCiudad"]) &&
      isset($_POST["txtlocalidadCiudad"])

    ){

    //absorbo en bariables lo que viene por POST de la vista
    $ciudadNombre = $_POST["txtnombreCiudad"];
    $ciudadLocalidad = $_POST["txtlocalidadCiudad"];

    //ejecuto el metodo mandando datos a contolador
    CiudadController::ingresarCiudad($ciudadNombre,$ciudadLocalidad);

  }else {
    echo "error";
  }











?>
