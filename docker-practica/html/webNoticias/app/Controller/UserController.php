<?php


/**
 *
 */
class UserController extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function userLogin(){

      //verificamos si los campos vienen vacios
      if(isset($_POST["email"]) && isset($_POST["password"])){

        echo "1";

      }

  }










}


 ?>
