<?php

include('../DAO/EscuelaDAO.php');
/**
 *
 */
class EscuelaController
{

  public static function ingresrEscuela($regionNombre,$regionNumero,$regionComuna)
  {

    $regionIngresar = new Escuela();

    $escuelaIngresar->setNombreRegion($regionNombre);
    $escuelaIngresar->setNuemroRegion($regionNumero);
    $escuelaIngresar->setComunaRegion($regionComuna);

     EscuelaDAO::insertarRegion($escuelaIngresar);

  }

  public static function leerEscuela(){

    $datosEscuela = array();

    $datosEscuela = EscuelaDAO::obtenerEscuela();

    return $datosEscuela;

  }



}







 ?>
