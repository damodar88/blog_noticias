<?php



/**
 *
 */
class View
{

  function __construct()
  {
    // code...
  }


  function render($controller,$view){

    $controller = get_class($controller);
    require VIEW.DFT."head.php";

    require VIEW.$controller.'/'.$view.'.php';

    require VIEW.DFT."footer.php";

  }







}



 ?>
