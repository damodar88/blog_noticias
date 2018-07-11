<?php


include('../DAO/UsuarioDAO.php');
/**
 *
 */

class UsuarioController
{



  public static function leerUsuario(){

    $datosUsuario = array();

    $datosUsuario = UsuarioDAO::obtenerUsuario();

    return $datosUsuario;

  }

  public static function eliminarUsuario($idUsuario){

    $usuarioEliminar = new Usuario();
    $usuarioEliminar->setIdUsuario($idUsuario);

    return UsuarioDAO::borrarUsuario($usuarioEliminar);

  }

  public static function modificarUsuario($idUsuario,$admin,$nombre,$apellidoP,$apellidoM,$usuario,$password,$fechaModificacion,$ocupacion){

    $modificarUsuario = new Usuario();
    $modificarUsuario->setIdUsuario($idUsuario);
    $modificarUsuario->setAdministradorUsuario($admin);
    $modificarUsuario->setNombreUsuario($nombre);
    $modificarUsuario->setApellidoPaternoUsuario($apellidoP);
    $modificarUsuario->setApellidoMaternoUsuario($apellidoM);
    $modificarUsuario->setUsuarioUsuario($usuario);
    $modificarUsuario->setPasswordUsuario($password);
    $modificarUsuario->setFechaModificacionUsuario($fechaModificacion);
    $modificarUsuario->setOcupacionUsuario($ocupacion);

    UsuarioDAO::actualizarUsuario($modificarUsuario);

  }


}




 ?>
