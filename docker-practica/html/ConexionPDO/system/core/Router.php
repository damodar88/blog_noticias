<?php


class Router
{

  public $uri;
  public $controller;
  public $method;
  public $param;

  public function __construct()
  {
    $this->setUri();
    $this->setController();
    $this->setMothod();
    $this->setParam();

  }
  //separamos uri URL por separacion /
  public function setUri(){

    $this->uri = explode('/',$_SERVER['REQUEST_URI']);

  }
  //array uri , en el puesto 2 si es vacio le asignamos el Home
  public function setController(){

    $this->controller = $this->uri[2] === '' ? 'Home' : $this->uri[2];

  }
  //si esta vacio  array en el [3] ejecuto 'exec'
  public function setMothod(){

    $this->method = !empty($this->uri[3]) ? $this->uri[3] : 'exec';

  }
  //si param es vacio le asignamos el array[4] si no asignamos vacio

  public function setParam(){

    $this->param = !empty($this->uri[4]) ? $this->uri[4] :'';

  }

  public function getUri(){

    return $this->uri;

  }

  public function getController(){

    return $this->controller;

  }

  public function getMethod(){

    return $this->method;

  }

  public function getParam(){

    return $this->param;

  }













}

 ?>
