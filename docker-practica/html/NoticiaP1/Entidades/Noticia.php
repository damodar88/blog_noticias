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
    private $tituloNoticia;


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

    public function getTituloNoticia() {
        return $this->tituloNoticia;
    }

    public function setTituloNoticia($tituloNoticia) {
        $this->tituloNoticia = $tituloNoticia;
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
