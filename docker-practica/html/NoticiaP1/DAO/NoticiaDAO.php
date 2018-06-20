<?php

include('../Librery/Conectar.php');
include('../Entidades/Noticia.php');
/**
 *
 */
class NoticiaDAO extends Conectar
{

  protected static $conectarDB;

  public static function getConectar(){

    self::$conectarDB = Conectar::conexion();

  }

  private static function desconectar(){

    self::$conectarDB = null;

  }

  public static function insertarNoticia(Noticia $noticia){

  $query = "INSERT INTO NOTICIA(
    referenciaImagenNoticia,fechaNoticia,secionNoticia,noticiaNoticia,tituloNoticia) VALUES
   (:imagen,:fecha,:secion,:noticia,:titulo)";


  self::getConectar();

  $resultadoInsertar = self::$conectarDB->prepare($query);


        $resultadoInsertar->bindParam(":imagen",$noticia->getReferenImagenNoticia());
        $resultadoInsertar->bindParam(":fecha",$noticia->getFechaNoticia());
        $resultadoInsertar->bindParam(":secion",$noticia->getSecionNoticia());
        $resultadoInsertar->bindParam(":noticia",$noticia->getNoticiaNoticia());
        $resultadoInsertar->bindParam(":titulo",$noticia->getTituloNoticia());



      if ($resultadoInsertar->execute()) {
        return true;
      }
        return false;

  }




  public function getContenidoPorFecha(){

    $matriz = array();

    $contador = 0;

    $resultado = "SELECT ID_NOTICIA,referenciaImagenNoticia,fechaNoticia,secionNoticia,SUBSTRING(noticiaNoticia ,'1','80'),tituloNoticia FROM NOTICIA ORDER BY fechaNoticia DESC";

    self::getConectar();

    $resultado = self::$conectarDB->query($resultado);

      while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {

        $noticia = new Noticia();

        $noticia->setIdNoticia($registro["ID_NOTICIA"]);
        $noticia->setReferenImagenNoticia($registro["referenciaImagenNoticia"]);
        $noticia->setFechaNoticia($registro["fechaNoticia"]);
        $noticia->setSecionNoticia($registro["secionNoticia"]);
        $noticia->setNoticiaNoticia($registro["SUBSTRING(noticiaNoticia ,'1','80')"]);
        $noticia->setTituloNoticia($registro["tituloNoticia"]);

        $matriz[$contador]=$noticia;

        $contador++;

      }

    return $matriz;

  }

  public static function getContenidoEspecifico(){

    $matriz = array();

    $contador = 0;

    $resultado = "SELECT ID_NOTICIA,referenciaImagenNoticia,fechaNoticia,secionNoticia,noticiaNoticia,tituloNoticia FROM NOTICIA WHERE :idBuscar = ID_NOTICIA,";

    self::getConectar();

    $resultadoInsertar = self::$conectarDB->prepare($query);

    $resultadoInsertar->bindParam(":idBuscar",$noticia->get());

    if ($resultadoInsertar->execute()) {
      return true;
    }
      return false;


  }


    public static function paginacionNoticia(){

      //require_once('../Helper/Paginacion.php');

      $sql_total = "SELECT * FROM NOTICIA";// ORDER BY numeroRegion LIMIT $tamano_pagina offset $empezar_desde";

      self::getConectar();

      $resultado = self::$conectarDB->prepare($sql_total);

      $resultado->execute(array());

      $num_filas = $resultado->rowCount();

      return $num_filas;

    }



    /*
      public function obtenerNoticia(){

        $region = array();

        require_once('../Helper/Paginacion.php');

        self::getConectar();

        $consulta = self::$conectarDB->query("SELECT * FROM REGION ORDER BY numeroRegion LIMIT $tamano_pagina offset $empezar_desde");  // LIMIT $empezar_desde, $tamano_pagina")

          while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

            $region[]=$filas;

          }

        return $region;

      }
      */


 }

?>
