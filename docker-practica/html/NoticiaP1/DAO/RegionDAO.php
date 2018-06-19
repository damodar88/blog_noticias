<?php

include('../Librery/Conectar.php');
include('../Entidades/Region.php');
/**
 *
 */
class RegionDAO extends Conectar
{

  protected static $conectarDB;
  public static $region;

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


  public function obtenerRegion(){

    $region = array();

    require_once('../Helper/Paginacion.php');

    self::getConectar();

    $consulta = self::$conectarDB->query("SELECT * FROM REGION ORDER BY numeroRegion LIMIT $tamano_pagina offset $empezar_desde");  // LIMIT $empezar_desde, $tamano_pagina")

      while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

        $region[]=$filas;

      }

    return $region;

  }

  public static function paginacionRegion(){

    //require_once('../Helper/Paginacion.php');

    $sql_total = "SELECT * FROM REGION";// LIMIT $empezar_desde, $tamano_pagina";

    self::getConectar();

    $resultado = self::$conectarDB->prepare($sql_total);

    $resultado->execute(array());

    $num_filas = $resultado->rowCount();

    return $num_filas;

  }

}

?>
