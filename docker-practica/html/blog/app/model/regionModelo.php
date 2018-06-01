<?php


  /**
   *
   */
  class regionModelo
  {

    private $db;
    private $nombreRegion;

    public function __construct()
    {
      //
      require_once("librerias/ConectarDB.php");
      $this->db=ConectarDB::conexion();

      $this->nombreRegion->array();

    }


    public function get_region(){

      $consulta=$this->db->query("SELECT * FROM REGION");

      while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
        // code...
        $this->nombreRegion[]=$filas;
      }
      return $this->nombreRegion;

    }



  }



 ?>
