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

  $query = "INSERT INTO NOTICIA(referenciaImagenNoticia,fechaNoticia,secionNoticia,noticiaNoticia) VALUES ('".$noticia->getReferenImagenNoticia()."','".$noticia->getFechaNoticia()."','".$noticia->getSecionNoticia()."','".$noticia->getNoticiaNoticia()."','".$noticia->getTituloNoticia()."')";


  self::getConectar();

  $resultadoInsertar = self::$conectarDB->prepare($query);

  $resultadoInsertar->execute();


  }


 }



?>
