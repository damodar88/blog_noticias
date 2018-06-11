<?php

  require('app/Library/Config.php');
  require('System/Core/Router.php');
  $router = new Router();


  //echo "<pre>";
  //print_r($router->getUrl());
  //echo"<pre>";
  $controlador = $router->getController();
  $metodo = $router->getMethod();
  $param = $router->getParam();

  echo "controlador: {$controlador} <br>";
  echo "metodo: {$metodo} <br>";
  echo "Param: {$param} <br>";


  //evaluar si hay una clase cargada
spl_autoload_register(function($class){
      //si la clase esta cargada , ejecuta libreria clase
      if(file_exists(LBS.$class.".php")){
        require LBS.$class.".php";

      }

    });
//conrolador y metodo parametro
$controllerPath = 'app/Controller/'.$controlador.'.php';

   //si existe el controlador por URL
  if (file_exists($controllerPath)) {

      require $controllerPath;
      $controlador = new $controlador();

      //si esta variable contiene metodo
    if (isset($metodo)) {

          //si existe el metodo llama por url
        if (method_exists($controlador,$metodo)) {

              //verificamos la variable contiene parametro
              if (isset($param)) {

              $controlador->{$metodo}($param);

              }else {

                $controlador->{$metodo}();

              }


        //fin de method_exists
        }else {
              echo "<br>No existe el metodo";
      }
    //fin de if isset $metodo
    }
  //fin de if file_exists
  }else {
        echo "<br>No existe el controlador";
  }


 ?>
