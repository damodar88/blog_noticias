<?php

  class Conectar{

    public static function conexion(){
      try {

      $conexion= new PDO('mysql:host=docker-practica_mysql_1; port=3306; dbname=mydb', 'root', 'pass');

      $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $conexion->exec("SET CHARACTER SET UTF8");

      }catch (Exception $e){
      die('Error--:'.$e->getMessage());
      echo "Liena del error--".$e->getLine();
      }
    return $conexion;
    }

  }


?>
