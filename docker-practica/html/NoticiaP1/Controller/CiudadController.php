<?php

include('../DAO/CiudadDAO.php');
/**
 *
 */
class CiudadController
{

  public static function ingresarCiudad($ciudadNombre,$ciudadLocalidad)
  {

    $ciudadIngresar = new Ciudad();

    $ciudadIngresar->setNombreCiudad($ciudadNombre);
    $ciudadIngresar->setLocalidadCiudad($ciudadLocalidad);

     CiudadDAO::insertarCiudad($ciudadIngresar);

  }



}







 ?>
