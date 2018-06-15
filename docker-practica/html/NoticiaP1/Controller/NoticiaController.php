<?php

include('../DAO/NoticiaDAO.php');
/**
 *
 */
class NoticiaController
{

  public static function ingresrNoticia($calleNombre,$calleNumero)
  {

    $noticiaIngresar = new Noticia();

    $noticiaIngresar->setNombreCalle($calleNombre);
    $noticiaIngresar->setNumeroCalle($calleNumero);

     NoticiaDAO::insertarNoticia($calleIngresar);

  }

  public static function getNoticia(){

    $noticia = new Noticia();

    $tabla_blog = NoticiaDAO::getContenidoPorFecha();

  
    return $tabla_blog;
  }




}







 ?>
