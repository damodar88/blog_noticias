<?php


/**
 *
 */
class Usuario {

    private $idUsuario;
    private $fechaModificacionUsuario;
    private $nombreUsuario;
    private $apellidoMaternoUsuario;
    private $apellidoPaternoUsuario;
    private $administradorUsuario;
    private $usuarioUsuario;
    private $passwordUsuario;


    public function __construct($idUsuario,$fechaModificacionUsuario,$nombreUsuario,$apellidoMaternoUsuario,$apellidoPaternoUsuario,$administradorUsuario,$usuarioUsuario,$passwordUsuario){
        $this->idUsuario = $idUsuario;
        $this->fechaModificacionUsuario = $fechaModificacionUsuario;
        $this->nombreUsuario = $nombreUsuario;
        $this->apellidoMaternoUsuario = $apellidoMaternoUsuario;
        $this->apellidoPaternoUsuario = $apellidoPaternoUsuario;
        $this->administradorUsuario = $administradorUsuario;
        $this->usuarioUsuario = $usuarioUsuario;
        $this->passwordUsuario = $passwordUsuario;
    }


    public function getIdUsuario(){
        $this->idUsuario;
    }

    public function getFechaModificacionUsuario(){
        $this->fechaModificacionUsuario;
    }

    public function getNombreUsuario(){
        $this->nombreUsuario;
    }

    public function getApellidoMaternoUsuario(){
        $this->apellidoMaternoUsuario;
    }

    public function getApellidoPaternoUsuario(){
        $this->apellidoPaternoUsuario;
    }

    public function getAdministradorUsuario(){
        $this->administradorUsuario;
    }

    public function getUsuarioUsuario(){
        $this->usuarioUsuario;
    }

    public function getPasswordUsuario(){
        $this->passwordUsuario;
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario = $idUsuario;
    }

    public function setFechaModificacionUsuario($fechaModificacionUsuario){
        $this->fechaModificacionUsuario = $fechaModificacionUsuario;
    }

    public function setNombreUsuario($nombreUsuario){
        $this->nombreUsuario = $nombreUsuario;
    }

    public function setApellidoMaternoUsuario($apellidoMaternoUsuario){
        $this->apellidoMaternoUsuario = $apellidoMaternoUsuario;
    }

    public function setapellidoPaternoUsuario($apellidoPaternoUsuario){
        $this->apellidoPaternoUsuario = $apellidoPaternoUsuario;
    }

    public function setAdministradorUsuario($administradorUsuario){
        $this->administradorUsuario = $administradorUsuario;
    }

    public function setUsuarioUsuario($usuarioUsuario){
        $this->usuarioUsuario = $usuarioUsuario;
    }

    public function setPasswordUsuario($passwordUsuario){
        $this->passwordUsuario = $passwordUsuario;
    }



  }





?>
