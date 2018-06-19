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



}








 ?>
