<?php
 /**
  *
  */
 class Usuario_model{

   private $db;
   private $usuario;


   function __construct()
   {
     require_once("/ConectarDB.php");
     // code...
    $this->db=ConectarDB::conexion();
    $this->usuario=array();
   }

   public function get_usuario(){
     $consulta=$this->db->query("SELECT * FROM USUARIO");

     while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)) {
       $this->usuario[]=$filas;
     }
     return $this->usuario;
   }


 }

?>
