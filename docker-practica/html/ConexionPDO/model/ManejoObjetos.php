<?php

include('FormularioNoticiaModel.php');


class ManejoObjetos
{

  private $conexion;

  public function __construct(){

      $this->setConexion($conexion);
  }

  public function setConexion(PDO $conexion){

      $this->conexion=$conexion;
  }












}





?>
