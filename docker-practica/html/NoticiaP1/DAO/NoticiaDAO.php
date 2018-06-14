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


  public function getContenidoPorFecha(){

    $matriz = array();

    $contador = 0;

    $resultado = $this->conexion->query("SELECT * FROM NOTICIA ORDER BY fechaNoticia");

      while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {

        $blog = new EntidadNoticia();

        $blog->set_id($registro["ID_NOTICIA"]);
        $blog->set_imagen($registro["referenciaImagenNoticia"]);
        $blog->set_fechaNoticia($registro["fechaNoticia"]);
        $blog->set_seccionNoticia($registro["secionNoticia"]);
        $blog->set_noticia($registro["noticiaNoticia"]);
        $blog->set_tituloNoticia($registro["tituloNoticia"]);

        $matriz[$contador]=$blog;

        $contador++;

      }

    return $matriz;

  }







 }



?>
