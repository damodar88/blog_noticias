<?php
/**
 *
 */
class Index extends Controller{



  public function __construct(){

    //$response = "";
    parent::__construct();

  }


  public function index(){

    $this->view->render($this,'Index');
    //var_dump($this->view);

  }




}

 ?>
