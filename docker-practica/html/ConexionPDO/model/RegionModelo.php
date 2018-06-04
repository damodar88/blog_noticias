<?php

class RegionModelo
  {

    private $db;
    private $nombreRegion;

    public function __construct()
    {
      //
      require_once('model/Conectar.php');

      $this->db=Conectar::conexion();

      $this->nombreRegion = array();

    }


    public function get_nombreRegion(){

      $consulta = $this->db->query('SELECT nombreRegion  FROM REGION');

      while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){

        $this->nombreRegion[]=$filas;

      }

    return $this->nombreRegion;
    }



  }



?>
