<?php

  require('app/Library/Config.php');
  require('System/Core/Router.php');
  $router = new Router();

  echo "<pre>";
  print_r($router->getUrl());
  echo"<pre>";
  $controlador = $router->getController();
  $metodo = $router->getMethod();
  $param = $router->getParam();

  echo "controlador: {$controlador} <br>";
  echo "metodo: {$metodo} <br>";
  echo "Param: {$param} <br>";


  //evaluar si hay una clase cargada
  spl_autoload_register(function($class){

      if(file_exists(LBS.$class.".php")){
        require LBS.$class.".php";

      }

    });

$controllerPath = 'app/Controller/'.$controlador.'.php';

  if (file_exists($controllerPath)) {

      require $controllerPath;
      $controlador = new $controlador();

    if (isset($metodo)) {


        if (method_exists($controlador,$metodo)) {


            $controlador->{$metodo}();

        }else {
              echo "<br>No existe el metodo";
      }

    }

  }else {
        echo "<br>No existe el controlador";
  }






 ?>
