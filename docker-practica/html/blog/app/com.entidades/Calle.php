<?php


/**
 *
 */
  class Calle {

    private $idCalle;
    private $nombreCalle;
    private $numeroCalle;


    public function __construct($idCalle,$nombreCalle,$numeroCalle)
    {
        $this->idCalle = $idCalle;
        $this->nombreCalle = $nombreCalle;
        $this->numeroCalle = $numeroCalle;
    }

    public function getIdCalle(){
        return $this->idCalle;
    }

    public function getNombreCalle(){
        return $this->nombreCalle;
    }

    public function getNumeroCalle(){
        return $this->numeroCalle;
    }

    public function setIdCalle($idCalle){
        return $this->idCalle = $idCalle;
    }

    public function setNombreCalle($nombreCalle){
        return $this->nombreCalle = $nombreCalle;
    }

    public function setNumeroCalle($numeroCalle){
        return $this->numeroCalle = $numeroCalle;
    }


  }


?>
