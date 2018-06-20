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


  public static function getNoticiaEspecifica($idNoticia){

    $noticia = new Noticia();

    $tabla_noticia = NoticiaDAO::getContenidoEspecifico();


    return $tabla_noticia;
  }




}







 ?>
