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

            $usuario = LoginController::getUsuario($usuario,$password);

            session_start();

            $_SESSION["usuario"] = array(
              "ID_USUARIO"              => $usuario->getIdUsuario(),
              "administrador"           => $usuario->getAdministradorUsuario(),
              "nombreUsuario"           => $usuario->getNombreUsuario(),
              "apellidoPaternoUsuario"  => $usuario->getApellidoPaternoUsuario(),
              "apellidoMaternoUsuario"  => $usuario->getApellidoMaternoUsuario(),
              "usuarioUsuario"          => $usuario->getNombreUsuario(),
              "fechaModificacionUsuario"=> $usuario->getFechaModificacionUsuario(),
              "ocupacionUsuario"        => $usuario->getOcupacionUsuario(),
            );

            return print(json_encode($resultado));
            //echo var_dump($usuario);
            //echo $usuario->getNombreUsuario();
        }

    }

    $resultado = array("estado"=>"false");
    return print(json_encode($resultado));

  }



?>
