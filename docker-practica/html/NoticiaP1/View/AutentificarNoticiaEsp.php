<?php


include('../Controller/NoticiaController.php');

//header('Conntent-type: application/json');

echo "noticia especifica";

$noticia = $_POST["txt"];

var_dump($noticia);

/*
if(isset($_POST["<?php $valor->getIdNoticia();?>"])){

    $ridNoticia = (htmlentities(addslashes($_POST["txtnombreRegion"])));
    //$resultado = array("estado"=>"true");

   NoticiaController::getNoticiaEspecifica($ridNoticia);

}else {
  echo "error";
}

*/

?>
