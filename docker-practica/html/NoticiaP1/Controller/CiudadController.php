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

  public static function leerCiudad(){

    $datosCiudad = array();

    $datosCiudad = CiudadDAO::obtenerCiudad();

    return $datosCiudad;

  }


}







 ?>
