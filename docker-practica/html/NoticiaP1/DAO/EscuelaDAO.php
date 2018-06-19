<?php

include('../Librery/Conectar.php');
include('../Entidades/Escuela.php');
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



  public function obtenerEscuela(){

    $escuela = array();

    require_once('../Helper/PaginacionEscuela.php');

    self::getConectar();

    $consulta = self::$conectarDB->query("SELECT nombreEscuela,codigoEscuela,nombreRegion,numeroRegion,comunaRegion,nombreCiudad,localidadCiudad,nombreCalle,numeroCalle
                                          FROM ESCUELA
                                          INNER JOIN REGION ON REGION_ID_REGION = ID_REGION
                                          INNER JOIN CIUDAD ON CIUDAD_ID_CIUDAD = ID_CIUDAD
                                          INNER JOIN CALLE ON CALLE_ID_CALLE = ID_CALLE
                                          ORDER BY ID_ESCUELA LIMIT $tamano_pagina offset $empezar_desde");  // LIMIT $empezar_desde, $tamano_pagina")

      while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

        $escuela[]=$filas;

      }

    return $escuela;

  }

  public static function paginacionEscuela(){

    //require_once('../Helper/Paginacion.php');

    $sql_total = "SELECT * FROM ESCUELA";// LIMIT $empezar_desde, $tamano_pagina";

    self::getConectar();

    $resultado = self::$conectarDB->prepare($sql_total);

    $resultado->execute(array());

    $num_filas = $resultado->rowCount();

    return $num_filas;

  }







}


 ?>
