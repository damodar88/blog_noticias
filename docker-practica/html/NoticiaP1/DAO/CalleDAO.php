<?php

include('../Librery/Conectar.php');
include('../Entidades/Calle.php');
/**
 *
 */
class CalleDAO extends Conectar
{

  protected static $conectarDB;

  public static function getConectar(){

    self::$conectarDB = Conectar::conexion();

  }

  private static function desconectar(){

    self::$conectarDB = null;

  }

  public static function insertarCalle(Calle $calle){

  $query = "INSERT INTO CALLE(nombreCalle,numeroCalle) VALUES ('".$calle->getNombreCalle()."','".$calle->getNumeroCalle()."')";

  self::getConectar();

  $resultadoInsertar = self::$conectarDB->prepare($query);

  $resultadoInsertar->execute();


  }






}


 ?>
