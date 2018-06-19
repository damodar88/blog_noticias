<?php

include('../DAO/ContactoDAO.php');
/**
 *
 */
class ContactoController
{

  public static function ingresarContacto($ciudadNombre,$ciudadLocalidad)
  {

    $ciudadIngresar = new Contacto();

    $ciudadIngresar->setNombreCiudad($ciudadNombre);
    $ciudadIngresar->setLocalidadCiudad($ciudadLocalidad);

     CiudadDAO::insertarCiudad($ciudadIngresar);

  }

  public static function leerContacto(){

    $datosContacto = array();

    $datosContacto = ContactoDAO::obtenerContacto();

    return $datosContacto;

  }


}







 ?>
