<?php


include '../Controller/LoginController.php';
include '../Helper/ValidarCampo.php';


  header('Content-Type: application/json');

  $resultado= array();

  if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(isset($_POST["txtUsuario"]) && isset($_POST["txtPassword"])){

      $usuario= validarCampo($_POST["txtUsuario"]);

      $password= validarCampo($_POST["txtPassword"]);

      $resultado = array("estado"=>"true");

        if (LoginController::login($usuario,$password)){

          return print(json_encode($resultado));

        }

    }

    $resultado = array("estado"=>"false");
    return print(json_encode($resultado));

  }




?>
