<?php

include('../DAO/CiudadDAO.php');
/**
 *
 */
class CiudadController
{

  public static function ingresrCiudad($ciudadNombre,$ciudadLocalidad)
  {

    $ciudadIngresar = new Ciudad();

    $ciudadIngresar->setNombreCiudad($ciudadNombre);
    $ciudadIngresar->setLocalidadCiudad($ciudadLocalidad);

     CiudadDAO::insertarCiudad($ciudadIngresar);

  }



}







 ?>
