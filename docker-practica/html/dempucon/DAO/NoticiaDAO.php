<?php

include('../Librery/Conectar.php');
include('../Entidades/Noticia.php');
include('../Entidades/Usuario.php');
include('../Entidades/Comentario.php');
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
    referenciaImagenNoticia,fechaNoticia,secionNoticia,noticiaNoticia,tituloNoticia,USUARIO_ID_USUARIO) VALUES
   (:imagen,:fecha,:secion,:noticia,:titulo,:idUsuario)";


  self::getConectar();

  $resultadoInsertar = self::$conectarDB->prepare($query);


        $resultadoInsertar->bindParam(":imagen",$noticia->getReferenImagenNoticia());
        $resultadoInsertar->bindParam(":fecha",$noticia->getFechaNoticia());
        $resultadoInsertar->bindParam(":secion",$noticia->getSecionNoticia());
        $resultadoInsertar->bindParam(":noticia",$noticia->getNoticiaNoticia());
        $resultadoInsertar->bindParam(":titulo",$noticia->getTituloNoticia());
        $resultadoInsertar->bindParam(":idUsuario",$noticia->getUsuarioIdUsuario());

//$resultadoInsertar->execute()
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

  public static function getContenidoEspecifico($noticia){

    $query = "SELECT ID_NOTICIA,referenciaImagenNoticia,fechaNoticia,secionNoticia,noticiaNoticia,tituloNoticia FROM NOTICIA WHERE ID_NOTICIA= :idNoticia";

    self::getConectar();

    $resultado = self::$conectarDB->prepare($query);

    $resultado->bindParam(":idNoticia",$noticia->getIdNoticia());

    $resultado->execute();

    return $noticia;

  }

  public function obtenerNoticiaEsp(){

    $noticia = array();

    //require_once('../Helper/Paginacion.php');

    self::getConectar();

    $consulta = self::$conectarDB->query("SELECT * FROM NOTICIA");// LIMIT $empezar_desde, $tamano_pagina")


      while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

        $noticia[]=$filas;

      }

    return $noticia;

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


    public function obtenerComentario(){

          $comentario = array();

          //require_once('../Helper/Paginacion.php');

          self::getConectar();

          $consulta = self::$conectarDB->query("SELECT ID_LECTOR,nombreLector,ID_COMENTARIO,fechaComentario,LECTOR_ID_LECTOR,NOTICIA_ID_NOTICIA,comentarioComentario
                                                FROM LECTOR
                                                INNER JOIN COMENTARIO ON LECTOR_ID_LECTOR = ID_LECTOR
                                                ORDER BY fechaComentario;"); //$empezar_desde, $tamano_pagina");  // LIMIT $empezar_desde, $tamano_pagina")

            while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

              $comentario[]=$filas;

            }

          return $comentario;

    }





  public static function borrarNoticia($eliminarNoticia){

  $query = "DELETE FROM `mydb`.`NOTICIA` WHERE `ID_NOTICIA`=:idNoticia";

  self::getConectar();

  $resultado = self::$conectarDB->prepare($query);

  $resultado->bindParam(":idNoticia",$eliminarNoticia->getIdNoticia());

  $resultado->execute();

  //$numeroRegistro = $resultado->rowCount();

  }




 }

?>
