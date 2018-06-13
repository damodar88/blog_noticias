<?php

include('../DAO/CalleDAO.php');
/**
 *
 */
class CalleController
{

  public static function ingresrCalle($calleNombre,$calleNumero)
  {

    $calleIngresar = new Calle();

    $calleIngresar->setNombreCalle($calleNombre);
    $calleIngresar->setNumeroCalle($calleNumero);

     CalleDAO::insertarCalle($calleIngresar);

  }



}







 ?>
