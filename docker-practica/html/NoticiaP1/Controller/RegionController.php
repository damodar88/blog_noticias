<?php

include('../DAO/RegionDAO.php');
/**
 *
 */
class RegionController
{

  public static function ingresarRegion($regionNombre,$regionNumero,$regionComuna)
  {

    $regionIngresar = new Region();

    $regionIngresar->setNombreRegion($regionNombre);
    $regionIngresar->setNuemroRegion($regionNumero);
    $regionIngresar->setComunaRegion($regionComuna);

     RegionDAO::insertarRegion($regionIngresar);

  }

  public static function leerRegion(){

    $datosRegion = array();

    $datosRegion = RegionDAO::obtenerRegion();

    return $datosRegion;

  }






}







 ?>
