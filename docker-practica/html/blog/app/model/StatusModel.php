
<?php

require_once("librerias/ConexionSQLI.php");


class StatusModel extends ConexionSQLI
{

  public $status_id;
  public $status;

  public function __construct()
  {
    $this->$db_name = 'mydb';
  }

  public function __destruct(){

  }












}

 
