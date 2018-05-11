<?php


/**
 *
 */
class Noticia {


    private $idNoticia;
    private $referenImagenNoticia;
    private $noticiaNoticia;
    private $fechaNoticia;
    private $secionNoticia;

    public function __construct($idNoticia, $referenImagenNoticia, $noticiaNoticia, $fechaNoticia, $secionNoticia) {
        $this->idNoticia = $idNoticia;
        $this->referenImagenNoticia = $referenImagenNoticia;
        $this->noticiaNoticia = $noticiaNoticia;
        $this->fechaNoticia = $fechaNoticia;
        $this->secionNoticia = $secionNoticia;
    }


    public function getIdNoticia() {
        return $this->idNoticia;
    }

    public function getReferenImagenNoticia() {
        return $this->referenImagenNoticia;
    }

    public function getNoticiaNoticia() {
        return $this->noticiaNoticia;
    }

    public function getFechaNoticia() {
        return $this->fechaNoticia;
    }

    public function getSecionNoticia() {
        return $this->secionNoticia;
    }

    public function setIdNoticia($idNoticia) {
        $this->idNoticia = $idNoticia;
    }

    public function setReferenImagenNoticia($referenImagenNoticia) {
        $this->referenImagenNoticia = $referenImagenNoticia;
    }

    public function setNoticiaNoticia($noticiaNoticia) {
        $this->noticiaNoticia = $noticiaNoticia;
    }

    public function setFechaNoticia($fechaNoticia) {
        $this->fechaNoticia = $fechaNoticia;
    }

    public function setSecionNoticia($secionNoticia) {
        $this->secionNoticia = $secionNoticia;
    }




}





?>
