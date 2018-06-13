<?php


include('../Controller/RegionController.php');


  //header('Conntent-type: application/json');

  $resultadoRegion= array();
  //me sercioro de que no vengan vacios
  if( isset($_POST["txtNombreRegion"]) &&
      isset($_POST["txtNuemroRegion"]) &&
      isset($_POST["txtComunaRegion"]) &&
      isset($_POST["txtnombreCiudad"]) &&
      isset($_POST["txtlocalidadCiudad"]) &&
      isset($_POST["txtnombreCalle"]) &&
      isset($_POST["txtnumeroCalle"]) &&
      isset($_POST["txtnombreEscuela"]) &&
      isset($_POST["txtnombrecodigoEscuela"])
    ){
    //absorbo en bariables lo que viene por POST de la vista
    $regionNombre = $_POST["txtNombreRegion"];
    $regionNumero = $_POST["txtNuemroRegion"];
    $regionComuna = $_POST["txtComunaRegion"];
    //$resultadoRegion = array("estado"=>"true");
    //ejecuto el metodo mandando datos a contolador
    RegionController::ingresrRegion($regionNombre,$regionNumero,$regionComuna);

    //absorbo en bariables lo que viene por POST de la vista
    $ciudadNombre = $_POST["txtnombreCiudad"];
    $ciudadLocalidad = $_POST["txtlocalidadCiudad"];

    //ejecuto el metodo mandando datos a contolador
    CiudadController::ingresarCiudad($ciudadNombre,$ciudadLocalidad);

    //absorbo en bariables lo que viene por POST de la vista
    $calleNombre = $_POST["txtnombreCalle"];
    $calleNumero = $_POST["txtnumeroCalle"];

    //ejecuto el metodo mandando datos a contolador
    CalleController::ingresarCalle($calleNombre,$calleNumero);

    //absorbo en bariables lo que viene por POST de la vista
    $escuelaNombre = $_POST["txtnombreEscuela"];
    $escuelaCodigo = $_POST["txtnombrecodigoEscuela"];

    //ejecuto el metodo mandando datos a contolador
    EscuelaController::ingresarEscuela($escuelaNombre,$escuelaCodigo);

  }else {
    echo "error";
  }











?>
