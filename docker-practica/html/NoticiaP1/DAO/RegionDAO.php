<?php



include('Conectar.php');
/**
 *
 */
class RegionDAO extends Conectar
{

  protected static $conectarDB;

  public static function getConectar(){

    self::$conectarDB = Conectar::conexion();

  }

  private static function desconectar(){

    self::$conectarDB = null;

  }

  public static function insertarRegion($region){

  $query = "INSERT INTO REGION(nombreRegion,numeroRegion,comunaRegion) VALUES ('".$region->get_imagen()."','".$region->get_fechaNoticia()."','".$region->get_seccionNoticia()."')";


  self::getConectar();

  $resultado = self::$conectarDB->prepare($query);

  $resultado->execute();

      if ($resultado->rowCount() > 0) {

          return true;

        }else {

        return false;

        }

  }


 }



?>
