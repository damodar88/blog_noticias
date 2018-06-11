<?php


/**
 *
 */
class Contacto {

  private $idContacto;
  private $telefonoContacto;
  private $correoContacto;


  public function __construct($idContacto, $telefonoContacto, $correoContacto) {
      $this->idContacto = $idContacto;
      $this->telefonoContacto = $telefonoContacto;
      $this->correoContacto = $correoContacto;
  }

  public function getIdContacto() {
      return $this->idContacto;
  }

  public function getTelefonoContacto() {
      return $this->telefonoContacto;
  }

  public function getCorreoContacto() {
      return $this->correoContacto;
  }

  public function setIdContacto($idContacto) {
      $this->idContacto = $idContacto;
  }

  public function setTelefonoContacto($telefonoContacto) {
      $this->telefonoContacto = $telefonoContacto;
  }

  public function setCorreoContacto($correoContacto) {
      $this->correoContacto = $correoContacto;
  }




}


?>
