<?php

include('../DAO/NoticiaDAO.php');
/**
 *
 */
class NoticiaController
{

 public static function ingresarNoticia($noticiaTitulo,$noticiaSecion,$noticiaNoticia,$noticiaImagen,$noticiaFecha,$noticiaIdusuario){

    $noticiaIngresar = new Noticia();

    $noticiaIngresar->setTituloNoticia($noticiaTitulo);
    $noticiaIngresar->setSecionNoticia($noticiaSecion);
    $noticiaIngresar->setNoticiaNoticia($noticiaNoticia);
    $noticiaIngresar->setReferenImagenNoticia($noticiaImagen);
    $noticiaIngresar->setFechaNoticia($noticiaFecha);
    $noticiaIngresar->setUsuarioIdUsuario($noticiaIdusuario);

     NoticiaDAO::insertarNoticia($noticiaIngresar);

  }

  //trae datos noticia administracion Admin
  public static function getNoticia(){

    $noticia = new Noticia();
    //$tabla_blog = array();

    $tabla_blog = NoticiaDAO::getContenidoPorFecha();

    return $tabla_blog;
  }







  public static function leerNoticiaEspe(){

    $datosNoticia = array();

    $datosNoticia = NoticiaDAO::obtenerNoticiaEsp();

    return $datosNoticia;

  }

  public static function leerComentario(){

    $datosComentario = array();

    $datosComentario = NoticiaDAO::obtenerComentario();

    return $datosComentario;

  }


  public static function eliminarNoticia($idNoticia){

    $eliminarNoticia = new Noticia();
    $eliminarNoticia->setIdNoticia($idNoticia);

    return NoticiaDAO::borrarNoticia($eliminarNoticia);

  }


  public static function modificarNoticia($idNoticia,$refImagen,$titulo,$noticia,$seccion,$noticiaFecha,$noticiaIdusuario){

    $modificarNoticia = new Noticia();
    $modificarNoticia->setIdNoticia($idNoticia);
    $modificarNoticia->setTituloNoticia($titulo);
    $modificarNoticia->setReferenImagenNoticia($refImagen);
    $modificarNoticia->setNoticiaNoticia($noticia);
    $modificarNoticia->setFechaNoticia($noticiaFecha);
    $modificarNoticia->setSecionNoticia($seccion);
    $modificarNoticia->setUsuarioIdUsuario($noticiaIdusuario);


    return NoticiaDAO::actualizarNoticia($modificarNoticia);

  }




}


 ?>
