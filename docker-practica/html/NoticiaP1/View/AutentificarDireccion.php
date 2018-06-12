<?php


//include('../Controller/RegionController.php');

echo "Holas";

  header('Conntent-type: application/json');

  $resultadoRegion= array();

  if( isset($_POST[""]) &&
      isset($_POST[""]) &&
      isset($_POST[""])

    ){

    $usuario=$_POST["txtUsuario"];

    $password=$_POST["txtPassword"];


    $resultado = array("estado"=>"true");

      if (LoginController::login($usuario,$password)){

        return print(json_encode($resultado));


      }else {
        $resultado = array("estado"=>"false");
        return print(json_encode($resultado));


      }



  }else {

  }



?>
