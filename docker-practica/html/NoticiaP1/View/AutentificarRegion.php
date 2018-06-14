<?php


include('../Controller/RegionController.php');

//header('Conntent-type: application/json');
$resultado= array();

if(isset($_POST["txtnombreRegion"]) && isset($_POST["txtnumeroRegion"]) && isset($_POST["txtcomunaRegion"])){

    $regionNombre = (htmlentities(addslashes($_POST["txtnombreRegion"])));
    $regionNumero = (htmlentities(addslashes($_POST["txtnumeroRegion"])));
    $regionComuna = (htmlentities(addslashes($_POST["txtcomunaRegion"])));

    //$resultado = array("estado"=>"true");

    RegionController::ingresarRegion($regionNombre,$regionNumero,$regionComuna);

}else {
  echo "error";
}



?>
