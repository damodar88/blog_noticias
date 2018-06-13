<?php


include('../Librery/Conectar.php');
include('../Entidades/Usuario.php');
/**
 *
 */

class UsuarioDAO extends Conectar
{

  protected static $conectarDB;
  public $usuario;

  public static function getConectar(){

    self::$conectarDB = Conectar::conexion();


  }

  public static function desconectar(){

    self::$conectarDB = null;

  }

  public function insertaUsuario(Usuario $usuario,Escuela $escuela,Calle $calle,Ciudad $ciudad, Region $region){



    $sql="INSERT INTO USUARIO(administrador,nombreUsuario,apellidoPaternoUsuario,apellidoMaternoUsuario,usuarioUsuario,passwordUsuario,ocupacionUsuario
    ) VALUES
    ('".$usuario->getAdministradorUsuario()."','".$usuario->getNombreUsuario()."','".$usuario->getApellidoPaternoUsuario()."','".$usuario->getApellidoMaternoUsuario()."','".$usuario->getUsuarioUsuario()."','".$usuario->getPasswordUsuario()."','".$usuario->getFechaModificacionUsuario()."','".$usuario->getOcupacionUsuario()."')";

    self::getConectar();

    $resultado = self::$conectarDB->prepare($sql);

    $resultado->execute();

  }


  public static function login($usuarioEvaluar){

    $query = "SELECT * FROM USUARIO WHERE usuarioUsuario = :usuario AND passwordUsuario = :password";

    self::getConectar();

    $resultado = self::$conectarDB->prepare($query);

    $resultado->bindParam(":usuario",$usuarioEvaluar->getUsuarioUsuario());

    $resultado->bindParam(":password",$usuarioEvaluar->getPasswordUsuario());



    $resultado->execute();

    //$numeroRegistro = $resultado->rowCount();


    if ($resultado->rowCount() > 0) {

        $fila = $resultado->fetch();

        if ($fila["usuario"] == $usuarioEvaluar->getUsuarioUsuario && $fila["password"]== $usuarioEvaluar->getPasswordUsuario){
          return true;
        }

      return false;

    }


  }





}


?>
