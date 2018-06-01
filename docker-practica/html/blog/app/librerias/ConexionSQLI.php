<?php
  //clase abstarcata conexion
  abstract class Conexion
  {
    //atributos
    private static $db_host = DB_HOST;
    private static $db_usuario = DB_USUARIO;
    private static $db_password = DB_PASSWORD;
    private static $db_name = DB_NOMBRE;
    private static $db_charset = DB_CHARSET;
    private static $conn
    private static $query;
    private static $rows = array();

    //metodos abstractos
    abstract protected function create();
    abstract protected function read();
    abstract protected function update();
    abstract protected function delete();


    //metodo para conectarse a la base de $baseDatos
    private function db_open(){
      $this->conn = new mysqli(
        self::$db_host,
        self::$db_usuario,
        self::$db_password,
        self::$db_name
      );
      $this->conn->set_charset(self::$db_charset);
    }
    //Metodo para cerrar conexion a la base de datos
    private function db_close(){
      $this->conn->close();
    }

    //ejecutar una query simple del tipo INSERT, DELETE , update
    protected function set_query(){

    }

    //traer resultados de una consulta de tipo SELECT array
    private function get_query(){
      
    }







  }



 ?>
