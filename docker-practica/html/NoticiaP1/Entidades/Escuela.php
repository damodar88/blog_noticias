<?php


/**
 *
 */
  class Escuela {

    private $idEscuela;
    private $nombreEscuela;
    private $codigoEscuela;

    public function getIdEscuela(){
        return $this->idEscuela;
    }

    public function getNombreEscuela(){
        return $this->nombreEscuela;
    }

    public function getCodigoEscuela(){
        return $this->codigoEscuela;
    }

    public function setIdEscuela($idEscuela){
        return $this->idEscuela = $idEscuela;
    }

    public function setNombreEscuela($nombreEscuela){
        return $this->nombreEscuela = $nombreEscuela;
    }

    public function setCodigoEscuela($codigoEscuela){
        return $this->codigoEscuela = $codigoEscuela;
    }


  }


?>
