<?php

include('../Librery/Conectar.php');
include('../Entidades/Region.php');
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

  public static function insertarRegion(Region $region){

  $query = "INSERT INTO REGION(nombreRegion,numeroRegion,comunaRegion) VALUES ('".$region->getNombreRegion()."','".$region->getNuemroRegion()."','".$region->getComunaRegion()."')";


  self::getConectar();

  $resultadoInsertar = self::$conectarDB->prepare($query);

  $resultadoInsertar->execute();


  }


 }



?>
