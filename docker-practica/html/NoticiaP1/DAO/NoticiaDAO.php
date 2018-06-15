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

    $resultado = "SELECT * FROM NOTICIA ORDER BY fechaNoticia";

    self::getConectar();

    $resultado = self::$conectarDB->query($resultado);

      while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {

        $noticia = new Noticia();

        $noticia->setIdNoticia($registro["ID_NOTICIA"]);
        $noticia->setReferenImagenNoticia($registro["referenciaImagenNoticia"]);
        $noticia->setFechaNoticia($registro["fechaNoticia"]);
        $noticia->setSecionNoticia($registro["secionNoticia"]);
        $noticia->setNoticiaNoticia($registro["noticiaNoticia"]);
        $noticia->setTituloNoticia($registro["tituloNoticia"]);

        $matriz[$contador]=$noticia;

        $contador++;

      }

    return $matriz;

  }

  public static function getNoticia($noticia){

    $query = "SELECT * FROM NOTICIA ORDER BY fechaNoticia";

    self::getConectar();

    $resultado = self::$conectarDB->query($query);

    $resultado->execute();

    $filas = $resultado->fetch();

    $noticia = new Noticia();

    $noticia->setIdNoticia($registro["ID_NOTICIA"]);
    $noticia->setReferenImagenNoticia($registro["referenciaImagenNoticia"]);
    $noticia->setFechaNoticia($registro["fechaNoticia"]);
    $noticia->setSecionNoticia($registro["secionNoticia"]);
    $noticia->setNoticiaNoticia($registro["noticiaNoticia"]);
    $noticia->setTituloNoticia($registro["tituloNoticia"]);


    return $noticia;
  }


 }

?>
