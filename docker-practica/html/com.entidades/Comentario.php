<?php


/**
 *
 */
class Comentario {
    
    private $idComentario;
    private $fechaComentario;
    private $comentarioComentario;
    

    public function __construct($idComentario, $fechaComentario, $comentarioComentario) {
        $this->idComentario = $idComentario;
        $this->fechaComentario = $fechaComentario;
        $this->comentarioComentario = $comentarioComentario;
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


    
    
    
    }

