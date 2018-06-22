<?php

include('../Librery/Conectar.php');
include('../Entidades/Comentario.php');
/**
 *
 */
class ComentarioDAO extends Conectar
{

  protected static $conectarDB;

  public static function getConectar(){

    self::$conectarDB = Conectar::conexion();

  }

  private static function desconectar(){

    self::$conectarDB = null;

  }

  public static function insertarComentario(Comentario $comentario){

  $query = "INSERT INTO COMENTARIO(fechaComentario,LECTOR_ID_LECTOR,NOTICIA_ID_NOTICIA,comentarioComentario)
            VALUES (:fecha,:lector,:idNoticia,:comentario)";

  self::getConectar();

  $resultadoInsertar = self::$conectarDB->prepare($query);

  $resultadoInsertar->bindParam(":fecha",$comentario->getFechaComentario());
  $resultadoInsertar->bindParam(":lector",$comentario->getIdLectorComentario());
  $resultadoInsertar->bindParam(":idNoticia",$comentario->getIdNoticiaComentario());
  $resultadoInsertar->bindParam(":comentario",$comentario->getComentarioComentario());

  $resultadoInsertar->execute();


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






}


 ?>
