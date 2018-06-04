<?php

include('FormularioNoticiaModel.php');


class ManejoObjetos
{

  private $conexion;

  public function __construct(){

      $this->setConexion($conexion);
  }

  public function setConexion(PDO $conexion){

      $this->conexion=$conexion;
  }

  public function getContenidoPorFecha(){

    $matriz = array();

    $contador = 0;

    $resultado = $this->conexion->query("SELECT * FROM NOTICIA ORDER BY fechaNoticia");

    while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {

      $blog = new FormularioNoticiaModel();

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



  public function insertaContenido(FormularioNoticiaModel $blog){

    $sql="INSERT INTO NOTICIA(referenciaImagenNoticia,fechaNoticia,secionNoticia,noticiaNoticia,tituloNoticia) VALUES ('".$blog->get_imagen()."','".$blog->get_fechaNoticia()."','".$blog->get_seccionNoticia()."','".$blog->get_noticia()."','".$blog->get_tituloNoticia()."')";

    $this->conexion->exec($sql);

  }









}





?>
