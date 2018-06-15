<?php

include('../DAO/NoticiaDAO.php');
/**
 *
 */
class NoticiaController
{

 public static function ingresarNoticia($noticiaTitulo,$noticiaSecion,$noticiaNoticia,$noticiaImagen,$noticiaFecha){

    $noticiaIngresar = new Noticia();

    $noticiaIngresar->setTituloNoticia($noticiaTitulo);
    $noticiaIngresar->setSecionNoticia($noticiaSecion);
    $noticiaIngresar->setNoticiaNoticia($noticiaNoticia);
    $noticiaIngresar->setReferenImagenNoticia($noticiaImagen);
    $noticiaIngresar->setFechaNoticia($noticiaFecha);

     NoticiaDAO::insertarNoticia($noticiaIngresar);

  }


  public static function getNoticia(){

    $noticia = new Noticia();

    $tabla_blog = NoticiaDAO::getContenidoPorFecha();


    return $tabla_blog;
  }




}







 ?>
