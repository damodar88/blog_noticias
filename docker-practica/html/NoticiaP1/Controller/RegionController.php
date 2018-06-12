<?php

include('../DAO/RegionDAO.php');
/**
 *
 */
class RegionController
{

  public static function ingresrRegion($regionNombre,$regionNumero,$regionComuna)
  {

    $regionIngresar = new Region();

    $regionIngresar->setNombreRegion($regionNombre);
    $regionIngresar->setNuemroRegion($regionNumero);
    $regionIngresar->setComunaRegion($regionComuna);

     RegionDAO::insertarRegion($regionIngresar);

  }



}







 ?>
