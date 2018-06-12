<?php


include('../Controller/RegionController.php');


  //header('Conntent-type: application/json');

  $resultadoRegion= array();

  if( isset($_POST["txtNombreRegion"]) &&
      isset($_POST["txtNuemroRegion"]) &&
      isset($_POST["txtComunaRegion"])
    ){

    $regionNombre = $_POST["txtNombreRegion"];
    $regionNumero = $_POST["txtNuemroRegion"];
    $regionComuna = $_POST["txtComunaRegion"];

    //$resultadoRegion = array("estado"=>"true");

    RegionController::ingresrRegion($regionNombre,$regionNumero,$regionComuna);

   }



?>
