<?php

include('Conectar.php');
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







}


 ?>
