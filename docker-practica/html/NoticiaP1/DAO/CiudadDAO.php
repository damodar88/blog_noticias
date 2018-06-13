<?php

include('../Librery/Conectar.php');
include('../Entidades/Ciudad.php');

/**
 *
 */
class CiudadDAO extends Conectar
{

  protected static $conectarDB;

  public static function getConectar(){

    self::$conectarDB = Conectar::conexion();

  }

  private static function desconectar(){

    self::$conectarDB = null;

  }

  public static function insertarCiudad(Ciudad $ciudad){

  $query = "INSERT INTO CIUDAD(nombreCiudad,localidadCiudad) VALUES ('".$ciudad->getNombreCiudad()."','".$ciudad->getLocalidadCiudad()."')";


  self::getConectar();

  $resultadoInsertar = self::$conectarDB->prepare($query);

  $resultadoInsertar->execute();


  }







}


?>
