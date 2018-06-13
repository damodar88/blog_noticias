<?php


class Usuario_model
{
  private $db;
  private $usuario;

  function __construct(){

    require_once('model/Conectar.php');

    $this->db = Conectar::conexion();

    $this->usuario = array();

  }

  public function get_usuario(){
    //$this->usuario = array();

    //$consultaSQL = $this->db->query('SELECT ID_USUARIO,nombreUsuario,apellidoPaternoUsuario,apellidoMaternoUsuario,ocupacionUsuario FROM USUARIO');

    require('Paginacion.php');

    $consulta = $this->db->query("SELECT * FROM USUARIO LIMIT $empezar_desde, $tamano_pagina"); //LIMIT $empezar_desde,$tamano_paginas

    while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

      $this->usuario[]=$filas;

    }

    return $this->usuario;

  }






}
