<?php
/**
 *
 */
class Index extends Controller{


  //public $response;

  public function __construct(){

    //$response = "";
    parent::__construct();

  }


  public function index(){

    $this->view->render($this,'Index');
    //var_dump($this->view);

  }






  /*
  public function index(){

    $this->response = $this->model->datosPersonales();
    $dato = $this->response;
    require VIEW."Index.php";

  }

  public function index2($valor){
    //fijate en las variables de recorrido
    $dato = NULL;
    $i = 0;
    $this->response = $this->model->datosPersonales();
    $datos = $this->response;

    foreach($datos as  $value) {

      if ($datos[$i] == $datos[$valor]) {

        $dato = $datos[$i];

      }
      $i++;
    }

    require VIEW."Index.php";

  }
  */


}

 ?>
