<?php

  //clase para conectarse a la base de datos y ejecutar consultas PDO
  /**
   *
   */


  class conectarseDB{


    private $host = DB_HOST;
    private $usuario = DB_USUARIO;
    private $password = DB_PASSWORD;
    private $baseDatos = DB_NOMBRE;
    private $dbh;
    private $stmt;
    private $error;


    public static function conexion(){

        $dsn = "mysql:host=$host:3306;dbname=$baseDatos;charset=$charset";


        try{

        $conexion=new PDO($dsn,$usuario,$password);


        }catch(Exception $e){
          die("Error--:".$e->getMessage());
          echo "Linea de error--:".$e->getLine();

        }catch(PDOException $e1){
        }

      return $conexion;


    }


}
