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


}




 ?>
