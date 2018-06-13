<?php


include('../Controller/NoticiaController.php');


  //header('Conntent-type: application/json');

  $resultadoRegion= array();
  //me sercioro de que no vengan vacios
  if( isset($_POST["txtNombreRegion"]) &&
      isset($_POST["txtNuemroRegion"]) &&
      isset($_POST["txtComunaRegion"])
    ){
    //absorbo en bariables lo que viene por POST de la vista
    $regionNombre = $_POST["txtNombreRegion"];
    $regionNumero = $_POST["txtNuemroRegion"];
    $regionComuna = $_POST["txtComunaRegion"];

  }else {
    echo "error intentelo mas tarde";
  }

?>
