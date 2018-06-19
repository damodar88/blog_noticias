<?php


include('../Controller/EscuelaController.php');


  //header('Conntent-type: application/json');

  $resultadoRegion= array();
  //me sercioro de que no vengan vacios
  if(
      isset($_POST["txtnombreEscuela"]) &&
      isset($_POST["txtnombrecodigoEscuela"]) &&
      isset($_POST["txtRegion_id"]) &&
      isset($_POST["txtCiudad_id"]) &&
      isset($_POST["txtCalle_id"])
    ){


/*
"txtnombrecodigoEscuela"
"txtnombreRegion"
"txtnumeroRegion"
"txtcomunaRegion"
"txtnombreCiudad"
"txtlocalidadCiudad"
"txtnombreCalle"
"txtnumeroCalle"
*/
    //absorbo en variables lo que viene por POST de la vista
    $escuelaNombre = (htmlentities(addslashes($_POST["txtnombreEscuela"])));
    $escuelaCodigo = (htmlentities(addslashes($_POST["txtnombrecodigoEscuela"])));
    $escuelaRegion_id = (htmlentities(addslashes($_POST["txtRegion_id"])));
    $escuelaCiudad_id = (htmlentities(addslashes($_POST["txtCiudad_id"])));
    $escuelaCalle_id = (htmlentities(addslashes($_POST["txtCalle_id"])));

    ObtenerEscuelaController::obtenerIdEscuela($escuelaRegion_id,$escuelaCiudad_id,$escuelaCalle_id);




    //ejecuto el metodo mandando datos a contolador
    EscuelaController::ingresarEscuela($escuelaNombre,$escuelaCodigo);

  }else {
    echo "error";
  }











?>
