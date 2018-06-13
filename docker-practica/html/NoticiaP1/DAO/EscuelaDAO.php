<?php

include('Conectar.php');
/**
 *
 */
class EscuelaDAO extends Conectar
{

  protected static $conectarDB;

  public static function getConectar(){

    self::$conectarDB = Conectar::conexion();

  }

  private static function desconectar(){

    self::$conectarDB = null;

  }

  public static function insertarEscuela(Escuela $escuela,Calle $calle,Ciudad $ciudad, Region $region){



  $query = "INSERT INTO ESCUELA(nombreEscuela,codigoEscuela,CALLE_ID_CALLE,CIUDAD_ID_CIUDAD,REGION_ID_REGION) VALUES ('".$escuela->getNombreEscuela()."','".$escuela->getCodigoEscuela()."','".$calle->getIdCalle()."','".$ciudad->getIdCiudad()."','".$region->getIdRegion()."')";


  self::getConectar();

  $resultadoInsertar = self::$conectarDB->prepare($query);

  $resultadoInsertar->execute();


  }







}


 ?>
