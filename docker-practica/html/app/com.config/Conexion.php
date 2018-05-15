<?php


  require ("config.php");

  /**
   *
   */
  class Conexion {

    protected $conexion_db;


    public function __construct()
    {
      $this->conexion_db= new mysqli(DB_HOST,DB_USUARIO,DB_PASSWORD,DB_NOMBRE,DB_CHARSET);
      if($this->conexion_db->connect_error ){
        echo "Fallo la conexion a la Base de datos".$this->conexion_db->connect_error;
        return;
      }

      $this->conexion_db->set_charset(DB_CHARSET);
    }




  }



?>
