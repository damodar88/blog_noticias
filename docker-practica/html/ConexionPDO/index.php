<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" type="text/css" href="estiloCRUD.css">

  </head>
  <body>

    <h1>MVC </h1>

    <?php

    //lectura de tabla region
    //require_once('controller/RegionController.php');

    //CREUD USUARIO
    require_once('controller/Usuario_controller.php');

    //Lectura Noticia
    //require_once('controller/NoticiaControler.php');

    //formulario Ingreso noticias
    //require_once('controller/TransaccionControler.php');


    //login
    //require_one('controler/loginControler.php');

    //echo $_SERVER['REQUEST_URI'];

    require('system/Config.php');
    require('system/core/Router.php');
    $router = new Router();

    echo "<pre>";
    print_r($router->getUri());
    echo"<pre>";
    $controlador = $router->getController();
    $metodo = $router->getMethod();
    $param = $router->getParam();

    echo "controlador: {$controlador} <br>";
    echo "metodo: {$metodo} <br>";
    echo "Param: {$param} <br>";


    ?>



  </body>
</html>
