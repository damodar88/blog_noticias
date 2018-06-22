<?php


/**
 *
 */
class Comentario {

    private $idComentario;
    private $fechaComentario;
    private $comentarioComentario;
    private $idNoticiaComentario;
    private $idLectorComentario;


    public function getIdLectorComentario(){
      return $this->idLectorComentario;
    }

    public function getIdNoticiaComentario(){
      return $this->idNoticiaComentario;
    }

    public function getIdComentario() {
        return $this->idComentario;
    }

    public function getFechaComentario() {
        return $this->fechaComentario;
    }

    public function getComentarioComentario() {
        return $this->comentarioComentario;
    }

    public function setIdComentario($idComentario) {
        $this->idComentario = $idComentario;
    }

    public function setFechaComentario($fechaComentario) {
        $this->fechaComentario = $fechaComentario;
    }

    public function setComentarioComentario($comentarioComentario) {
        $this->comentarioComentario = $comentarioComentario;
    }

    public function setIdNoticiaComentario($idNoticiaComentario) {
        $this->idNoticiaComentario = $idNoticiaComentario;
    }

    public function setIdLectorComentario($idLectorComentario) {
        $this->idLectorComentario = $idLectorComentario;
    }





    }
