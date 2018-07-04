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


  public static function getNoticia(){

    $noticia = new Noticia();

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

    $eliminarNoticia = new Usuario();
    $eliminarNoticia->setIdUsuario($idNoticia);

    return NoticiaDAO::borrarNoticia($eliminarNoticia);

  }




}


 ?>
