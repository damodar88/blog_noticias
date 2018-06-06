<?php


class loginModel
{

  private $db;


  function __construct(){

    require_once('model/Conectar.php');

    $this->db = Conectar::conexion();

    $this->usuario = array();

  }

  public function get_autentificacion(){

    $consultaLogin = $this->db->query('SELECT usuarioUsuario,passwordUsuario FROM USUARIO');




  }




}







 ?>
