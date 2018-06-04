<?php
//require_once('Config.php');
  //clase abstarcata conexion
abstract class Model {

    //atributos
    private static $db_host = 'docker-practica_mysql_1';
    private static $db_usuario = 'root';
    private static $db_password = 'pass';
    protected  $db_name;
    private static $db_charset = 'utf8';
    private  $conn;
    protected  $query;
    protected  $rows = array();

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
        $this->$db_name
      );
      $this->conn->set_charset(self::$db_charset);
    }

    public function db_cnx(){
      try {
        $base= new PDO('mysql:host=docker-practica_mysql_1; port=3306; dbname=mydb', 'root', 'pass');

        echo "Conexion";

      } catch (Exception $e){
        die('Error--:'.$e->GetMessage());
      }finally{
        $base=null;
      }
    }



    //Metodo para cerrar conexion a la base de datos
    private function db_close(){
      $this->conn->close();
    }

    //ejecutar una query simple del tipo INSERT, DELETE , update
    protected function set_query(){
      $this->db_open();
      //este query es de mysqli no de variable de arruba
      $this->conn->query($this->query);
      $this->db_close();
    }

    //traer resultados de una consulta de tipo SELECT array
    protected function get_query(){
      $this->db_open();
      $result = $this->conn->query($this->query);

      while ($this->rows[] = $result->fetch_assoc() );
      $result->close();

      $this->db_close();

      return $this->rows;


    }





}
