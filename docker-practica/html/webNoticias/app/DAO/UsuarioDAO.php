<?php


include_once('../Library/Conectar.php');
include_once('../Entidades/Usuario.php');
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

  public static function login($usuario){

    $query = "SELECT ID_USUARIO,usuarioUsuario,passwordUsuario FROM USUARIO WHERE usuarioUsuario=:usuario AND passwordUsuario=:password";

    self::getConectar();

    $resultado = self::$conexion->prepare($query);
    $resultado->bindParam(":usuario",$usuario->getNombreUsuario());
    $resultado->bindParam(":password",$usuario->getPasswordUsuario());

    $resultado->execute();

    if ($resultado->rowCount()>0) {

      return "verdadero";

    }
     return "falso";
  }






}


?>
