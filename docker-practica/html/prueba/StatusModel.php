
<?php

require_once('Model.php');


class StatusModel extends Model  {

  public $status_id;
  public $status;

  public function __construct(){
        $this->db_name = 'mydb';
  }

  public function create(){

  }

  public function read($region_id = ''){
    $this->query = ($region_id != '')
         ?"SELECT * FROM REGION WHERE ID_REGION = region_id"
         :"SELECT * FROM REGION";
    //debuelbe el arreglo rows
    $this->get_query();
  }

  public function update(){

  }

  public function delete(){


  }


  public function __destruct(){
    unset($this);
  }


}
