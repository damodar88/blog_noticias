<?php


class Controller
{

  function __construct(){

    $this->view = new View();
    $this->loadClassModel();
  }



  function loadClassModel(){

    $model = get_class($this).'_model';
    $path = 'app/'.'Model/'.$model.'.php';
    if (file_exists($path)) {

      require $path;
      $this->model = new $model();

    }



  }





}






 ?>
