<?php


include('../Library/Conectar.php');
include('../Entidades/Usuario.php');
/**
 *
 */
class UsuarioDAO extends Conectar
{

  protected static $conectarDB;

  public static function getConectar(){

    self::$conectarDB = Conectar::conexion();

  }

  private static function desconectar(){

    self::$conectarDB = null;

  }

  public static function login(){

    $query = "SELECT ID_USUARIO,usuarioUsuario,passwordUsuario FROM USUARIO WHERE usuarioUsuario=:usuario AND passwordUsuario=:password";

    self::getConectar();

  }






}


?>
