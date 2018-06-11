<?php


/**
 *
 */
class Lector {

    private $idLector;
    private $nombreLector;
    
    
    public function __construct($idLector, $nombreLector) {
        $this->idLector = $idLector;
        $this->nombreLector = $nombreLector;
    }
    public function getIdLector() {
        return $this->idLector;
    }

    public function getNombreLector() {
        return $this->nombreLector;
    }

    public function setIdLector($idLector) {
        $this->idLector = $idLector;
    }

    public function setNombreLector($nombreLector) {
        $this->nombreLector = $nombreLector;
    }


    
  
}





?>
