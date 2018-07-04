<?php


class Router
{

  public $url;
  public $controller;
  public $method;
  public $param;

  public function __construct()
  {
    $this->setUrl();
    $this->setController();
    $this->setMothod();
    $this->setParam();

  }
  //separamos uri URL por separacion /
  public function setUrl(){

    $this->url = explode('/',URI);

  }
  //array uri , en el puesto 2 si es vacio le asignamos el 'Home' vacio
  public function setController(){

    $this->controller = $this->url[2] === '' ? 'Home' : $this->url[2];

  }
  //si esta vacio  array en el [3] ejecuto 'exec'
  public function setMothod(){

    $this->method = !empty($this->url[3]) ? $this->url[3] : 'exec';

  }
  //si param es vacio le asignamos el array[4] si no asignamos vacio

  public function setParam(){

    $this->param = !empty($this->url[4]) ? $this->url[4] :'';

  }

  public function getUrl(){

    return $this->url;

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
