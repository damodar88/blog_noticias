<?php


/**
 *
 */
class Region {
    private $idRegin;
    private $nombreRegion;
    private $nuemroRegion;
    private $comunaRegion;

    public function getComunaRegion() {
        return $this->comunaRegion;
    }

    public function setComunaRegion($comunaRegion) {
        $this->comunaRegion = $comunaRegion;
    }

    public function getIdRegin() {
        return $this->idRegin;
    }

    public function getNombreRegion() {
        return $this->nombreRegion;
    }

    public function getNuemroRegion() {
        return $this->nuemroRegion;
    }

    public function setIdRegin($idRegin) {
        $this->idRegin = $idRegin;
    }

    public function setNombreRegion($nombreRegion) {
        $this->nombreRegion = $nombreRegion;
    }

    public function setNuemroRegion($nuemroRegion) {
        $this->nuemroRegion = $nuemroRegion;
    }



}





?>
