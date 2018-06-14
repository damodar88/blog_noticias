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

          $usuario = LoginController::getUsuario($usuario,$password);

          $_SESSION["usuario"] = array(

            "id"=> $usuario->getIdUsuario(),
            "privilegio"=> $usuario->getAdministradorUsuario(),
            "nombre"=> $usuario->getNombreUsuario(),
            "apellidoP"=> $usuario->getApellidoPaternoUsuario(),
            "apellidoM"=> $usuario->getApellidoMaternoUsuario(),
            "usuario"=> $usuario->getNombreUsuario(),
            "fecha"=> $usuario->getFechaModificacionUsuario(),
            "ocupacion"=> $usuario->getOcupacionUsuario()

          );



        }

    }

    $resultado = array("estado"=>"false");
    return print(json_encode($resultado));

  }




?>
