<?php


 /**
  *
  */
 class Usuario_model{

   private $db;
   private $usuario;


   function __construct()
   {
     require_once("ConectarDB.php");
     // code...
    $this->db=ConectarDB::conexion();
    $this->usuario=array();
   }


   public function get_usuario(){

   }


 }

?>
