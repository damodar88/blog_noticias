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


    public function getIdUsuario(){
  return $this->idUsuario;
}

public function setIdUsuario($idUsuario){
  $this->idUsuario = $idUsuario;
}

public function getFechaModificacionUsuario(){
  return $this->fechaModificacionUsuario;
}

public function setFechaModificacionUsuario($fechaModificacionUsuario){
  $this->fechaModificacionUsuario = $fechaModificacionUsuario;
}

public function getNombreUsuario(){
  return $this->nombreUsuario;
}

public function setNombreUsuario($nombreUsuario){
  $this->nombreUsuario = $nombreUsuario;
}

public function getApellidoMaternoUsuario(){
  return $this->apellidoMaternoUsuario;
}

public function setApellidoMaternoUsuario($apellidoMaternoUsuario){
  $this->apellidoMaternoUsuario = $apellidoMaternoUsuario;
}

public function getApellidoPaternoUsuario(){
  return $this->apellidoPaternoUsuario;
}

public function setApellidoPaternoUsuario($apellidoPaternoUsuario){
  $this->apellidoPaternoUsuario = $apellidoPaternoUsuario;
}

public function getAdministradorUsuario(){
  return $this->administradorUsuario;
}

public function setAdministradorUsuario($administradorUsuario){
  $this->administradorUsuario = $administradorUsuario;
}

public function getUsuarioUsuario(){
  return $this->usuarioUsuario;
}

public function setUsuarioUsuario($usuarioUsuario){
  $this->usuarioUsuario = $usuarioUsuario;
}

public function getPasswordUsuario(){
  return $this->passwordUsuario;
}

public function setPasswordUsuario($passwordUsuario){
  $this->passwordUsuario = $passwordUsuario;
}

  }





?>
