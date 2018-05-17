<?php


  //mapear la url en el navegador
  /*
  1-controlador
  2-metodo
  3-parametro
  Ejemplo: /articulo/actualizar/4
  */

  class Core {

    protected $controladorActual = 'paginas';
    protected $metodoActual = 'index';
    protected $parametros = [];

    //costructor
    public function __construct(){
        $url = $this->getUrl();

    }

    public function getUrl(){
        echo $_GET['url'];

    }




  }


?>
