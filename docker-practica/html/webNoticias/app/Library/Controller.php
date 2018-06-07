<?php




/**
 *
 */
class Controller
{

  function __construct()
  {
    //echo "conrolador que controla controladores";
  }

  function loadClassModel(){

    $model = get_class($this).'_model';
    $path = 'Model/'.$model.'php';

  }





}






 ?>
