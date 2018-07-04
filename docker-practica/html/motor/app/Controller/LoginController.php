<?php
/**
 *
 */
class LoginController extends Controller{



  public function __construct(){

    //$response = "";
    parent::__construct();

  }


  public function Login(){

    $this->view->render($this,'Login');
    //var_dump($this->view);

  }




}

 ?>
