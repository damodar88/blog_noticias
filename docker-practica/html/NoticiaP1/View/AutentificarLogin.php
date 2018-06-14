<?php


include('../Controller/LoginController.php');

  header('Content-Type: application/json');

  $resultado= array();

  if(isset($_POST["txtUsuario"]) && isset($_POST["txtPassword"])){

    $usuario=$_POST["txtUsuario"];

    $password=$_POST["txtPassword"];

    $resultado = array("estado"=>"true");

      if (LoginController::login($usuario,$password)){

        return print(json_encode($resultado));

      }

  }

  $resultado = array("estado"=>"false");
  return print(json_encode($resultado));




?>
