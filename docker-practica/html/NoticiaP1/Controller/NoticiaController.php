<?php

include('../DAO/CalleDAO.php');
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



}







 ?>
